<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sections')->insert([
            'name' => 'Wynagrodzenia',
            'status' => 'active',
        ]);

        DB::table('Sections')->insert([
            'name' => 'Klub',
            'status' => 'active',
        ]);
    }
}
