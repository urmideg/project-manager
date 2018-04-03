<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Создание учетной записи ведущего программиста
        factory(App\User::class, 1)->states('senior')->create();
        // Создание учетных записей программистов
        factory(App\User::class, 2)->states('junior')->create();
    }
}
