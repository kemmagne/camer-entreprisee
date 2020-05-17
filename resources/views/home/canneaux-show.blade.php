@extends('layouts.app')

@section('title', '')

@section('content')





<div class="card col-md-8 offset-md-2" style="margin-top :4%">
    <h5 class="card-header  bg-primary justify-content-center">Controlleur  {{ $canneauxe->nom }}</h5>
    <div class="card-body" style="">




     <div class="row">
        <div class="col-md-5 offset-md-1">
            <h4> Nom<span style="color:blue">*</span> : {{ $canneauxe->nom }}</h4>
        </div>

        <div class="col-md-5 offset-md-1">
           <h4> Description<span style="color:blue">*</span> : {{ $canneauxe->description }}</h4>
        </div>
     </div>



    </div>
  </div>


@endsection

