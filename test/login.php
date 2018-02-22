<?php
/**
 * Created by IntelliJ IDEA.
 * User: bonna
 * Date: 09/02/2018
 * Time: 08:39
 */
 require_once 'classes/Utilisateur.php';

 $utilisateur = Utilisateur::getUtilisateurFromLoginPwd($_GET['login'], $_GET['pwd']);
 $_SESSION['utilisateur'] = $utilisateur;

 echo 'bonjour ' . $utilisateur->nom;
?>