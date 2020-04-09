@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>View user comments</h1>
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Name</th>
                    <th width="200px">Action</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">View Comment</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection