@extends('layouts.app')

@section('title', '')

@section('content')


<div class="col-md-8 offset-md-2">

    <form action = "{{route('commercial.store')}}" method = "post"  enctype="multipart/form-data">
      @csrf

      <div class="row">

      <div class="form-group  col-md-4">
        <label for="name">Nom:</label>
        <input type="text" name = "nom" id = "nom" class="form-control" required>
      </div>

      <div class="form-group  col-md-4">
        <label for="name">genre:</label>
        <select class="form-control"name = "genre" id = "genre"  id="exampleFormControlSelect1">
            <option>Homme</option>
            <option>Femme</option>
          </select>

      </div>


      <div class="form-group  col-md-4">
        <label for="name">CNI number:</label>
        <input type="text" name = "cni" id = "cni" class="form-control" required>
      </div>
    </div>


    <div class="row">

      <div class="form-group  col-md-4">
        <label for="date">date :</label>
        <input id="datepicker"   name = "date" id = "date"  />
          <script>
           $('#datepicker').datepicker({
           uiLibrary: 'bootstrap'

           });
            </script>
      </div>


      <div class="form-group col-md-4">
        <label for="ville">ville:</label>

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
        <label for="name">telephone:</label>
        <input type="text" name = "telephone" id = "telephone" class="form-control" required>
      </div>

    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label for="name">matricule:</label>
        <input type="text" name = "matricule" id = "matricule" class="form-control" required>
      </div>



      <div class="form-group col-md-4">
        <label for="name">telephone:</label>
        <input type="text" name = "telephone" id = "telephone" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">password:</label>
        <input type="text" name = "password" id = "password" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="name">typemarche:</label>
        <input type="text" name = "typemarche" id = "typemarche" class="form-control" required>
      </div>


      <div class="form-group col-md-4">
        <label for="name">typevente:</label>
        <input type="text" name = "type-vente" id = "type-vente" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">categorieproduit:</label>
        <input type="text" name = "categorie-produit" id = "categorie-produit" class="form-control" required>
      </div>
    </div>

    <div class="row">
      <div class="form-group  col-md-4">
        <label for="name">nomterritoire:</label>
        <input type="text" name = "nom-territoire" id = "nom-territoire" class="form-control" required>
      </div>

      <div class="form-group col-md-4">
        <label for="name">Image:</label>
        <input type="file" name = "image" id = "image" class="form-control" required>
      </div>

    </div>
  <div class="text-right mb-3">
      <button type = "submit" class = "btn btn-success">Submit</button>
  </div>

    </form>
  </div>






@endsection

@include('layouts.footer')

