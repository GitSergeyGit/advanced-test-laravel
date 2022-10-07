<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminOrderController
{
    public function index()
    {
        $orders = Order::paginate(5);
        return view('admin/order/index', compact('orders'));
    }

    public function create()
    {
        $order = new Order();
        $users = User::all();
        $products = Product::all();
        return view('admin/order/form', compact('order', 'users', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'unique:orders,title',
                'min:5',
            ],
            'total' => ['required'],
            'user_id' => ['exists:users,id'],
            'products' => ['required', 'exists:products,id'],
        ]);

        $order = Order::create($request->all());
        $order->products()->attach($request->input('products'));
        return redirect()->route('admin.order');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $users = User::all();
        $products = Product::all();
        return view('admin/order/form-edit', compact('order', 'users', 'products'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $request->validate([
            'title' => [
                'required',
                'min:5',
                Rule::unique('orders', 'title')->ignore($order->id),
            ],
            'price' => ['required'],
            'user_id' => ['exists:users,id'],
            'products' => ['required', 'exists:products,id'],
        ]);

        $order->update($request->all());
        $order->products()->sync($request->input('products'));
        return redirect()->route('admin.order');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.order.destroy');
    }
}
