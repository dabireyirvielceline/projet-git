<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>

form{
    width: 58%;
    margin:auto;

}
h1{
    text-align:center;
}
a{
    margin-left:45%
}

    </style>
</head>
<body>
<h1>connexion</h1>
    <form action="auth.php" method="POST">
        <label for="">pseudo</label>
       
    <input class="form-control form-control-lg" type="text" name="pseudo" >

    <label for="">motdepasse</label>
    <input class="form-control" type="password" name="motdepasse" >
    <button class="btn btn-primary" type="submit">connexion</button>
    </form>
    <a href="inscription.php">creer un compte</a>
</body>
</html>