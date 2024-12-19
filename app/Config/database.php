<?php

$active_group  = 'default';
$query_builder = true;

$_dbhost = $_SERVER['DB_HOST'] ?? 'localhost';
$_dbuser = $_SERVER['DB_USER'] ?? 'root';
$_dbpass = $_SERVER['DB_PASS'] ?? '';
$_dbname = $_SERVER['DB_NAME'] ?? '';
$_dbport = $_SERVER['DB_PORT'] ?? '3306';

$db['default'] = array(
    'port'     => $_dbport,
    'hostname' => $_dbhost,
    'username' => $_dbuser,
    'password' => $_dbpass,
    'database' => $_dbname,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);

$db['pdo'] = array(
    'dsn'	   => "mysql:host=$_dbhost;port=$_dbport;dbname=$_dbname;charset=utf8;",
    'hostname' => $_dbhost,
    'username' => $_dbuser,
    'password' => $_dbpass,
    'database' => $_dbname,
    'dbdriver' => 'pdo',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);
