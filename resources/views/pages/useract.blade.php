@extends('layouts.appadmin')

@section('content')
<div class="container">
    <h3>Manage Posts</h3>
    <div class="row justify-content-center">
        <br>
        <div>
            <table border="1">
                <tr>
                    <td>Email</td>
                    <td>Post</td>
                    <td>Posted</td>
                    <td>Delete</td>
                 </tr>
                @foreach ($posts as $value)
                <tr>
                    <td>{{$value->email}}</td>
                    <td>{{$value->post}}</td> 
                    <td>{{$value->created_at}}</td>
                    <td class="center"><a href="http://localhost/Panel/delete/{{ $value->post}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection