<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    static $password;

    return [
        //'id' => $faker->id
        'title' => $faker->sentence(5),
        'body' => $faker->text(),
        'author' => $faker ->name(),
        'user_id' => factory('App\Models\User')->create()->id,
       
    ];
});



