<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductFacade::index();
        dd($products);
    }

    public function show($id)
    {
        $product = ProductFacade::show($id);
        dd($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'unique:orders,title',
                'min:5',
            ],
            'price' => ['required'],
            'description' => ['required'],
        ]);

        ProductFacade::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => [
                'required',
                'unique:orders,title',
                'min:5',
            ],
            'price' => ['required'],
            'description' => ['required'],
        ]);

        ProductFacade::update($request->all(), $id);
    }

    public function destroy($id)
    {
        ProductFacade::delete($id);
    }
}
