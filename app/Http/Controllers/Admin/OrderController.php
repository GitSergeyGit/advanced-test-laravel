<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\TrimStrings;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function index()
    {
//        if(!User::find(2)->can('create', Order::class)){
//            abort(403);
//        }
        return view('admin/order/index', [
            'orders' => Order::paginate(5)
        ]);
    }

    public function create()
    {
//        if (!Auth::user()->can('create', Order::class)) {
//            abort(403);
//        }
//        $this->authorize('create', Order::class);
        return view('admin/order/form', [
            'products' => Product::all(),
            'order' => new Order(),
            'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {
//        $request = new Request();

        if (!$request->user()->can('store', Order::class)) {
            abort(403);
        }

        $request->validate([
            'title' => [
                'required',
                'unique:orders,title',
                'min:5',
            ],
            'total' => ['required'],
            'products' => ['required', 'exists:products,id'],
        ]);

        $userInfo = $request->all();
        $userInfo['user_id'] = Auth::id();
        $order = Order::create($userInfo);
        $order->products()->attach($request->input('products'));
        return redirect()->route('admin.order');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $this->authorize('update', $order);
        return view('admin/order/form-edit', [
            'order' => $order,
            'users' => User::all(),
            'products' => Product::all(),
        ]);
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
