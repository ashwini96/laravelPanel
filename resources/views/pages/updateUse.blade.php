@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Wall</div>
                
            <form method="POST" class="form-group" action="http://localhost/Panel/ed/{{$users[0]->id}}">
                {{ csrf_field() }}
                        <div>
                            <label for="posting">Update Your Details!!!</label>
                        </div>
                        <div>
                            <label>Name</label>
                            <input type="text" name="upname" class="form-control" rows="3" value="{{$users[0]->name}}"/>
                        </div>
                        <div>
                            <label>Role</label>
                            <input type="text" name="uprole" class="form-control" rows="3" value="{{$users[0]->role}}"/>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text" name="upemail" class="form-control" rows="3" value="{{$users[0]->email}}"/>
                        </div>
                        <div>
                            <label>Phno</label>
                            <input type="text" name="upphno" class="form-control" rows="3" value="{{$users[0]->phno}}"/>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Update"/>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
