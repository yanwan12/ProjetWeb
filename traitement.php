<!DOCTYPE html>
<html>

<head>
    <h1>Vous êtes connecté</h1>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
        <div>
                <?php
                try
                {
                    // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=localhost;dbname=base projet;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                    // En cas d'erreur, on affiche un message et on arrête tout
                        die('Erreur : '.$e->getMessage());
                }
                
                if (isset($_POST['pseudo']) AND isset($_POST['nom']) AND isset($_POST['pnom']) AND isset($_POST['age']) AND isset($_POST['mail']))
                    {
                    $pseudo=$_POST['pseudo'];    
                    $nom=$_POST['nom'];
                    $pnom=$_POST['pnom'];
                    $age=$_POST['age'];
                    $mail=$_POST['mail'];
                    $datte= date('d/M/Y h:i');
                        
                    try
                {
                     $req=$bdd->prepare('INSERT INTO user (pseudo,nom,prenom,age,mail,datte) VALUES (:pseudo, :nom, :pnom, :age, :mel, CURRENT_TIMESTAMP())');
                     $req->execute(array(
                        'pseudo'=>$pseudo,
                        'nom' => $nom,
                        'pnom' => $pnom,
                        'age' => $age,
                        'mel' => $mail));
                }
                catch(Exception $e)
                {
                    // En cas d'erreur, on affiche un message et on arrête tout
                        die('Erreur : '.$e->getMessage());
                }
                       
                    }
                ?>
        </div>
</body>
</html>