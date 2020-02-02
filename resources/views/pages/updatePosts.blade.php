@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Wall</div>
                
            <form method="POST" class="form-group" action="http://localhost/Panel/edit/{{$posts[0]->id}}">
                {{ csrf_field() }}
                        <div>
                            <label for="posting">Update Your Post!!!</label>
                        </div>
                        <div>
                        <input type="text" name="uppost" class="form-control" rows="3" value="{{$posts[0]->post}}"/>
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
