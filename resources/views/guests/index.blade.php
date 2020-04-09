@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <br />
                    <h3 class="text-center text-success">Guest Comments</h3>
                    <br /><hr />
                    @include('guests.commentsDisplay', ['comments' => $comments])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection