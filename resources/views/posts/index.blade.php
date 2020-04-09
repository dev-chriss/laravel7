@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Manage Posts</h1>
            @include('flash-message')
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right;margin-bottom:30px;">Create Post</a>
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Author</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->user->name }} [{{ $post->user->email }}] </td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection