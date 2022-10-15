@extends('layout')

@section('content')
    <form action="/order/update" method="post">
        <input type="hidden" value="{{ $order->id }}" name="id">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $order->title }}">

            @if($errors->has('title'))
                @foreach($errors->get('title') as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $order->price }}">

            @if($errors->has('price'))
                @foreach($errors->get('price') as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" id="user_id">
                @foreach($users as $user)
                    <option @if($user->id == $order->user_id) selected @endif value="{{ $user->id }}">{{ $user->username }} ({{ $user->email }})</option>
                @endforeach
            </select>

            @if($errors->has('user_id'))
                @foreach($errors->get('user_id') as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Products</label>
            <select name="products[]" id="products" multiple>
                @foreach($products as $product)
                    <option @if(in_array($product->id, $order->products->pluck('id')->toArray())) selected @endif value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>

            @if($errors->has('products'))
                @foreach($errors->get('products') as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection()