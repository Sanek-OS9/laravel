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
        $user->caption = 'Модератор';
        $user->description = 'Помошник в управлении сайтом';
        $user->save();

        $user = new Role;
        $user->name = 'Admin';
        $user->caption = 'Администратор';
        $user->description = 'Управляет сайтом';
        $user->save();    

        $user = new Role;
        $user->name = 'Role';
        $user->caption = 'Управляющий ролями';
        $user->description = 'Назначет роли пользователям';
        $user->save();        
    }
}
