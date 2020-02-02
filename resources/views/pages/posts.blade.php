@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Wall</div>
                
            <form method="POST" class="form-group" action="http://localhost/Panel/postsaction">
                {{ csrf_field() }}
                        <div>
                            <label for="posting">Share your story!!!</label>
                        </div>
                        <div>
                            <input type="text" name="post" class="form-control"rows="3"/>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary"/>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
