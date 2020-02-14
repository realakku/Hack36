<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'type' =>rand(1,3),
    ];
});

//farmer seeder faker

$factory->define(App\Farmer::class, function (Faker $faker) {
    return [
        'fname' => $faker->name,
        'lname' => $faker->name,
        'age' =>rand(20,90),
        'address' =>Str::random(20),
        'state' => Str::random(15),
        'city' => Str::random(15),
        'pincode' =>rand(20000,30000),
        'rating' =>rand(0,5),
        'loan' =>rand(0,1),
        'vegetable' =>Str::random(10),
    ];
});