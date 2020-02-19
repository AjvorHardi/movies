@extends('layouts.master')

@section('content')
    <div class="container">
    
        <h1>{{ $movie->title }}</h1>

        <ul>
            <li>{{ $movie->director }} </li>
            <li><a href="/genres/{{$movie->genre}}">{{ $movie->genre }}</a></li>
            <li>{{ $movie->year }}</li>
            <p>{{ $movie->storyline }}</p>
        </ul>

        @if(count($movie->comments))
            <h3>Comments</h3>
            <ul>
                @foreach($movie->comments as $comment)
                <li>{{ $comment->content }}</li>
                @endforeach
            </ul>
        @endif
    </div>
        

    <div class="container">
        <form method="POST" action="{{ route('comment-create', ['id' => $movie->id]) }}">

            @csrf

            <div class="form-group">
                <label for="content">Comment</label>
                <input type="textarea" class="form-control" id="content" name="content"/>
                @include(
                    'partials.error-message',
                    ['fieldTitle' => 'content']
                )
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add comment</button>
            </div>
        </form>
    </div>
@endsection