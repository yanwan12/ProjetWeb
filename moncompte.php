<?php

require './init.php';

App::getUser()->restrict();

$form = new Form();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="">

    <title>Mon compte</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style/signin.css" rel="stylesheet">
<header><a href="deco.php">Se déconnecter</a></header>
    <div class="form-group">
<?php
echo $form->input(array(
  "type" => "password",
  "name" => "npass",
  "placeholder" => "Nouveau mot de passe",
  "id" => "npass",
  "class" => array('form-control')));

  echo $form->input(array(
    "type" => "password",
    "name" => "cnpass",
    "placeholder" => "Confirmer nouveau mot de passe",
    "id" => "cnpass",
    "class" => array('form-control')));

?>
    </div>
    
  </head>