<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['pre_system'] = [
    'class'    => 'Cobahooks',
    'function' => 'log_message',
    'filename' => 'Cobahooks.php',
    'filepath' => 'hooks',
    'params'   => []
];

$hook['pre_controller'] = [
    'function' => '',
    'filename' => 'Cobahooks.php',
    'filepath' => 'hooks',
    'params'   => ['all', 'Pre-system hook executed.']
];

$hook['post_controller_constructor'][] = array(
	'class'    => 'ProfilerEnabler',
	'function' => 'enableProfiler',
	'filename' => 'hooks.profiler2.php',
	'filepath' => 'hooks',
	'params'   => array()
);

$hook['post_controller'] = [
    'function' => 'post_controller_log',
    'filename' => 'MyHooks.php',
    'filepath' => 'hooks',
    'params'   => []
];

$hook['display_override'] = [
    'function' => 'custom_output',
    'filename' => 'OutputHook.php',
    'filepath' => 'hooks',
    'params'   => []
];

$hook['cache_override'] = [
    'function' => 'custom_cache_logic',
    'filename' => 'CacheHook.php',
    'filepath' => 'hooks',
    'params'   => []
];

$hook['post_system'] = [
    'function' => 'shutdown_log',
    'filename' => 'MyHooks.php',
    'filepath' => 'hooks',
    'params'   => []
];
