<?php

require_once 'DBconn.php';

class user extends DBconn {


     var $iduser;
     var $mail;
     var $nom;
     var $pass;

     function __construct(){
         $this->mail = '';
         $this->nom = '';
         $this->pass = '';
    }

    
    public static function getUser($mail, $pass){
        $user = new User();
        $statement = $user->queryList('select * from user where mail=? and mdp=?', array($mail, $pass));
        if($statement && $result = $statement->fetch()){
           Utilisateur::fetchFromStatement($user,$result);
           return $user;
        }
        return false;
    }

    private static function fetchFromStatement(User  $user, $statement){
        $user->iduser = $statement['iduser'];
        $user->nom = $statement['nom'];
        $user->mail = $statement['mail'];
        $user->pass = $statement['pass'];
    }

    public static function nouvuser($nom,$pnom,$mail,$pass){
        $user = new User();
        $req =  $user->querylist('INSERT user(nom, prenom, mail, mdp) VALUES(:nom, :pnom, :mail, :pass)',
        array(':nom' => $nom, ':pnom' => $pnom, ':mail' => $mail, ':pass' => $pass));
    }
}
?>