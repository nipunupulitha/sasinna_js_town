<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('provinces')->delete();

        DB::table('provinces')->insert(array (
            0 =>
            array (
                'id' => 1,

                'name' => 'Western',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            1 =>
            array (
                'id' => 2,

                'name' => 'Central',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            2 =>
            array (
                'id' => 3,

                'name' => 'Southern',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            3 =>
            array (
                'id' => 4,

                'name' => 'North Western',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            4 =>
            array (
                'id' => 5,

                'name' => 'Sabaragamuwa',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            5 =>
            array (
                'id' => 6,

                'name' => 'Eastern',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            6 =>
            array (
                'id' => 7,

                'name' => 'Uva',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            7 =>
            array (
                'id' => 8,

                'name' => 'North Central',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),
            8 =>
            array (
                'id' => 9,

                'name' => 'Northern',
                'created_at' => '2021-10-05 14:01:21',
                'updated_at' => '2021-10-05 14:01:21',
            ),

        ));
    }
}
