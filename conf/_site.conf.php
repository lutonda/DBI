<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 14:47
 */

$uRL = explode('/', $_SERVER['REQUEST_URI']);


DEFINE("_PATH_", "views");
DEFINE("_SEPATATOR_", "/");
DEFINE("_EXT_", ".php");
$site = ($uRL[1] == '') ? 'inicio' : $uRL[1];

$data = (isset($uRL[2])) ? $uRL[2] : null;
$conf = (isset($uRL[3])) ? $uRL[3] : null;
$values = str_replace($_SERVER['REQUEST_URI'], $uRL[1], '');
$values = (isset($uRL[2])) ? str_replace($values, $uRL[2], '') : null;
$values = (isset($uRL[3])) ? str_replace($values, $uRL[3], '') : null;


if (!file_exists(_PATH_ . _SEPATATOR_ . $site . _EXT_) or ($site=='404' and isset($uRL[2])) )
    header('location: /404');
