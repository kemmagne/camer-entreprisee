

@extends('layouts.app')


@section('content')

{{-- {{  auth()->user()->name  }}   --}}

@include('layouts/nav3')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center  bg-primary">Admin  Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a  class="btn btn-primary btn-lg btn-block col-md-6 offset-md-3"
                    style="margin-top: 3%"
                    href="admin/register">Créer Utilisateurs</a><br>
                    <a class="btn btn-primary btn-lg btn-block col-md-6 offset-md-3"
                    style="margin-top: 2%"

                    href="admin/users">List d'Utilisateurs</a>
                        <hr>
                    You are logged in as Admin!
                     <a href="{{route('admin.logout')}}">Admin Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
