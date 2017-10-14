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
        // $this->call(UsersTableSeeder::class);
        $this->call('LibTableSeeder');
        
        $this->command->info('Таблица пользователей загружена данными!');
    }
}
class LibTableSeeder extends Seeder {
    
      public function run()
      {
        //DB::table('tests')->delete();
    
        Test::create(['name' => 'zazaza']);
      }
    
    }