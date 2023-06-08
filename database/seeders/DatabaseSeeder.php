<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // метод call() для подключения других классов с данными, что позволит контролировать порядок их выполнения.
        $this->call(CustomerTableSeeder::class);
        $this->command->info('Таблица Customer загружена данными!');
    }
}
