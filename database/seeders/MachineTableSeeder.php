<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('machines')->delete();
        DB::table('machines')->insert(array(
           0 =>
           array(
               'id' => 1,
               'code' => 'A1',
               'name' => 'Akash 1',
               'active' => 1,
               'remarks' => fake()->text($maxNbChars = 200),
               'created_by' => fake()->numberBetween($min = 1, $max = 20),
               'updated_by' => fake()->numberBetween($min = 1, $max = 20)
           ),
            1 =>
            array(
                'id' => 2,
                'code' => 'A2',
                'name' => 'Akash 2',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            2 =>
            array(
                'id' => 3,
                'code' => 'A3',
                'name' => 'Akash 3',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            3 =>
            array(
                'id' => 4,
                'code' => 'Ima1',
                'name' => 'Ima 1',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            4 =>
            array(
                'id' => 5,
                'code' => 'Ima2',
                'name' => 'Ima 2',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            5 =>
            array(
                'id' => 6,
                'code' => 'Aut1',
                'name' => 'Aut 1',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            6 =>
            array(
                'id' => 7,
                'code' => 'Aut2',
                'name' => 'Aut 2',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            7 =>
            array(
                'id' => 8,
                'code' => 'F2',
                'name' => 'F2',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            8 =>
            array(
                'id' => 9,
                'code' => 'S1',
                'name' => 'Skin 1',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            9 =>
            array(
                'id' => 10,
                'code' => 'S2',
                'name' => 'Skin 2',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            10 =>
            array(
                'id' => 11,
                'code' => 'Q2',
                'name' => 'Quadro 2',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            11 =>
            array(
                'id' => 12,
                'code' => 'Q3',
                'name' => 'Quadro 3',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            12 =>
            array(
                'id' => 13,
                'code' => 'Q4',
                'name' => 'Quadro 4',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            13 =>
            array(
                'id' => 14,
                'code' => 'Q5',
                'name' => 'Quadro 5',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            14 =>
            array(
                'id' => 15,
                'code' => 'Q6',
                'name' => 'Quadro 6',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            15 =>
            array(
                'id' => 16,
                'code' => 'P1',
                'name' => 'Prodo 1',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            16 =>
            array(
                'id' => 17,
                'code' => 'P2',
                'name' => 'Prodo 2',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            17 =>
            array(
                'id' => 18,
                'code' => 'P3',
                'name' => 'Prodo 3',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            18 =>
            array(
                'id' => 19,
                'code' => 'P4',
                'name' => 'Prodo 4',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            19 =>
            array(
                'id' => 20,
                'code' => 'P5',
                'name' => 'Prodo 5',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            20 =>
            array(
                'id' => 21,
                'code' => 'P7',
                'name' => 'Prodo 7',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            21 =>
            array(
                'id' => 22,
                'code' => 'P8',
                'name' => 'Prodo 8',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            22 =>
            array(
                'id' => 23,
                'code' => 'P9',
                'name' => 'Prodo 9',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            23 =>
            array(
                'id' => 24,
                'code' => 'P10',
                'name' => 'Prodo 10',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            24 =>
            array(
                'id' => 25,
                'code' => 'P11',
                'name' => 'Prodo 11',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            25 =>
            array(
                'id' => 26,
                'code' => 'P12',
                'name' => 'Prodo 12',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            26 =>
            array(
                'id' => 27,
                'code' => 'P14',
                'name' => 'Prodo 14',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            27 =>
            array(
                'id' => 28,
                'code' => 'P15',
                'name' => 'Prodo 15',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            28 =>
            array(
                'id' => 29,
                'code' => 'P16',
                'name' => 'Prodo 16',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            29 =>
            array(
                'id' => 30,
                'code' => 'P17',
                'name' => 'Prodo 17',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            30 =>
            array(
                'id' => 31,
                'code' => 'M6',
                'name' => 'Manual 6',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            31 =>
            array(
                'id' => 32,
                'code' => 'M11',
                'name' => 'Manual 11',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            32 =>
            array(
                'id' => 33,
                'code' => 'M12',
                'name' => 'Manual 12',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            33 =>
            array(
                'id' => 34,
                'code' => 'M39',
                'name' => 'Manual 39',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            ),
            34 =>
            array(
                'id' => 35,
                'code' => 'Others',
                'name' => 'n/a',
                'active' => 1,
                'remarks' => fake()->text($maxNbChars = 200),
                'created_by' => fake()->numberBetween($min = 1, $max = 20),
                'updated_by' => fake()->numberBetween($min = 1, $max = 20)
            )
        ));
    }
}
