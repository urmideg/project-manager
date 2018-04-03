<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    $users = \App\User::select('name')->where('role', 'junior')->get();
    foreach ($users as $key => $user) {
        $worker[] = $user->name;
    }
    return [
        'name' => $faker->text(20),
        'description' => $faker->text(50),
        'worker' => $faker->randomElement($worker),
        'status' => $faker->randomElement(['Реализация', 'Завершена']),
    ];
});
