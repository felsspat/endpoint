<?php

$dir = __DIR__ . '/output';
$path = $dir.'/test.txt';
mkdir($dir);

file_put_contents($path, 'POST:' . var_export($_POST, true) . PHP_EOL, FILE_APPEND);

file_put_contents($path, 'SERVER:' . var_export($_SERVER,true) . PHP_EOL, FILE_APPEND);
file_put_contents($path, 'REQUEST-URI: ' . var_export($_SERVER["REQUEST_URI"], true) . PHP_EOL, FILE_APPEND);
file_put_contents($path, 'PAYLOAD: '. file_get_contents('php://input') . PHP_EOL, FILE_APPEND);
file_put_contents($path, 'ENV: '. var_export($_ENV, true) . PHP_EOL, FILE_APPEND);
file_put_contents($path, 'RQUEST: '. var_export($_REQUEST,true) . PHP_EOL, FILE_APPEND);

error_log( 'POST:' . print_r($_POST, true) . PHP_EOL);
error_log( 'SERVER:' . var_export($_SERVER,true) . PHP_EOL);
error_log( 'REQUEST-URI: ' . var_export($_SERVER["REQUEST_URI"], true) . PHP_EOL);
error_log( 'PAYLOAD: '. file_get_contents('php://input') . PHP_EOL);
error_log( 'ENV: '. var_export($_ENV, true) . PHP_EOL);
error_log( 'RQUEST: '. var_export($_REQUEST,true) . PHP_EOL);