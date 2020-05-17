@extends('layouts.app')

@section('title', '')


@section('content')

    <div class="modal-body">


    <div class="col-sm-8 offset-sm-2">
        <form action="{{ route('commercial.update', $commercial->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">

            <div class="form-group  col-md-4">
              <label for="name">Nom:</label>
              <input type="text" name = "nom" id = "nom" class="form-control"  value={{ $commercial->nom }} required>
            </div>

            <div class="form-group  col-md-4">
              <label for="name">Genre:</label>
              <select class="form-control"name = "genre" id = "genre" value={{ $commercial->genre}}   id="exampleFormControlSelect1">
                  <option>Homme</option>
                  <option>Femme</option>
                </select>

            </div>


            <div class="form-group  col-md-4">
              <label for="name">CNI number:</label>
              <input type="text" name = "cni" id = "cni" class="form-control" value={{ $commercial->cni }}  required>
            </div>
          </div>


          <div class="row">

            <div class="form-group  col-md-4">
              <label for="date">Date :</label>
              <input id="datepicker" value={{ $commercial->date }}   name = "date" id = "date"  />
                <script>
                 $('#datepicker').datepicker({
                 uiLibrary: 'bootstrap'

                 });
                  </script>


              {{-- <input type="text"class="form-control" required>  --}}
            </div>

            <div class="form-group col-md-4">
              <label for="ville">Ville:</label>

              <select class="form-control" value={{ $commercial->ville }}   name = "ville" id = "ville">
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
              <input type="text" name = "telephone" value={{ $commercial->telephone }}  id = "telephone" class="form-control" required>
            </div>

          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <label for="name">Matricule:</label>
              <input type="text" name = "matricule" value={{ $commercial->matricule }}  id = "matricule" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Password:</label>
                <input type="text" name = "password" id = "password" value={{ $commercial->password }} class="form-control" required>
              </div>

            <div class="form-group  col-md-4">
                <label for="name">Nom Territoire:</label>
                <input type="text" name = "nom-territoire" id = "nom-territoire" value={{ $commercial->nomterritoire }}  class="form-control" required>
              </div>



          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <label for="name">Type Marche:</label>
              <input type="text" name = "typemarche" id = "typemarche" value={{ $commercial->typemarche }} class="form-control" required>
            </div>


            <div class="form-group col-md-4">
              <label for="name">Type Vente:</label>
              <input type="text" name = "type-vente" id = "type-vente" value={{ $commercial->typevente }} class="form-control" required>
            </div>

            <div class="form-group col-md-4">
              <label for="name">Categorie Produit:</label>
              <input type="text" name = "categorie-produit" id = "categorie-produit"  value={{ $commercial->categorieproduit }} class="form-control" required>
            </div>
          </div>

          <div class="row">


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
