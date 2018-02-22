<?php

class DBconn {
    
    private $host="localhost";
    private $db="base_projet";
    private $user="ecom";
    private $pass="ecom";
    private $bdd;

    protected function conn(){
    $bdd = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    return $bdd; 
    }
    protected function queryList($sql, $args){
        $bdd=$this->conn();
        $stmt = $bdd->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

}