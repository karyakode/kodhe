<?php

// Menentukan environment aplikasi
define('ENVIRONMENT', $_SERVER['CI_ENV'] ?? 'development');

// Konfigurasi error berdasarkan environment
error_reporting(ENVIRONMENT === 'development' ? -1 : (E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED));
ini_set('display_errors', ENVIRONMENT === 'development' ? 1 : 0);

// Fungsi untuk memverifikasi dan mengatur jalur direktori
function setDirectoryPath($path) {
    $realpath = realpath($path) ?: strtr(rtrim($path, '/\\'), '/\\', DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR);
    if (!is_dir($realpath)) {
        header('HTTP/1.1 503 Service Unavailable', true, 503);
        echo "$path folder path is incorrect.";
        exit(3); // EXIT_CONFIG
    }
    return $realpath;
}

// Menentukan jalur dasar
$base_dir = __DIR__;

// Tentukan apakah aplikasi berada di dalam folder public
$is_in_public = basename($base_dir) === 'public';

// Tentukan jalur direktori sistem dan aplikasi
$system_path = setDirectoryPath($is_in_public ? '../vendor/karyakode/framework/Pulen' : 'vendor/karyakode/framework/Pulen');
define('BASEPATH', $system_path);
define('FCPATH', $is_in_public ? dirname($base_dir) . DIRECTORY_SEPARATOR : $base_dir . DIRECTORY_SEPARATOR);
define('SYSDIR', basename(BASEPATH));

$application_folder = setDirectoryPath($is_in_public ? '../app' : 'app');
define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);

// Tentukan jalur direktori tampilan
$view_folder = @$view_folder ?: (is_dir(APPPATH . 'views') ? APPPATH . 'views' : APPPATH . 'Views');
$view_folder = realpath($view_folder) ?: $view_folder;
$view_folder = setDirectoryPath($view_folder);
define('VIEWPATH', $view_folder . DIRECTORY_SEPARATOR);

// Menetapkan jalur direktori penyimpanan
define('STORAGEPATH', FCPATH . 'storage' . DIRECTORY_SEPARATOR);

// Bootstrap aplikasi
require_once FCPATH . 'bootstrap' . DIRECTORY_SEPARATOR . 'app.php';
