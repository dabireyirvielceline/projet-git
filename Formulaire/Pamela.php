<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
        <div>
         <?php include 'traitement.php'
        ?>   
  <form method="post"Pamela.php">     
     <div>
            <label>
              Votre nom:<input type="text" name="nom" placecholder="nom">
                </label>
                <div>
                <label >
                Votre prenom:<input type="text" name="prenom"placecholder="prenom">
                </label>
                <div>
            <label >
               Datedenaissance:<input type="text" name="naissance"placecholder="naissance">
               </label>
            </div>
            <label >
                numero:<input type="number" name="numero"placecholder="numero">
                </label>
                <div>
            <select name="genre">
                <option value="H">Homme</option>
                <option value="F">Femme</option>
            </select>
            <br>
                <button type ="submit">OK</button>

                </div>
    </form>
    </div>
</body>
</html>