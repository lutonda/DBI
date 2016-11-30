<?php
/**
 * Created by PhpStorm.
 * User: sebastiao.lutonda
 * Date: 30-11-2016
 * Time: 09:04
 */

namespace conf;


class _DBconf extends DBinfo
{
    private $conneccao;
    public function __construct()
    {
       return $this->con();
    }

    protected function con()
    {
        $this->conneccao = new mysqli($this->_host, $this->_user, $this->_pass);
        return $this->conneccao;
    }

    protected function createDB(){
        $sql = "CREATE DATABASE myDB";
        if ($this->conneccao->query($sql) === TRUE) {
            return "Database created successfully";
        } else {
            return "Error creating database: " . $this->conneccao->error;
        }
    }
    public function closeCon(){

        $this->conneccao->close();
    }
    /*
     * Executar uma query
     * Insert, Update, Delete, remove, create, rename, altere
     */
    public function query($query){
        if ($this->conneccao->query($query) === TRUE) {
            return "Database created successfully";
        } else {
            return "Error creating database: " . $this->conneccao->error;
        }
    }
}