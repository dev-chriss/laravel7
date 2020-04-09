@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">{{ $post->title }}</h3>
                    <p style="text-align: center"><small>{{ $post->slug }}</small></p>
                    <br/>
                    <p>
                        {{ $post->content }} 
                    </p>
                    <p style="text-align: left">
                        <small>author : {{ $post->user->name }}, email : {{ $post->user->email }}</small>
                    </p>
                    <br /><hr />
                    <h4>Display Comments</h4>
                    <br />
                    @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                    
                    <br />
                    <hr />
                    <h4>Add comment</h4>
                    <br />
                    <form method="post" action="{{ route('comments.store'   ) }}">
                        @csrf
                        <div class="form-group">
                            Name <input type="text" name="name" class="form-control" />
                            Email <input type="text" name="email" class="form-control" />
                            Website <input type="text" name="website" class="form-control" />
                            Comment <textarea class="form-control" name="comment"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection