<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = User::create([
            'name' => 'root',
            'email' => 'root@esoftgreat.com',
            'password' => bcrypt('root')
        ]);
        $root->assignRole('root', 'admin');
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@esoftgreat.com',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');
        $user = User::create([
            'name' => 'editor',
            'email' => 'editor@esoftgreat.com',
            'password' => bcrypt('editor')
        ]);
        $user->assignRole('editor');
    }
}
