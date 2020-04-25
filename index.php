<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 24.04.20
 * Time: 23:54
 */

error_reporting(-1);
ini_set('display_errors', 1);

require_once __DIR__ . '/lib/ApacheParser.php';
require_once __DIR__ . '/lib/IApacheParser.php';
require_once __DIR__ . '/lib/ApacheParserError.php';

$file = new \lib\ApacheParserError(__DIR__ . '/error.log');

$file->parse()->each(function ($log){
    echo "<pre>";
    print_r($log);
    echo "</pre>";
});

echo "<pre>";
print_r($file->parse()->getLogs());
echo "</pre>";