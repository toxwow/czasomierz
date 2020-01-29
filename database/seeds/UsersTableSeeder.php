<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tomasz Tomżyński',
            'email' => 'tomasz.tomzynski@gmail.com',
            'role' => 'admin',
            'holiday' => '13',
            'password' => Hash::make('Mistrz1234!'),
        ]);
    }
}
