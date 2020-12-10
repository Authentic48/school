<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();

        $managerRole = Role::where('name', 'manager')->first();

        $admin = User::create(
        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('okeypass048'),
        ]);
  
        $manager = User::create(
        [
          'name' => 'manager',
          'email' => 'manager@gmail.com',
          'password' => bcrypt('okeypass048'),
        ]);
        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
    }
}
