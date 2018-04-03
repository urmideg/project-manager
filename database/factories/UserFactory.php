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
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});
/**
 * Состояние для учетной записи ведущего программиста
 */
$factory->state(App\User::class, 'senior', [
     'email' => 'senior@test.ru',
     'role' => 'senior',
]);
/**
 * Состояние для учетной записи программистов
 */
$factory->state(App\User::class, 'junior', [
     'role' => 'junior',
]);
