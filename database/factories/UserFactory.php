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
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        
    ];
});

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;;
        },
        'category_id' => function () {
            return random_int(1, 2);
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'resolved' => 0,
    ];
});

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'question_id' => function () {
            return factory(App\Question::class)->create()->id;
        },
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'body' => $faker->paragraph,
        
        'validated' => $faker->boolean(0),
    ];
});