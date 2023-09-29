<?php
    include'connexion.php';
    extract($_POST);
    $req=mysqli_query ($con,"INSERT 
    INTO  celine ( nom,prenom,naissance,tel,genre)
    VALUES ('$nom','$prenom','$naissance','$numero','$genre')
    ");

    ?>