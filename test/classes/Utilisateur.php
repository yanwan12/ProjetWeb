<?php

require_once 'PDORepository.php';
/**
 * Created by IntelliJ IDEA.
 * User: bonna
 * Date: 09/02/2018
 * Time: 08:28
 */

 class Utilisateur extends PDORepository{

     var $idUtilisateur;
     var $login;
     var $nom;
     var $pwd;

     function __construct(){
         $this->login = '';
         $this->nom = '';
         $this->pwd = '';
     }
     
     public static function getUtilisateurFromLoginPwd($login, $pwd){
         $utilisateur = new Utilisateur();
         $statement = $utilisateur->queryList('select * from utilisateur where login=? and pwd=?', array($login, $pwd));
         if($statement && $result = $statement->fetch()){
            Utilisateur::fetchFromStatement($utilisateur,$result);
            return $utilisateur;
         }
         return false;
     }

     public  function  update($args){
         $req = 'update utilisateur set nom = ?, pwd = ?, ';
     }

     private static function fetchFromStatement(Utilisateur  $utilisateur, $statement){
         $utilisateur->idUtilisateur = $statement['idutilisateur'];
         $utilisateur->nom = $statement['nom'];
         $utilisateur->login = $statement['login'];
         $utilisateur->pwd = $statement['pwd'];
     }


}

?>