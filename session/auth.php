<?php 
include 'connexion.php';
if(isset($_POST['pseudo'])&& isset ($_POST['motdepasse']))
{
$pseudo=$_POST['pseudo'];
$motdepasse=$_POST['motdepasse'];
extract($_POST);
$requette=mysqli_query($conn,"SELECT * FROM utilisateur
 WHERE pseudo='$pseudo' and motdepasse='$motdepasse'");
$user=mysqli_fetch_assoc($requette);

if(mysqli_num_rows($requette)>0){
session_start();
$_SESSION['connexion']= true;
$_SESSION['id']= $user['id'];
    header("location:accueil.php");

}else{
    header("location:index.php");

}



}





?>