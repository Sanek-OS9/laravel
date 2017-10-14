<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $user = new Role;
        $user->name = 'User';
        $user->description = 'Пользователь';
        $user->save();
        */
        $user = new Role;
        $user->name = 'Moder';
        $user->description = 'Модератор';
        $user->save();

        $user = new Role;
        $user->name = 'Admin';
        $user->description = 'Администратор';
        $user->save();        
    }
}
