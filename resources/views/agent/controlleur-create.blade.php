@extends('layouts.app')

@section('title', '')

@section('content')


<div class="col-sm-8 offset-sm-2">
    <form action = "{{route('controlleur.store')}}" method = "post">
      @csrf
      <div class="row">
      <div class="form-group col-md-4">
        <label for="name">Nom:</label>
        <input type="text" name = "nom" id = "nom" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">Genre:</label>
        <select class="form-control"name = "genre" id = "genre">
            <option>Homme</option>
            <option>Femme</option>
          </select>
      </div>

      <div class="form-group col-md-4">
        <label for="name">CNI number:</label>
        <input type="text" name = "cni" id = "cni" class="form-control" required>
      </div>
    </div>


    <div class="row">
      <div class="form-group col-md-4">
        <label for="name">Date :</label>

        <input id="datepicker"   name = "date" id = "date"  />
          <script>
           $('#datepicker').datepicker({
           uiLibrary: 'bootstrap'

           });
            </script>

      </div>

      <div class="form-group col-md-4">
        <label for="name">Ville:</label>
        <select class="form-control"  name = "ville" id = "ville">
            <option>Douala</option>
            <option>Buea</option>
            <option>Yauonde</option>
            <option>Bamenda</option>
            <option>Baffoussam</option>
            <option>Ebolowa</option>
            <option>Bertoa</option>
            <option>Maroua</option>
            <option>Garoua</option>
            <option>Adamaoua</option>
          </select>
      </div>

      <div class="form-group col-md-4">
        <label for="name">Telephone:</label>
        <input type="text" name = "telephone" id = "telephone" class="form-control" required>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label for="name">Matricule:</label>
        <input type="text" name = "matricule" id = "matricule" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">password:</label>
        <input type="text" name = "password" id = "password" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">type territoire:</label>
        <input type="text" name = "typeterritoire" id = "typeterritoire" class="form-control" required>
      </div>

    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="name">type territoire:</label>
        <input type="text" name = "typeterritoire" id = "typeterritoire" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">nom territoire:</label>
        <input type="text" name = "nomterritoire" id = "nomterritoire" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">Univer Controlle:</label>
        <input type="text" name = "univercontrolle" id = "univercontrolle" class="form-control" required>
      </div>

    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label for="name">Categorie Controlle</label>
        <input type="text" name = "categoriecontrolle" id = "categoriecontrolle" class="form-control" required>
      </div>
      <div class="text-right mb-3">
      <button type = "submit" class = "btn btn-success   text-right mb-3">Submit</button>
      </div>
    </div>

    </form>
  </div>

  @endsection

  @include('layouts.footer')


