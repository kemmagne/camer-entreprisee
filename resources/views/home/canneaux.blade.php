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

                    @include('layouts/nav1')

                    </div>

                    @include('layouts/nav3')

                {{--      <li>
                        <a href="/home">Creer Marché</a>
                        <a href="/home/canneaux">Creer Canneaux</a>
                        <a href="/home/produit">Creer Produit</a>

                    </li>  --}}
                    <div style="margin-bottom: 3%">
                        <a class="btn btn-primary btn-lg btn-block col-md-6 offset-md-3" href="/home/canneaux-create">Creer Canneaux</a>


                    </div>


                    <table class="table text-center table-bordered">
                        <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">nom</th>
                          <th scope="col">Description</th>
                          <th scope="col">Action</th>

                        </tr>


                    @foreach($canneauxes as $canneauxe)
                    <tr>
                       <td scope="row"> {{ $canneauxe->id }} </td>
                       <td> {{ $canneauxe->nom }} </td>
                       <td> {{ $canneauxe->description }} </td>



                       <td>
                        <!-- Button trigger modal -->
                        <a type="button" href="{{ route('canneaux.edit', $canneauxe->id)}}" class="btn btn-primary" method="post">
                            <i class="fa fa-edit"></i>
                        <a>



                        <a type="button"  href="{{ route('canneaux.show', $canneauxe->id)}}" class="btn btn-success">
                            <i class="fa fa-eye"></i>
                        </a>




                       <form action="{{ route('canneaux.destroy', $canneauxe->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                            <i class="fa fa-trash-o" style="font-size:20px"></i>
                        </button>
                      </form>
                    </td>
                    </tr>

                    @endforeach

                </table>

                </div>
                </div>

    </div>
</div>
@endsection

@include('layouts.footer')
