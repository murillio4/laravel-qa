<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Question::class, function (Faker\Generator $faker) {
    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'title' => $faker->title,
        'content' => $faker->paragraph,
    ];
});

$factory->define(App\Answer::class, function (Faker\Generator $faker) {
    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'question_id' => random_int(\DB::table('questions')->min('id'), \DB::table('questions')->max('id')),
        'content' => $faker->paragraph,
    ];
});

$factory->defineAs(App\Comment::class, 'question', function (Faker\Generator $faker){

    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'content' => $faker->paragraph,
        'commentable_id'   => random_int(\DB::table('questions')->min('id'), \DB::table('questions')->max('id')),
        'commentable_type' => \App\Question::class,
    ];
});

$factory->defineAs(App\Comment::class, 'answer', function (Faker\Generator $faker){

    return [
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'content' => $faker->paragraph,
        'commentable_id'   => random_int(\DB::table('answers')->min('id'), \DB::table('answers')->max('id')),
        'commentable_type' => \App\Answer::class,
    ];
});
