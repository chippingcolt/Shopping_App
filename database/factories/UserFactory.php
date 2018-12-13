<?php

use Faker\Generator as Faker;
use App\User;
use App\Customer;
use App\Product;
use App\Review;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'website' => $faker->url
    ];
});
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'user_id' =>
            function () {
            return User::all()->random();
        },
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});
$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_id' =>
            function () {
            return User::all()->random();
        },
        'product_ID' =>
            function () {
            return Product::all()->random();
        },
        'review' => $faker->text,
    ];
});