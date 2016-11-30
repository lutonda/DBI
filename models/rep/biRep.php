<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 09:03
 */

namespace rep;

use conf\_DBconf;


class biRep
{
    public function mostrar($dados)
    {

        $conn = new _DBconf();
        $result = $conn->query($dados);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            echo "0 results";
        }
        return $dados;
    }

    public function cadastrar($dados)
    {
        $conn = new _DBconf();
        if ($conn->query($dados) === TRUE) {
            echo "New record creat successfully" . $conn->insert_id;
        } else {
            echo "Error: " . $dados . "<br>" . $conn->error;
        }
        $conn->closeCon();
    }

    public function editar($dados)
    {

    }

    public function eliminar($dados)
    {

    }
}