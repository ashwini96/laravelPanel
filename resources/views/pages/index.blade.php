@extends('layout/app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>
            <a class="btn btn-primary btn-lg" href="http://localhost/Panel/login" >Login</a> 
            <a class="btn btn-success btn-lg" href="http://localhost/Panel/register" >Register</a>
        </p>
    </div>    
@endsection
