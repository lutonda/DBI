<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 09:00
 */

namespace controller;
use models\bi;
use models\biRep;
include_once('models/rep/biRep.php');


class biController
{
    public function mostrar($dados=null){
        $result = new biRep();
        $result->mostrar();
        $bis = array();
        $bi = new bi();
        while($row = $result->fetch_assoc()) {
            $bi->setId($row["id"]);
            $bi->setNomeCompleto($row["nomeCompleto"]);
            $bi->setNumBi($row["numBI"]);
            $bi->setDataEmissao($row["dataEmissao"]);
            array_push($bis,$bi);
        }
        return $bis;
    }
    public function cadastrar($dados){

    }
    public function editar($dados){

    }
    public function eliminar($dados){

    }
}