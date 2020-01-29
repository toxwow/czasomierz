<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Projects')->insert([
            'name' => 'Krakowskie Forum Wynagrodzeń',
            'section_id' => '2',
            'description' => 'To jest przykładowy tekst',
            'status' => 'active',
        ]);

        DB::table('Projects')->insert([
            'name' => 'Raport Płacowy Sedlak & Sedlak',
            'section_id' => '2',
            'description' => 'To jest przykładowy tekst',
            'status' => 'active',
        ]);
    }
}
