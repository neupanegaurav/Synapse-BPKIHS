<?php
/**
 * Registration Handler
 * Securely handles participant registration and file uploads.
 */

require_once dirname(__DIR__) . '/core/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
	$db = Database::getInstance();

	$name = trim($_POST['name']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$contact = trim($_POST['contact']);
	$college = trim($_POST['college']);
	$faculty = trim($_POST['faculty']);
	$batch = trim($_POST['batch']);
	$events = isset($_POST['event']) ? implode(', ', (array) $_POST['event']) : '';

	// Validation
	if (empty($name) || empty($email) || empty($contact)) {
		echo "<script>alert('Critical fields missing!'); history.back();</script>";
		exit;
	}

	// Handle File Uploads
	$photo_name = '';
	$vouch_name = '';

	if (!empty($_FILES['photo']['name'])) {
		$photo_name = time() . '_' . basename($_FILES['photo']['name']);
		move_uploaded_file($_FILES['photo']['tmp_name'], UPLOAD_PATH . $photo_name);
	}

	if (!empty($_FILES['vphoto']['name'])) {
		$vouch_name = time() . '_v_' . basename($_FILES['vphoto']['name']);
		move_uploaded_file($_FILES['vphoto']['tmp_name'], UPLOAD_PATH . $vouch_name);
	}

	// Insert Data using Prepared Statements
	$sql = "INSERT INTO register (name, email, contact, college_name, faculty, batch, event, image, voucher_image) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

	try {
		$db->query($sql, [$name, $email, $contact, $college, $faculty, $batch, $events, $photo_name, $vouch_name]);
		echo "<script>alert('Registered successfully!'); window.location.href = '../register.php';</script>";
	} catch (Exception $e) {
		error_log($e->getMessage());
		echo "<script>alert('An error occurred. Please try again.'); history.back();</script>";
	}
}