@extends('layouts.appadmin')

@section('content')
<div class="container">
    <h3>Manage Users</h3>
    <div class="row justify-content-center">
        <br>
        <div>
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Delete</td>
                    <td>Edit</td>
                 </tr>
                @foreach ($users as $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->role}}</td> 
                    <td class="center"><a href="http://localhost/Panel/del/{{ $value->email}}">Delete</a></td>
                    <td class="center"><a href="http://localhost/Panel/ed/{{ $value->id}}">Edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection