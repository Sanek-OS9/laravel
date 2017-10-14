<?php

use Illuminate\Database\Seeder;
use App\{User,Role};

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$role_user = Role::where('name', '=', 'User')->first();
        $role_moder = Role::where('name', '=', 'Moder')->first();
        $role_admin = Role::where('name', '=', 'Admin')->first();

        $user = new User;
        $user->name = 'Александр';
        $user->email = 'Sanek_OS9@mail.ru';
        $user->password = bcrypt('test');
        $user->save();
        $user->roles()->attach($role_moder);

        $user = new User;
        $user->name = 'Sanek';
        $user->email = 'Sanek@mail.ru';
        $user->password = bcrypt('test');
        $user->save();
        $user->roles()->attach($role_moder);

        $user = new User;
        $user->name = 'Admin';
        $user->email = 'Admin@mail.ru';
        $user->password = bcrypt('test');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
