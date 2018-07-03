@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
        <h1>{{$title}} </h1>
        <p> laravel application</p>
        <p> <a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/lsapp/public/register" role="button">Register</a>
@endsection
