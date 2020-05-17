@extends('layouts.app')

@section('title', '')

@section('content')



<div class="card col-md-8 offset-md-2" style="margin-top :4%">
    <h5 class="card-header  bg-primary justify-content-center">Controlleur  {{ $controlleur->nom }}</h5>
    <div class="card-body" style="">



     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Nom<span style="color:blue">*</span> : {{ $controlleur->nom }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> CNI<span style="color:blue">*</span> : {{ $controlleur->cni }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Genre<span style="color:blue">*</span> : {{ $controlleur->genre }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Date<span style="color:blue">*</span> : {{ $controlleur->date }}</h4>
        </div>
     </div>



     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Telephone<span style="color:blue">*</span> : {{ $controlleur->telephone }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Matricule<span style="color:blue">*</span> : {{ $controlleur->matricule }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Password<span style="color:blue">*</span> : {{ $controlleur->password }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Type Territoire<span style="color:blue">*</span> : {{ $controlleur->typeterritoire }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Nom Territoire<span style="color:blue">*</span> : {{ $controlleur->nomterritoire }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Univer De Controlle<span style="color:blue">*</span> : {{ $controlleur->univercontrolle }}</h4>
        </div>
     </div>


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Categorie de Controlle<span style="color:blue">*</span> : {{ $controlleur->categoriecontrolle }}</h4>
        </div>
    </div>
    </div>
  </div>

@endsection

