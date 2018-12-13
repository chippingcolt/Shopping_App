<?php

use Faker\Generator as Faker;

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
        'website' => $faker->url // secret
        // 'remember_token' => str_random(10),
    ];
});
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'user_id' => $faker->id,
        'name' => $faker->name,
        'description' => $faker->description,
    ];
});
$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'product_ID' => $faker->id,
        'seller_ID' => $faker->id,
        'review' => $faker->description,
    ];
});
