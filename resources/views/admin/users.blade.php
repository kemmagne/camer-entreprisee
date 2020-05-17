@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('admin.logout')}}">Admin Logout</a>


                    @include('layouts/nav3')



            <table class="table text-center  table-bordered">
        <tr>
          <th scope="col">ID</th>
          <th scope="col"> Name</th>
          <th scope="col">NUI</th>
          <th scope="col">RCCM</th>
          <th scope="col"> LOCALISATION</th>
          <th scope="col">CONTACT</th>
          <th scope="col">acontact</th>
          <th scope="col">DATE</th>
           <th scope="col">LOGO</th>
           <th scope="col">ACTION</th>




        </tr>
        @foreach($forms as $form)
        <tr class = "text-center">
            <td scope="row">{{ $form->id }}</td>
            <td>{{ $form->name }}</td>
            <td>{{  $form->nui }}</td>
            <td>{{ $form->rccm  }}</td>
            <td>{{ $form->localisation }}</td>
            <td>{{  $form->contact }}</td>
            <td>{{ $form->acontact}}</td>
            <td>{{ $form->date }}</td>

            <td>
            <img

            style="  width: 100px; height: 80px;"

            src="{{ URL::to('/') }}/images/{{ $form->logo }}" class="rounded-circle" />
            </td>

            <td>
                <form action="{{ route('users.destroy', $form->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">
                    <i class="fa fa-trash-o" style="font-size:20px"></i>
                  </button>
                </form>
            </td>


          </tr>
        @endforeach
        </tr>
      </table>



        </div>
    </div>
</div>
@endsection

