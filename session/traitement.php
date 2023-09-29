<?php
include 'connexion.php';
extract($_POST);
$requette=mysqli_query($conn,"INSERT INTO utilisateur (nom,prenom,naissance,tel,genre,motdepasse,pseudo,email)
VALUES('$nom','$prenom','$naissance','$tel','$genre','$motdepasse','$pseudo','$email')");
header('location:index.php');


?>

