<?php

require_once './class/User.php';

$user = new User();

$nom = $_POST['nom'];
$pnom = $_POST['pnom'];
$mail = $_POST['mail'];
$pass = $_POST['pass']; 

$user->nouvuser($nom,$pnom,$mail,$pass);
$_SESSION['user'] = $user;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="https://getbootstrap.com/assets/brand/bootstrap-solid.svg">
    <link rel="icon" href="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <title>Confirmation d'Inscription</title>
<body class="text-center container" style="padding-top: 5px;">
<div class="alert alert-success">
  <strong>Bienvenue <?=$nom?> vous êtes maintenant inscrit</strong>
 
</div>
<p><a href="./index.php" class="btn btn-info" role="button">Retourner aux achats</a></p>
</body>