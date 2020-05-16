
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the Laravel application from Youtube</p>
        <p><a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">login</a> <a class="btn btn-success btn-lg" href="register" role="button">Register</a></p>
    </div>
@endsection 