<?php
include 'connexion.php';
session_start();
if(!isset($_SESSION["connexion"]) OR $_SESSION["connexion"]!==true){
header('location:index.php');

}

$id=$_SESSION['id'];
$req=mysqli_query($conn,"SELECT * FROM utilisateur 
  WHERE id=$id");
  $row=mysqli_fetch_assoc($req);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenu <?php echo $row['nom'] ; ?> </h1>
<p>Sur votre page suivante</p>
<a href="page.php">Visiter la page suivante</a><br>
<a href="deconnexion.php">deconnexion</a>

</body>
</html>