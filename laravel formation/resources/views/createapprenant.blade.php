<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<form action="{{route('create')}}" method="POST" style="margin-top: 5%;margin-bottom: 5%;">
    @csrf
    <fieldset >
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
          
          <option value="{{$liste->$id}}">"{{$liste->libelle}}"</option>
        
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </fieldset>
  </form>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

