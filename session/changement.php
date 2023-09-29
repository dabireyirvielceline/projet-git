 <?php 

include 'connexion.php';
$idutilisateur= $_GET['idutilisateur'];

 $req=mysqli_query($conn,"SELECT * FROM utilisateur

  WHERE idutilisateur=$idutilisateur");

 $row=mysqli_fetch_assoc($req);

    if(isset($_POST['button'])){

         $verif=extract($_POST);

    if(isset($verif )){
        // $id2=$id;

        $req=mysqli_query ($connexion,"UPDATE utilisateur SET nom='$nom', prenom='$prenom', datedenaissance='$datenaissance', telephone='$telephone', genre='$genre', motdepasse='$motdepasse', peudo='$peudo', email='$email'
        WHERE idutilisateur='$idutilisateur'");
        if ($req){
            header('Location:index.php');
        
        }else{
            $message='utilisateur non modifié';
    }
}else{
        $message='veuillez remplir les données';
    }
}

 ?>
<div>
    <h2>Modifier l'utilisateur: <? =$row ['nom'] ?></h2>
    <p>
    <?php 
    if(isset($message)){
        echo $message;

    }
    ?>
    </p>

 <form action="" method ="POST">
        <label> Nom</label>
     <input type="text"  name="nom" =$row['nom']?>
     <label> Prénom</label>
    <input type="text" name="prenom" =$row['prenom']?>
    <label>datedenaissance</label>
    <input type="date" name="datedenaissance" =$row['datedenaissance']?>
    <label>télephone</label>
    <input type="number" name="telephone" =$row['telephone']?>
    <label>Genre</label>
    <input type="text"name="genre" =$row['genre']?>
    <label>motdepasse</label>
    <input type="password" name="motdepasse" =$row['motdepasse']?>
    <label>pseudo</label>
    <input type="text" name="pseudo"=$row['pseudo']?>
    <label>email</label>
    <input type="email" name="email" =$row['email']?>
    <input type="submit" value="Envoyer" name="button">
    
 </form>
 </div>
