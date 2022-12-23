<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_admin_index()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->get('/admin/order');
        $response->assertStatus(200);
    }

    public function test_admin_store()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();
        $order = Order::factory()->make()->toArray();

        $data = $this->actingAs($user)->withSession(['banned' => false]);

        $response = $data->post('/admin/order/store', [
            'title' => 'qwe'
        ], $order);
        $response->assertSessionHasErrors('title');

        $order['products'] = [
            $product->id
        ];
        $response = $data->post('/admin/order/store', $order);
        $response->assertSessionHasNoErrors('products');

        $this->assertDatabaseHas('orders', [
            'title' => $order['title']
        ]);

        $response->assertStatus(302);
    }
}
