@extends('layout')

@section('content')
    <h1>Product: {{ $product->title }}</h1>
    <p>{{ $product->description }}</p>

    <hr>
    <div>
        <p>Comments</p>
        <ul>
            @foreach($product->comments as $comment)
                <li>{{ $comment->body }}</li>
            @endforeach
        </ul>
    </div>
@endsection()