<?php

/**
 *
 */
define('DIRSEP', DIRECTORY_SEPARATOR);
/**
 *
 */
define('BCRYPT_ALGO', PASSWORD_DEFAULT);
/**
 *
 */
define('BCRYPT_COST', 12);

$url_root = $_SERVER['SCRIPT_NAME'];
$url_root = implode('/', explode('/', $url_root, -1));
$css_path = $url_root . '/css/style.css';


$js_path = $url_root . '/js/javascript.js';

/**
 *
 */
define('CSS_PATH', $css_path);
define('CSS_FOLDER_PATH', $css_folder_path);
define('JS_PATH', $js_path);
define('JS_FOLDER_PATH', $js_folder_path);

ini_set('display_errors', 'Off');
ini_set('html_errors', 'Off');
ini_set('xdebug.trace_output_name', 'wms.%t');


$settings = [
    "settings" => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'mode' => 'development',
        'debug' => true,
        'class_path' => __DIR__ . '/src/',
        'view' => [
            'template_path' => __DIR__ . '/templates/',
            'twig' => [
                'cache' => __DIR__ . '/cache/twig',
                'auto_reload' => true
            ]
        ],
        'pdo' => [
            'rdbms' => 'mysql',
            'host' => 'localhost',
            'db_name' => 'wms',
            'port' => '8888',
            'user_name' => 'wms_user',
            'user_password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => true,
            ],
        ]
    ],
];

return $settings;
