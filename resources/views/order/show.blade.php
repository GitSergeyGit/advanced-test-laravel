@extends('layout')

@section('content')
    <div>
        <p>Comments</p>
        <ul>
            @foreach($page->comments as $comment)
                <li>{{ $comment->body }}</li>
            @endforeach
        </ul>
    </div>
@endsection()