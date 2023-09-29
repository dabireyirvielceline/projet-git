<?php 
$server='localhost';
$utilisateur='root';
$motdepasse='';
$database='';
$connexion=mysqli_li _connect($server,$utilisateur,$motdepasse,$database);
if (!$connexion)
{
    echo'connexion échouée';
}else {
    echo 'connexion ok',
}

 ?>

