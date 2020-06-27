<?php

use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'admin' => True,
            'address' => 'San Benito',
            'phone' => '6621234567',
            'password' => Hash::make('admin123'),
        ]);
    }
}
