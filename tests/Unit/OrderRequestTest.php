<?php

namespace Tests\Unit;

use App\Http\Requests\OrderRequest;
use PHPUnit\Framework\TestCase;

class OrderRequestTest extends TestCase
{
    public function test_rules()
    {
        $model = new OrderRequest();

        $this->assertEquals([
            'title' => [
                'required',
                'unique:orders,title',
                'min:5',
            ],
            'total' => ['required'],
            'products' => ['required', 'exists:products,id'],
        ], $model->rules());
    }
}
