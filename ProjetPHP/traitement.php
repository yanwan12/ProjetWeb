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
                    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                    // En cas d'erreur, on affiche un message et on arrête tout
                        die('Erreur : '.$e->getMessage());
                }

                if (isset($_POST['nom']) AND isset($_POST['mail']))
                    {
                    $nom=$_POST['nom'];
                    $mail=$_POST['mail'];
                echo('<body>
                        <table>
                            <tr>
                                <td>Pseudo :</td>
                                <td>'.$nom.'</td>
                                
                            </tr>
                            <tr>
                                <td>Mail :</td>
                                <td>'.$mail.'</td>
                            </tr> 
                        </table></body>');
                    
                
                        echo date('D/M/Y h:i:s');
                    }
                ?>
        </div>
</body>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</html>