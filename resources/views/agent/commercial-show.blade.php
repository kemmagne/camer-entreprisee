@extends('layouts.app')

@section('title', '')

@section('content')



<div class="card col-md-8 offset-md-2" style="margin-top :4%">
    <h5 class="card-header  bg-primary justify-content-center">Commercial   {{ $commercial->nom }}</h5>
    <div class="card-body" style="">



     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Nom<span style="color:blue">*</span> : {{ $commercial->nom }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> CNI<span style="color:blue">*</span> : {{ $commercial->cni }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Genre<span style="color:blue">*</span> : {{ $commercial->genre }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Date<span style="color:blue">*</span> : {{ $commercial->date }}</h4>
        </div>
     </div>



     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Telephone<span style="color:blue">*</span> : {{ $commercial->telephone }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Matricule<span style="color:blue">*</span> : {{ $commercial->matricule }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Password<span style="color:blue">*</span> : {{ $commercial->password }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Type Marche<span style="color:blue">*</span> : {{ $commercial->typemarche }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Type Vente<span style="color:blue">*</span> : {{ $commercial->typevente }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Categorie Produit<span style="color:blue">*</span> : {{ $commercial->categorieproduit }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Nom Territoire<span style="color:blue">*</span> : {{ $commercial->nomterritoire }}</h4>
        </div>

        <div class="col-md-2 offset-md-2">
            <img

            style="width: 100px; height: 100px;"

            src="{{ URL::to('/') }}/photos/{{ $commercial->image }}" class="rounded-circle" />

        </div>
     </div>


    </div>
  </div>


@endsection


