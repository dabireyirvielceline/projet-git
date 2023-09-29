<?php
 include 'connexion.php';
 $id=$_GET['idutilisateur'];
 $req=mysqli_query($connexion,"DELECT * FROM utilisateur
 WHERE idutilisateur =$idutilisateur");

   header("Location:index.php");

 ?>
 