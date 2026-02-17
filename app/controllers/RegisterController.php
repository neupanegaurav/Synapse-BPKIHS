<?php
/**
 * Register Controller
 * Handles participant registration form display and submission.
 */

require_once MODEL_PATH . '/Registration.php';

class RegisterController extends Controller
{
    public function showForm(): void
    {
        $page = 'register';
        $pageTitle = 'Registration';

        $events = [
            'Football', 'Cricket', 'Basketball', 'Volleyball',
            'Table Tennis', 'Badminton', 'Futsal / Cricsal',
            'Chess', 'Computer Gaming', 'Literary Events', 'Cultural Events'
        ];

        $this->render('register/form', compact('page', 'pageTitle', 'events'));
    }

    public function store(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('?page=register');
            return;
        }

        // Sanitize inputs
        $name    = trim($_POST['name'] ?? '');
        $email   = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $contact = trim($_POST['contact'] ?? '');
        $college = trim($_POST['college'] ?? '');
        $faculty = trim($_POST['faculty'] ?? '');
        $batch   = trim($_POST['batch'] ?? '');
        $events  = isset($_POST['event']) ? implode(', ', (array)$_POST['event']) : '';

        // Validation
        if (empty($name) || empty($email) || empty($contact)) {
            $_SESSION['flash_error'] = 'Please fill in all required fields.';
            $this->redirect('?page=register');
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['flash_error'] = 'Please enter a valid email address.';
            $this->redirect('?page=register');
            return;
        }

        // Handle file uploads
        $photo   = $this->handleUpload('photo');
        $voucher = $this->handleUpload('vphoto');

        // Save to database
        try {
            $model = new Registration();
            $model->create([
                'name'    => $name,
                'email'   => $email,
                'contact' => $contact,
                'college' => $college,
                'faculty' => $faculty,
                'batch'   => $batch,
                'events'  => $events,
                'photo'   => $photo,
                'voucher' => $voucher,
            ]);

            $_SESSION['flash_success'] = 'Registration successful! Welcome to Synapse.';
            $this->redirect('?page=register');
        } catch (Exception $e) {
            error_log('Registration error: ' . $e->getMessage());
            $_SESSION['flash_error'] = 'An error occurred. Please try again.';
            $this->redirect('?page=register');
        }
    }

    /**
     * Handle a single file upload.
     */
    private function handleUpload(string $fieldName): string
    {
        if (empty($_FILES[$fieldName]['name'])) {
            return '';
        }

        // Ensure upload directory exists
        if (!is_dir(UPLOAD_PATH)) {
            mkdir(UPLOAD_PATH, 0755, true);
        }

        $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', basename($_FILES[$fieldName]['name']));
        $target   = UPLOAD_PATH . $filename;

        if (move_uploaded_file($_FILES[$fieldName]['tmp_name'], $target)) {
            return $filename;
        }

        return '';
    }
}
