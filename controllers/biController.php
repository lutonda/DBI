<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 09:00
 */

namespace controller;


class biController
{
    public function mostrar($dados){
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        return $dados;
    }
    public function cadastrar($dados){

    }
    public function editar($dados){

    }
    public function eliminar($dados){

    }
}