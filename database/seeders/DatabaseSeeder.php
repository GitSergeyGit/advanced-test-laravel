<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Page;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(50)->create();
        $orders = Order::factory(10)->make()->each(function ($order) use ($users) {
            $order->user_id = $users->random()->id;
            $order->save();
        });

        $products = Product::factory(20)->create();
        $orders->each(function ($order) use ($products) {
            $order->products()->attach($products->random(rand(2, 5))->pluck('id'));
        });

        $pages = Page::factory(20)->create();
        Comment::factory(20)->create();
//
//        $pages->each(function ($page) {
//            $comment = new Comment();
//            $comment->body = 'adwawdawd';
//            $page->comments()->save($comment);
//        });
    }
}
