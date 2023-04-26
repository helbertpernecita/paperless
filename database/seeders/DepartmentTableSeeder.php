<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->delete();
        DB::table('departments')->insert(array(
           0 =>
           array(
               'id' => 1,
               'name' => 'Engineering',
               'remarks' => fake()->text($maxNbChars = 200),
               'active' => 1,
               'created_by' => 1,
               'updated_by' => 1
           ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Logistics',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Production',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Planning',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Quality',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Administration',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Safety',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Purchasing',
                'remarks' => fake()->text($maxNbChars = 200),
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            )
        ));
    }
}
