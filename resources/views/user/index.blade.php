@extends('layout')

@section('content')
    @forelse($users as $user)
        <ul>
            <li>{{ $user->id }}</li>
            <li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->created_at }}</li>
            <li>{{ $user->udpdated_at }}</li>
            <li>
                <a href="{{ route('user.orders', ['id' => $user->id]) }}">
                    Orders
                </a>
                @foreach($user->orders as $order)
                    <ul>
                        <li>{{ $order->id }}</li>
                        <li>{{ $order->title }}</li>
                        <li>{{ $order->total }}</li>
                        <li>{{ $order->created_at }}</li>
                        <li>{{ $order->udpdated_at }}</li>
                        <li>
                            @foreach($order->products as $product)
                                <ul>
                                    <li>{{ $product->id }}</li>
                                    <li>{{ $product->title }}</li>
                                    <li>{{ $product->proce }}</li>
                                    <li>{{ $product->description }}</li>
                                    <li>{{ $product->created_at }}</li>
                                    <li>{{ $product->udpdated_at }}</li>
                                    <li>
                                    </li>
                                </ul>
                            @endforeach
                        </li>
                    </ul>
                @endforeach
            </li>
        </ul>
    @empty
        <p>Empty</p>
    @endforelse
@endsection()