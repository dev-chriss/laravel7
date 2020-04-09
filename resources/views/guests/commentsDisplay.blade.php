@foreach($comments as $comment)
    <div class="display-comment">
        <strong>{{ $comment->name }}</strong>
        <p><small>{{ $comment->email }}, website : {{ $comment->website }}</small></p>
        <p>{{ $comment->comment }}</p>
    </div>
@endforeach