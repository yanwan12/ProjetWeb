<?php 

require_once 'init.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="https://getbootstrap.com/assets/brand/bootstrap-solid.svg">
    <link rel="icon" href="">

    <title>Signin Template</title>
    <?php
       $form = new form($_POST);
    ?>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style/signin.css" rel="stylesheet">
  </head>
  
  <body class="text-center">
    <form class="form-signin" method="post" action="">
      <h1 class="h3 mb-3 font-weight-normal">Connectez-vous à votre compte</h1>

<div class="container">

<?php if(Session::getInstance()->hasFlashes()):?>

<?php foreach(Session::getInstance()->getFlashes() as $type => $msg):?>

<div class="alert alert-<?= $type ?>">

<?= $msg ?>

</div>

<?php endforeach; endif; ?>

</div>

<?php
        echo $form->input(array(
                                  "type" => "email",
                                  "name" => "mail",
                                  "placeholder" => "Mail",
                                  "id" => "mail",
                                  "class" => array('form-control')));
        echo $form->input(array(
                                    "type" => "password",
                                    "name" => "pass",
                                    "placeholder" => "Mot de Passe",
                                    "id" => "pass",
                                    "class" => array('form-control')));
     ?>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> 
      <?php echo $form->submit(array('btn', 'btn-lg', 'btn-primary','btn-block'),'submit');?>
     <p class=""><a href="./inscription.php">Pas encore inscrit</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
