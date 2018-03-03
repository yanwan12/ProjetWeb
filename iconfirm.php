<?php

require './init.php';

if(App::getUser()->confirm($_GET['id'], $_GET['token'], App::getDatabase())){

  Session::getInstance()->setFlash('succes',"Votre compte a bien été validé");

  header ('Location: moncompte.php');

} else {

  Session::getInstance()->setFlash('danger',"Ce lien n'est plus valide");

  header ('Location: connex.php');
}