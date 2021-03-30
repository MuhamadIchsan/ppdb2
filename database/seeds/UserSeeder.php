<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ichsan',
            'role' => 'admin',
            'email' => 'ichsan@gmail.com',
            'password' => bcrypt('ichsan'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'uus',
            'role' => 'siswa',
            'email' => 'uss@gmail.com',
            'password' => bcrypt('uus'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
