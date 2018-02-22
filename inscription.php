
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="https://getbootstrap.com/assets/brand/bootstrap-solid.svg">
    <link rel="icon" href="">

    <title>Signup Template</title>
    <?php

        require './class/Form.php';
        $form = new form();
    ?>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style/signin.css" rel="stylesheet">
  </head>
  
  <body class="text-center">
    <form class="form-signin" method="post" action="./iconfirm.php">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Inscrivez-Vous</h1>
      <script src="./scripts/scriptfunc.js"></script>
      
     <?php
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
                                  "class" => array('form-control')));
        echo $form->input(array(
                                  "type" => "password",
                                  "name" => "cpass",
                                  "placeholder" => "Confirmation Mot de Passe",
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
