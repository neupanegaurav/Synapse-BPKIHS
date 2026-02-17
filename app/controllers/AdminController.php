<?php
/**
 * Admin Controller
 * Handles admin login, authentication, and dashboard.
 */

require_once MODEL_PATH . '/User.php';
require_once MODEL_PATH . '/Registration.php';

class AdminController extends Controller
{
    public function loginForm(): void
    {
        // Already logged in? Go to dashboard
        if (!empty($_SESSION['admin_logged_in'])) {
            $this->redirect('?page=dashboard');
            return;
        }

        $page = 'admin';
        $pageTitle = 'Admin Login';
        $this->render('admin/login', compact('page', 'pageTitle'));
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('?page=admin');
            return;
        }

        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($password)) {
            $_SESSION['flash_error'] = 'Please enter both username and password.';
            $this->redirect('?page=admin');
            return;
        }

        $userModel = new User();
        $user = $userModel->findByUsername($username);

        if ($user && $userModel->verifyPassword($password, $user)) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_username'] = $user['username'];
            $this->redirect('?page=dashboard');
        } else {
            $_SESSION['flash_error'] = 'Invalid credentials. Please try again.';
            $this->redirect('?page=admin');
        }
    }

    public function dashboard(): void
    {
        // Guard: must be logged in
        if (empty($_SESSION['admin_logged_in'])) {
            $this->redirect('?page=admin');
            return;
        }

        $page = 'dashboard';
        $pageTitle = 'Admin Dashboard';

        // Fetch registration data
        $regModel = new Registration();
        $registrations = [];
        $totalRegistrations = 0;

        try {
            $registrations = $regModel->getAll();
            $totalRegistrations = $regModel->count();
        } catch (Exception $e) {
            // DB might not be set up yet
            error_log('Dashboard error: ' . $e->getMessage());
        }

        $this->render('admin/dashboard', compact('page', 'pageTitle', 'registrations', 'totalRegistrations'));
    }
}
