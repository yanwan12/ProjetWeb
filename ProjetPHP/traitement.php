<!DOCTYPE html>
<html>

<head>
    <h1>Vous êtes connectés</h1>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<div>
<?php
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
</html>