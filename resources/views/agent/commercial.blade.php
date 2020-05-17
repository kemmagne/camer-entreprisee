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
                    <a class="btn btn-primary btn-lg btn-block col-md-6 offset-md-3" href="/agent/commercial-create" role="button">Creer Commercial</a>
                    </div>


                    <table class="table text-center   table-bordered">
                        <thead>
                        <tr>
                          <th scope="col-md-1">ID</th>
                          <th scope="col-md-1">Name</th>



                          <th scope="col-md-1">CNI</th>
                          <th scope="col-md-1">genre</th>
                          <th scope="col-md-1">Date</th>
                          <th scope="col-md-1">Ville</th>

                          <th scope="col-md-1">Telephone</th>
                          <th scope="col-md-1">Matricule</th>
                          <th scope="col-md-1">Password</th>





                          <th scope="col-md-1">Image</th>
                          <th scope="col-md-2">Action</th>
                        </tr>
                     </thead>

                    <tbody>

                    @foreach($commercials as $commercial)
                    <tr>
                       <td scope="row"> {{ $commercial->id }} </td>
                       <td> {{ $commercial->nom }} </td>

                       <td> {{ $commercial->cni }} </td>
                       <td> {{ $commercial->genre }} </td>
                       <td> {{ $commercial->date }} </td>
                       <td> {{ $commercial->ville }} </td>

                       <td> {{ $commercial->telephone }} </td>
                       <td> {{ $commercial->matricule }} </td>
                       <td> {{ $commercial->password }} </td>




                       <td>
                        <img

                        style="width: 80px; height: 80px;"

                        src="{{ URL::to('/') }}/photos/{{ $commercial->image }}" class="rounded-circle" />
                        </td>

                        <td>

                            <!-- Button trigger modal -->
                            <a type="button" href="{{ route('commercial.edit', $commercial->id)}}" class="btn btn-primary" method="post">
                                <i class="fa fa-edit"></i>
                            <a>



                            <a type="button"  href="{{ route('commercial.show', $commercial->id)}}" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
                                </a>


                       <form action="{{ route('commercial.destroy', $commercial->id)}}" method="post">
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
@endsection


@include('layouts.footer')



