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
                   {{--  <li>
                        <a href="/home">Creer Marché</a>
                        <a href="/home/canneaux">Creer Canneaux</a>
                        <a href="/home/produit">Creer Produit</a>

                    </li>  --}}

                    <div style="margin-bottom: 3%">
                        <a class="btn btn-primary btn-lg btn-block col-md-6 offset-md-3" href="/home/produit-create">Creer Produits</a>

                    </div>



                    <table class="table text-center  table-bordered">
                        <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Prix</th>
                          <th scope="col">Description</th>
                          <th scope="col">Action</th>
                        </tr>



                    </thead>

                    <tbody>
                    @foreach($produits as $produit)
                    <tr>
                       <td scope="row"> {{ $produit->id }} </td>
                       <td> {{ $produit->nom }} </td>
                       <td> {{ $produit->prix }} </td>
                       <td> {{ $produit->description }} </td>


                       <td>

                        <!-- Button trigger modal -->
                        <a type="button" href="{{ route('produit.edit', $produit->id)}}" class="btn btn-primary" method="post">
                            <i class="fa fa-edit"></i>
                        <a>



                        <a type="button"  href="{{ route('produit.show', $produit->id)}}" class="btn btn-success">
                            <i class="fa fa-eye"></i>
                        </a>

                        <a type="button"  href="{{ route('produit.promotion', $produit->id)}}" class="btn btn-success">
                            <i class="fa fa-gift"></i>
                        </a>




                       <form action="{{ route('produit.destroy', $produit->id)}}" method="post">
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
