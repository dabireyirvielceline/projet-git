@extends('layout.app')
@section('content')
@if (session ('statut'))
<div  class='alert alert-danger'>
<h3>{{session('statut')}}</h3>
</div>
@endif
<table class="table" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Cohorte</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach ($appre as $liste)
    <tr>
      <br>
      <br>
      <br>
      <th scope="row">{{$loop->index}}</th>
      <td>{{$liste->nom}}</td>
      <td>{{$liste->prenom}}</td>
      <td> {{$liste->cohorte->libelle}}</td>
      <td><a href="{{route('modifier',$liste->id)}}" type="button" class="btn btn-danger">modifier</a></td>
      <td><a href="{{route('supprimer',['id'=>$liste->id])}}" type="button" class="btn btn-danger">supprimer</a>&nbsp;&nbsp;</td>
    </tr>
    @endforeach
  </tbody>
 
</table>
{{$appre->links()}}
@endsection