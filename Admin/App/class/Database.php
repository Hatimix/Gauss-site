<?php

class Database {
    private $dsn = "mysql:host=localhost;dbname=Gauss";
    private $user = "root";
    private $pass = "";
    public $options = array(
        PDO::ATTR_ERRMODE       =>  PDO::ERRMODE_EXCEPTION,
        MYSQLI_SET_CHARSET_NAME =>  'set names utf8'
    );
    private $db;

    private function getConnexion()
    {
        if ($this->db == null){
            $this->db = new PDO($this->dsn,$this->user,$this->pass,$this->options);
        }
        return $this->db;
    }
    public function query($statement){
        $req = $this->getConnexion()->query($statement);
        $res = $req->fetchAll();
        var_dump($req);
    }
}