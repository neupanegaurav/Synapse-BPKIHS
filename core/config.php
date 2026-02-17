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
define('SITE_TAGLINE', 'All Nepal Medical College Meet');
define('BASE_URL', '/'); // Adjust this to your actual deployment URL

// Path Constants
define('CORE_PATH', __DIR__);
define('APP_ROOT', dirname(__DIR__));
define('VIEW_PATH', APP_ROOT . '/app/views');
define('CONTROLLER_PATH', APP_ROOT . '/app/controllers');
define('MODEL_PATH', APP_ROOT . '/app/models');
define('UPLOAD_PATH', APP_ROOT . '/uploads/');

// Error Reporting (Set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start Session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
