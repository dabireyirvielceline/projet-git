<?php
$server='localhost';
$utilisateurs='root';
$motdepasse='';
$database= 'restaurant';
$conn=mysqli_connect($server,$utilisateurs,$motdepasse,$database);
if (!$conn) 
 {
    echo 'connexion echouée';

 }else{
    echo ' ok';
}
   
?>