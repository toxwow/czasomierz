<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HolidaysUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('holiday_users')->insert([
            'user_id' => '1',
            'date' => Carbon::parse('2020-01-31'),
        ]);

        DB::table('holiday_users')->insert([
            'user_id' => '1',
            'date' => Carbon::parse('2020-01-30'),
        ]);

        DB::table('holiday_users')->insert([
            'user_id' => '1',
            'date' => Carbon::parse('2020-01-29'),
        ]);
    }
}
