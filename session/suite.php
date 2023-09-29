<body>
<table>
<tr>
    <th>nom/th>
    <th>prenom</th>
    <th>datedenaissance</th>
    <th>telephone</th>
    <th>genre</th>
    <th>motdepasse</th>
    <th>peudo</th>
    <th>email</th>
   
</tr>
   
    <?php
    include "connexion.php";
    $req = mysqli_query($connexion, "SELECT * FROM utilisateur ");
      if (mysqli_num_rows($req) == 0){
        $message = 'il n y a pas de données';
      }else{
        $message = 'liste des données';
        echo $message;
        while($row  = mysqli_fetch_assoc($req)){
            
            ?>
            
           
            <tr>
                <td><?=$row['nom'] ?></td>
                <td><?=$row['prenom']?></td>
                <td><?=$row['datedenaissance']?></td>
                <td><?=$row['telephone']?></td>
                <td><?=$row['genre']?></td>
                <td><?=$row['motdepasse']?></td>
                <td><?=$row['peudo']?></td>
                <td><?=$row['email']?></td>
             
                <td><a href="delect.php?idutilisateur=<?=$row['idutilisateur']?>">supprimer</a></td>
                <td><a href="changement.php?idutilisateur=<?=$row['idutilisateur']?>">changer</a></td>
            </tr>
            <br>
            </table>
            <?php }

    }


    ?>
</body>