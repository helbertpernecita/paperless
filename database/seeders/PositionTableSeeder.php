<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->delete();
        DB::table('positions')->insert(array(
           0 =>
           array(
               'id' => 1,
               'name' => 'Warehouseman',
               'remarks' => fake()->text($maxNbChars = 200),
               'active' => 1,
               'created_by' => 1,
               'updated_by' => 1
           ),
            1 =>
            array(
                'id' => 2,
                'name' => 'QC',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'QA',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Packer',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Operator',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Maintenance',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Safety Officer',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Purchaser',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            )
        ));        //
    }
}
