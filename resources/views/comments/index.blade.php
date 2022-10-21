@extends('layout')

@section('content')
    @forelse($comments as $comment)
        <ul>
            <li>{{ $comment->id }}</li>
            <li>{{ $comment->body }}</li>
            <li>
                @if($comment->commentable instanceof \App\Models\Page)
                    <a href="{{ route('page.show', ['id' => $comment->test_id]) }}">
                        page...
                    </a>
                @endif

                @if($comment->commentable instanceof \App\Models\Product)
                    <a href="{{ route('product.show', ['id' => $comment->test_id]) }}">
                        product...
                    </a>
                @endif
            </li>
        </ul>
    @empty
        <p>Empty</p>
    @endforelse
@endsection()