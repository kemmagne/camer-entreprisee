@extends('layouts.app')

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
                      @include('layouts/nav1')
                    </div>


                    @include('layouts/nav3')

                    <div style="margin-bottom: 3%">
                    <a class="btn btn-primary btn-lg btn-block col-md-6 offset-md-3" href="/home/marche-create">Creer Marcher</a>
                    </div>

                    <table class="table text-center table-bordered">
                        <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Ville</th>
                          <th scope="col">Description</th>
                          <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($marches as $marche)
                    <tr>
                       <th scope="row"> {{ $marche->id }} </th>
                       <td> {{ $marche->nom }} </td>
                       <td> {{ $marche->ville }} </td>
                       <td> {{ $marche->description }} </td>

                       <td>

                        <!-- Button trigger modal -->
                        <a type="button" href="{{ route('marche.edit', $marche->id)}}" class="btn btn-primary" method="post">
                            <i class="fa fa-edit"></i>
                        <a>


                        <a type="button"  href="{{ route('marche.show', $marche->id)}}" class="btn btn-success"> <i class="fa fa-eye"></i> </a>




                       <form action="{{ route('marche.destroy', $marche->id)}}" method="post">
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

{{--  {{  auth()->user()->id  }} --}}
