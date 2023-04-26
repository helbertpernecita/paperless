<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert(array(
           0 =>
           array(
               'id' => 1,
               'name' => 'Electrical',
               'remarks' => fake()->text($maxNbChars = 200),
               'active' => 1,
               'created_by' => 1,
               'updated_by' => 1
           ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Mechanical',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Bearings',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Consumables',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Bolts & Nuts',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Pneumatic Cylinders',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Fittings and Connectors',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Teflons',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Nozzle and Needles',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Heaters and Wirings',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Fabrications',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            )
        ));
    }
}
