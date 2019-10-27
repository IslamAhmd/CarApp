<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole  = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('admin')
        ]);

        $user = User::create([
        	'name' => 'user',
        	'email' => 'user@user.com',
        	'password' => bcrypt('user')
        ]);

        $admin->roles()->attach($adminRole);

        $user->roles()->attach($userRole);

        factory(User::class, 10)->create();

    }
}
