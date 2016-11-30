<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 12:18
 */

$uRL = explode('/', $_SERVER['REQUEST_URI']);
//  var_dump($uRL);
$dado='0';
$path='';
try {
    $dado=$uRL[1];
    $path=$uRL[0];
}
catch (Exception $e) {
}
