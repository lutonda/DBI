<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 10:05
 */

$atual = (isset($_GET['isw'])) ? $_GET['isw'] : 'home';
$pasta = 'views';
if (substr_count($atual, '/') > 0) {
    $atual = explode('/', $atual);
    $pagina = (file_exists("{$pasta}/" . $atual[0] . '.php')) ? $atual[0] : 'erro';
    $id = $atual[1];
    $busca = @$atual[2];

} else {
    $pagina = (file_exists("{$pasta}/" . $atual . '.php')) ? $atual : 'erro';
    $id = 0;
    $frame = 0;
} ?>