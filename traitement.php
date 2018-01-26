<!DOCTYPE html>
<html>

<head>
        <div>
                <?php
                try
                {
                    // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=127.0.0.1;dbname=base_projet;charset=utf8', 'ecom', 'ecom');
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if (isset($_POST['pseudo']) AND isset($_POST['nom']) AND isset($_POST['pnom']) AND isset($_POST['age']) AND isset($_POST['mail']))
                    {
                        
                    $pseudo=$_POST['pseudo'];    
                    $nom = $_POST['nom'];
                    $pnom = $_POST['pnom'];
                    $age = $_POST['age'];
                    $mel = $_POST['mail'];
                    $datte = date('d/M/Y h:i');
                        
                            $req = $bdd->prepare('INSERT INTO user (pseudo,nom,prenom,age,mail) VALUES(:pseudo, :nom, :pnom, :age, :mel)');
                            
                            $req->execute(array(
                                    ':pseudo'=>$pseudo,
                                    ':nom' => $nom,
                                    ':pnom' => $pnom,
                                    ':age' => $age,
                                    ':mel' => $mel
                                    )
                            );
                      

                     
                       
                    } else {
                        echo "ça marche pas";
                    }
                }
               
                catch(Exception $e)
                {
                    // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
                }
                ?>
        </div>
        <h1>Bienvenu <?php  ?>
        </h1>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>        
</body>
</html>