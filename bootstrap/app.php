<?php

define('CI_VERSION', '3.1.11');

// Memuat constants.php jika ada
foreach (['config', 'Config'] as $name) {
    foreach (["$name/".ENVIRONMENT, "$name"] as $path) {
        $file = APPPATH . "$path/constants.php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
}

// Memuat autoloader
$autoloadPath = FCPATH . '/vendor/autoload.php';
if (!file_exists($autoloadPath)) {
    header('HTTP/1.1 503 Service Unavailable', true, 503);
    echo 'Your vendor/autoload.php file does not appear to be set correctly.';
    exit(3);
} else {
    require $autoloadPath;
}

// Daftarkan autoloader framework
Kodhe\Pulen\Framework\Application\Autoloader::getInstance()->register();

// Keamanan dan kompatibilitas
if (!is_php('5.4')) {
    ini_set('magic_quotes_runtime', 0);

    if ((bool) ini_get('register_globals')) {
        $superglobals = ['_ENV', '_GET', '_POST', '_COOKIE', '_SERVER'];
        $protected = ['_SERVER', '_GET', '_POST', '_FILES', '_REQUEST', '_SESSION', '_ENV', '_COOKIE', 'GLOBALS', 'HTTP_RAW_POST_DATA', 'system_path', 'application_folder', 'view_folder', '_protected', '_registered'];

        foreach (['E' => '_ENV', 'G' => '_GET', 'P' => '_POST', 'C' => '_COOKIE', 'S' => '_SERVER'] as $key => $superglobal) {
            if (strpos(ini_get('variables_order'), $key) !== false) {
                foreach (array_keys($$superglobal) as $var) {
                    if (isset($GLOBALS[$var]) && !in_array($var, $protected, true)) {
                        $GLOBALS[$var] = NULL;
                    }
                }
            }
        }
    }
}

// Daftarkan handler error dan exception
set_error_handler('_error_handler');
set_exception_handler('_exception_handler');
register_shutdown_function('_shutdown_handler');

// Setup charset dan ekstensi
$charset = strtoupper(config_item('charset'));
ini_set('default_charset', $charset);
define('MB_ENABLED', extension_loaded('mbstring') ? true : false);
define('ICONV_ENABLED', extension_loaded('iconv') ? true : false);

// Pengaturan ekstensi jika ada
if (MB_ENABLED) {
    @ini_set('mbstring.internal_encoding', $charset);
    mb_substitute_character('none');
}
if (ICONV_ENABLED) {
    @ini_set('iconv.internal_encoding', $charset);
}
if (is_php('5.6')) {
    ini_set('php.internal_encoding', $charset);
}

// Memuat file kompatibilitas
require_once FCPATH . 'vendor/karyakode/framework/Pulen/Framework/Support/Compat/mbstring.php';
require_once FCPATH . 'vendor/karyakode/framework/Pulen/Framework/Support/Compat/hash.php';
require_once FCPATH . 'vendor/karyakode/framework/Pulen/Framework/Support/Compat/password.php';
require_once FCPATH . 'vendor/karyakode/framework/Pulen/Framework/Support/Compat/standard.php';

// Booting framework
$framework = new \Kodhe\Pulen\Framework\Application\Framework(new \Kodhe\Pulen\Framework\Container\DependencyResolver());
$framework->boot();

// Override konfigurasi dan routing
if (isset($assign_to_config)) {
    $framework->overrideConfig($assign_to_config);
}
if (isset($routing)) {
    $framework->overrideRouting($routing);
}

// Global helper function
function &kodhe($dep = null) {
    return Kodhe\Pulen\Controller::get_instance($dep);
}

function &get_instance() {
    return kodhe();
}

// Memproses request
$request = \Kodhe\Pulen\Framework\Application\Http\Request::fromGlobals();
$response = $framework->run($request);

// Kirim response
if ($response) {
    $response->send();
}

// EOF
