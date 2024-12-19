<?php

define('ENVIRONMENT', $_SERVER['CI_ENV'] ?? 'development');

switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;
    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        break;
    default:
        header('HTTP/1.1 503 Service Unavailable.', true, 503);
        echo 'The application environment is not set correctly.';
        exit(1); // EXIT_ERROR
}

$system_path = '../vendor/karyakode/framework/src';
$application_folder = '../app';

// Set system path
$system_path = realpath($system_path) ?: strtr(rtrim($system_path, '/\\'), '/\\', DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR);

// Check if system folder exists
if (!is_dir($system_path)) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'System folder path is incorrect.';
    exit(3); // EXIT_CONFIG
}

define('BASEPATH', $system_path);
define('FCPATH', dirname(__DIR__).DIRECTORY_SEPARATOR);
define('SYSDIR', basename(BASEPATH));

// Set application folder path
$application_folder = realpath($application_folder) ?: BASEPATH . strtr(rtrim($application_folder, '/\\'), '/\\', DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR);
if (!is_dir($application_folder)) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Application folder path is incorrect.';
    exit(3); // EXIT_CONFIG
}

define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);

// Set view folder path
$view_folder = @$view_folder ?: (is_dir(APPPATH.'views') ? APPPATH.'views' : APPPATH.'Views');
$view_folder = realpath($view_folder) ?: $view_folder;
if (!is_dir($view_folder)) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'View folder path is incorrect.';
    exit(3); // EXIT_CONFIG
}

define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);
define('STORAGEPATH', FCPATH.'storage'.DIRECTORY_SEPARATOR);

// Bootstrap the application
require_once FCPATH.'bootstrap'.DIRECTORY_SEPARATOR.'app.php';
