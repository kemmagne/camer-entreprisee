@extends('layouts.app')

@section('title', '')

@section('content')





<div class="card col-md-8 offset-md-2" style="margin-top :4%">
    <h5 class="card-header  bg-primary justify-content-center">Marché de: {{ $marche->nom }}</h5>
    <div class="card-body" style="">


     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Nom de marché<span style="color:blue">*</span> : {{ $marche->nom }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Ville<span style="color:blue">*</span> : {{ $marche->ville }}</h4>
        </div>
     </div>




     <div class="row">

        <div class="col-md-5 offset-md-1">
           <h4> Description<span style="color:blue">*</span> : {{ $marche->description }}</h4>
        </div>
     </div>


    </div>
  </div>


@endsection



@include('layouts.footer')
