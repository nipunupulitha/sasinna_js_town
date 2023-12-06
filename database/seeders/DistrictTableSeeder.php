<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('districts')->delete();

        DB::table('districts')->insert(array (

            297 =>
            array (
                'id' => 3320,
                'name' => 'Amparai',
                'province_id' => 6,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            298 =>
            array (
                'id' => 3321,
                'name' => 'Anuradhapuraya',
                'province_id' => 8,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            299 =>
            array (
                'id' => 3322,
                'name' => 'Badulla',
                'province_id' => 7,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            300 =>
            array (
                'id' => 3323,
                'name' => 'Boralesgamuwa',
                'province_id' => 1,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            301 =>
            array (
                'id' => 3324,
                'name' => 'Colombo',
                'province_id' => 1,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            302 =>
            array (
                'id' => 3325,
                'name' => 'Galla',
                'province_id' => 3,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            303 =>
            array (
                'id' => 3326,
                'name' => 'Gampaha',
                'province_id' => 1,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            304 =>
            array (
                'id' => 3327,
                'name' => 'Hambantota',
                'province_id' => 3,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            305 =>
            array (
                'id' => 3328,
                'name' => 'Kalatura',
                'province_id' => 1,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            306 =>
            array (
                'id' => 3329,
                'name' => 'Kegalla',
                'province_id' => 5,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            307 =>
            array (
                'id' => 3330,
                'name' => 'Kilinochchi',
                'province_id' => 9,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            308 =>
            array (
                'id' => 3331,
                'name' => 'Kurunegala',
                'province_id' => 4,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            309 =>
            array (
                'id' => 3332,
                'name' => 'Madakalpuwa',
                'province_id' => 6,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            310 =>
            array (
                'id' => 3333,
                'name' => 'Maha Nuwara',
                'province_id' => 2,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            311 =>
            array (
                'id' => 3334,
                'name' => 'Malwana',
                'province_id' => 1,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            312 =>
            array (
                'id' => 3335,
                'name' => 'Mannarama',
                'province_id' => 9,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            313 =>
            array (
                'id' => 3336,
                'name' => 'Matale',
                'province_id' => 2,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            314 =>
            array (
                'id' => 3337,
                'name' => 'Matara',
                'province_id' => 3,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            315 =>
            array (
                'id' => 3338,
                'name' => 'Monaragala',
                'province_id' => 7,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            316 =>
            array (
                'id' => 3339,
                'name' => 'Mullaitivu',
                'province_id' => 9,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            317 =>
            array (
                'id' => 3340,
                'name' => 'North Eastern Province',
                'province_id' => 206,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            318 =>
            array (
                'id' => 3341,
                'name' => 'North Western Province',
                'province_id' => 206,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            319 =>
            array (
                'id' => 3342,
                'name' => 'Nuwara Eliya',
                'province_id' => 2,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            320 =>
            array (
                'id' => 3343,
                'name' => 'Polonnaruwa',
                'province_id' => 8,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            321 =>
            array (
                'id' => 3344,
                'name' => 'Puttalama',
                'province_id' => 4,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            322 =>
            array (
                'id' => 3345,
                'name' => 'Ratnapuraya',
                'province_id' => 5,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            323 =>
            array (
                'id' => 3346,
                'name' => 'Southern Province',
                'province_id' => 206,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            324 =>
            array (
                'id' => 3347,
                'name' => 'Tirikunamalaya',
                'province_id' => 6,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),

            326 =>
            array (
                'id' => 3349,
                'name' => 'Vavuniyawa',
                'province_id' => 9,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            327 =>
            array (
                'id' => 3350,
                'name' => 'Western Province',
                'province_id' => 206,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            328 =>
            array (
                'id' => 3351,
                'name' => 'Yapanaya',
                'province_id' => 9,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),
            329 =>
            array (
                'id' => 3352,
                'name' => 'kadawatha',
                'province_id' => 1,
                'created_at' => '2021-10-05 14:01:48',
                'updated_at' => '2021-10-05 14:01:48',
            ),

        ));

    }
}
