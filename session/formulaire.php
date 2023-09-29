<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'informations</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="candi.css">
</head>
<body>
  <?php include'connexion.php';?>
  
    <div class="container1">
        <h1>INSRIPTION</h1>
        <form action="traitement.php" method="POST">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
            <label for="prenom">Prénom(s):</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="dateNaissance">Date de naissance:</label>
            <input type="date" id="datedenaissance" name="naissance" required>

            <label for="telephone">Téléphone:</label>
            <input type="tel" id="telephone" name="tel" required>

            <label for="genre">genre:</label>
            <select id="genre" name="genre" required>
                <option value=""></option>
                <option value="F">FEMME</option>
                <option value="H">HOMME</option>
                
            </select>
            <label for="pseudo">peudo:</label>
            <input type="text" id="pseudo" name="pseudo" required>
            
            <label for="password">motdepasse:</label>
            <input type="password" id="motdepasse" name="motdepasse" required>
          
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

           
            <input type="submit" value="INSCRIPTION">
        </form>
    </div>
    <!-- footer section -->
  <!-- footer section -->
</body>
</html>
