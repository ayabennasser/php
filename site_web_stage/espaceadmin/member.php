<?php
session_start();
$bdd=new pdo('mysql:host=localhost;dbname=projet;','root','');
if(!$_SESSION['mdp']){
    header('location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>afficher les étudiants</title>
</head>
<body  style="background:url(imageee/rr.png);background-repeat:no repeat;background-size:100% 100%">
   <!---afficher tous  les étudiants-->
   <?php 

   $recupUsers=$bdd->query('select * from user');

  // while($use =$recupUsers){
       /*echo $user['pseudo'];*/
       echo "<table border=1 align=center width=200px >
<tr><td>nom</td>

<td>prenom</td>
<td>Tel</td>
<td>mail</td>
<td>sexe</td>

<td>Supprimer</td></tr>";
foreach($recupUsers as $user)
{
echo "<tr>
<td>$user[nom]</td>
<td>$user[prenom]</td>
<td>$user[tel]</td>
<td>$user[mail]</td>
<td>$user[sexe]</td>

<td><a href='sup.php?id=$user[id]'>Supprimer</a></td> </tr>";
}
echo "</table>";
   


   ?>

   <!-- fin afficher tous les étudiants-->
</body>
</html>