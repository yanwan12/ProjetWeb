<?php
require 'init.php';

if(!empty($_POST)){

$errors = array();

$db = App::getDatabase();

$valid= new Validateur($_POST, $db);

$valid->isUniq('mail', $db, 'Un utilisateur est déjà enregistré a cette adresse !');

if($valid->isValid()){
  App::getUser()->nouvuser($db, $_POST['nom'],$_POST['pnom'],$_POST['mail'],$_POST['pass']);  
  Session::getInstance()->setFlash('success','Un email de confirmation vous a été envoyé afin de valider votre compte');
  header ('Location: connex.php');
} else {
 $errors = $valid->getErrors();
}
}
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

    <title>Signup Template</title>
    <?php
        $form = new form();
    ?>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  
  <body class="text-center" style="padding-top: 100px">



    <form class="form-signin" method="post" action="">
      <h1 class="h3 mb-3 font-weight-normal" style="padding-bottom: 50px;">Inscrivez-Vous</h1>
      <script src="./scripts/scriptfunc.js"></script>
      <?php if(!empty($errors)):?>
<div class="alert alert-danger alert-dissmissible" style = "position: relative; top: 5;">
  <p>Le formulaire a mal été rempli :</p>

<ul>
<?php foreach($errors as $error):?>
    
    <li><?= $error; ?></li>

<?php endforeach;?>

</ul>
</div>
<?php endif;

        echo $form->input(array(
                                  "type" => "email",
                                  "name" => "mail",
                                  "placeholder" => "Mail",
                                  "id" => "mail",
                                  "class" => array('form-control')));
        echo $form->input(array(
                                  "type" => "text",
                                  "name" => "nom",
                                  "placeholder" => "Nom",
                                  "id" => "nom",
                                  "class" => array('form-control')));
        echo $form->input(array(
                                  "type" => "text",
                                  "name" => "pnom",
                                  "placeholder" => "Prénom",
                                  "id" => "pnom",
                                  "class" => array('form-control')));     
        echo $form->input(array(
                                  "type" => "password",
                                  "name" => "pass",
                                  "placeholder" => "Mot de Passe",
                                  "id" => "pass",
                                  "onkeyup" => "return chkpass()",
                                  "class" => array('form-control')));
        echo $form->input(array(
                                  "type" => "password",
                                  "name" => "cpass",
                                  "placeholder" => "Confirmer Mot de Passe",
                                  "id" => "cpass",
                                  "onkeyup" => "return chkpass()",
                                  "class" => array('form-control')));
     ?>
      <span id="confirmMessage" class="confirmMessage"></span>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> 
      <?php echo $form->submit(array('btn', 'btn-lg', 'btn-primary','btn-block'),'submit');?>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>