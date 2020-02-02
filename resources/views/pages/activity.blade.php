@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Posts</h3>
    <div class="row justify-content-center">
        <br>
        <div>
            <table border="1">
                <tr>
                    <td>Post</td>
                    <td>Posted</td>
                    <td>Delete</td>
                    <td>Edit</td>
                 </tr>
                @foreach ($posts as $value)
                <tr>
                    <td>{{$value->post}}</td> 
                    <td>{{$value->created_at}}</td>
                    <td class="center"><a href="http://localhost/Panel/delete/{{ $value->post}}">Delete</a></td>
                    <td class="center"><a href="http://localhost/Panel/edit/{{ $value->id}}">Edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection