@extends('layouts.app')

@section('title', '')

@section('content')


<div class="col-md-6 offset-md-3">
    <div class="card" class="primary">
        <div class="card-header text-center bg-primary">
          Featured
        </div>
        <div class="card-body">

    <form action = "{{route('canneaux.store')}}" method = "post">
      @csrf
      <div class="form-group">
        <label for="name">Nom:</label>
        <input type="text" name = "nom" id = "nom" class="form-control" required>
      </div>


      <div class="form-group">
        <label for="name">Description:</label>
        <input type="text" name = "description" id = "description" class="form-control" required>
      </div>
      <div class="text-right mb-3">
      <button type = "submit" class = "btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</div>
  @endsection

  @include('layouts.footer')

