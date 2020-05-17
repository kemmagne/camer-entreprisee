

{{-- {{  auth()->user()->id  }}  --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('admin.logout')}}">User Logout</a>

                    @include('layouts/nav3')


    <div class="col-sm-12">
      <form action = "{{route('froms.store')}}" method = "post" enctype="multipart/form-data">
        @csrf
        <div class="row">
         <div class="col-md-6">
        <div class="form-group">
          <label for="name">Nom de l'usine:</label>
          <input type="text" name = "name" id = "name" class="form-control" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
          <label for="name">NUI:</label>
          <input type="text" name = "nui" id = "nui" class="form-control" required>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="name">RCCM:</label>
          <input type="text" name = "rccm" id = "rccm" class="form-control" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
          <label for="name">Localisation de l'usine:</label>
          <input type="text" name = "localisation" id = "localisation" class="form-control" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="name">Contact de l'usine:</label>
          <input type="text" name = "contact" id = "contact" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="name">admin contact:</label>
          <input type="text" name = "acontact" id = "acontact" class="form-control" required>
        </div>
    </div>
</div>


  {{--
      <div class="form-group  col-md-4">
        <label for="date">date :</label>
        <input id="datepicker"   name = "date" id = "date"  />
          <script>
           $('#datepicker').datepicker({
           uiLibrary: 'bootstrap'

           });
            </script>


        {{-- <input type="text"class="form-control" required>
    </div>

    --}}

     <div class="row">

        <div class="form-group  col-md-6">
            <label for="date">date :</label>
            <input id="datepicker"   name = "date" id = "date"  />
              <script>
               $('#datepicker').datepicker({
               uiLibrary: 'bootstrap'

               });
                </script>
          </div>

    <div class="col-md-6">
        <div class="form-group">
          <label for="logo">Logo de l'usine:</label>
          <input type="file" name = "logo" id = "logo"  required>
        </div>
    </div>
</div>

        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>



        </div>
    </div>

@endsection


@include('layouts.footer')
