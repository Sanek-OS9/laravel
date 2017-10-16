<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->command->info('Таблица ролей загружена данными!');
        //$this->call(UserTableSeeder::class);
        //$this->command->info('Таблица пользователей загружена данными!');
    }
}