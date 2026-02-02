<?php
/**
 * Configuration File
 * Standardized constants and settings for the application.
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'synapse');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Site Constants
define('SITE_NAME', 'Synapse BPKIHS');
define('BASE_URL', 'http://localhost/Synapse-BPKIHS/'); // Adjust this to your actual deployment URL

// Path Constants
define('CORE_PATH', __DIR__);
define('UPLOAD_PATH', dirname(__DIR__) . '/student_images/');

// Error Reporting (Set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start Session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
