<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->delete();
        DB::table('employees')->insert(array(
            0 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            1 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            2 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            3 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            4 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            5 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            6 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            7 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            8 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            9 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            10 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            11 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            12 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            13 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            14 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            15 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            16 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            17 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            18 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            19 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            20 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            21 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            22 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            23 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            24 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            25 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            26 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            27 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            28 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            29 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            30 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            31 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            32 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            33 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            34 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            35 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            36 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            37 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            38 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            39 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            40 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            41 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            42 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            43 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            44 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            45 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            46 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            47 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            48 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            49 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            50 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            51 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            52 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            53 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            54 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            55 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            56 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            57 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            58 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            59 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            60 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            61 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            62 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            63 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            64 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            65 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            66 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            67 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            68 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            69 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            70 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            71 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            72 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            73 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            74 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            75 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            76 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            77 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            78 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            79 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            80 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            81 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            82 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            83 =>
            array(
                'name' => fake()->name(),
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'position_id' => fake()->numberBetween($min = 1, $max = 7),
                'department_id' => fake()->numberBetween($min = 1, $max = 7),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20),
                ),
            )
        );
    }
}
