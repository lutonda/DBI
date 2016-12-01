<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 09:03
 */

namespace models;
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
use conf\_DBconf;

include_once('conf/_DBconf.php');


class biRep
{
    public function mostrar($dados=null)
    {
        if (is_numeric($dados)) {
            $dados = "SELECT * FROM BI WHERE ID=" . $dados;
        } elseif ($dados==null) {
            $dados = "SELECT * FROM BI";
        }
        else{

            $dados = "SELECT * FROM BI WHERE nomeCompleto like '" . $dados."' or numBI like '".$dados."'";
        }
        $conn = new _DBconf();
        $result = $conn->query($dados);
        print_r($result) ;
        if ($result->num_rows > 0) {
            $dados= $result->fetch_assoc();
        } else {
            $dados= $result->num_rows;
        }
        return $dados;
    }

    public function cadastrar($dados)
    {
        $conn = new _DBconf();
        if ($conn->query($dados) === TRUE) {
            echo "New record created successfully" . $conn->insert_id;
        } else {
            echo "Erro: " . $dados . "<br>" . $conn->error;
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