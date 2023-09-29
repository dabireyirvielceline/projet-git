<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <form action="{{route('create')}}" method="post" style="margin-top: 5%;margin-bottom: 5%;">
    <fieldset >
    @csrf
      <legend>Inscription des apprenants</legend>
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" placeholder="Nom" name="nom">
      </div>

      <div class="mb-3">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" placeholder="Prenom" name="prenom">
      </div>

      <div class="mb-3">
        <label for="cohorte" class="form-label">Cohorte</label>
        <select class="form-select" name="cohorte">
          <option value="cohorte 1">cohorte 1</option>
          <option value="cohorte 2">cohorte 2</option>
          <option value="cohorte 3">cohorte 3</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </fieldset>
  </form>
</body>
</html>



