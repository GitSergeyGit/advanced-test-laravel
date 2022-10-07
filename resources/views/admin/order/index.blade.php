@extends('layout')

@section('content')
    <a href="{{ route('admin.order.create') }}" class="btn btn-primary">Add Order</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Total</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->title }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->description }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->updated_at->diffForHumans() }}</td>
            </tr>
        @empty
            <p>Empty</p>
        @endforelse

        </tbody>
    </table>
    <ul>
        <li>
            <a href="{{ $orders->nextPageUrl() }}">Next page</a>
        </li>
        <li>
            <a href="{{ $orders->previousPageUrl() }}">Prev page</a>
        </li>
    </ul>
@endsection()