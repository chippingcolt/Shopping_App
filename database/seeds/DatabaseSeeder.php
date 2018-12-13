<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Customer;
use App\Product;
use App\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(Customer::class, 10)->create();
        factory(Product::class, 10)->create();
        factory(Review::class, 10)->create();
        // $this->call(ProductsSeeder::class);
        // $this->call(ReviewSeeder::class);
    }
}