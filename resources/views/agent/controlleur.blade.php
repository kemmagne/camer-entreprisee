@extends('layouts.app')

@section('title', '')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    <div class="offset-md-11" style="margin-bottom: 1%; ">
                        @include('layouts/nav2')
                    </div>

                    @include('layouts/nav3')

                    <div style="margin-bottom:2%;">
                    <a class="btn btn-primary btn-lg btn-block col-md-6 offset-md-3"  href="/agent/controlleur-create">Creer Controlleur</a>
                    </div>

                    <table class="table text-center  table-bordered">
                        <thead>
                        <tr>
                          <th scope="col-md-1">ID</th>
                          <th scope="col-md-1">Nom</th>
                          <th scope="col-md-1">CNI</th>
                          <th scope="col-md-1">Genre</th>
                          <th scope="col-md-1">Date</th>
                          <th scope="col-md-1">Telephone</th>
                          <th scope="col-md-1">Ville</th>
                          <th scope="col-md-1">Matricule</th>
                          <th scope="col-md-1">Password</th>


                          <th scope="col-md-3">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($controlleurs as $controlleur)
                    <tr>
                       <td> {{ $controlleur->id }} </td>
                       <td> {{ $controlleur->nom }} </td>
                       <td> {{ $controlleur->cni }} </td>
                       <td> {{ $controlleur->genre }} </td>
                       <td> {{ $controlleur->date }} </td>
                       <td> {{ $controlleur->telephone }} </td>
                       <td> {{ $controlleur->ville }} </td>
                       <td> {{ $controlleur->matricule }} </td>
                       <td> {{ $controlleur->password }} </td>


                       <td>

                        <!-- Button trigger modal -->
                        <a type="button" href="{{ route('controlleur.edit', $controlleur->id)}}" class="btn btn-primary" method="post">
                            <i class="fa fa-edit"></i>
                        <a>


                        <a type="button"  href="{{ route('controlleur.show', $controlleur->id)}}" class="btn btn-success">
                            <i class="fa fa-eye"></i>
                        </a>


                       <form action="{{ route('controlleur.destroy', $controlleur->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                                  <i class="fa fa-trash-o" style="font-size:20px"></i>
                        </button>
                      </form>
                    </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>

                </div>
            </div>
</div>
@endsection
@include('layouts.footer')




