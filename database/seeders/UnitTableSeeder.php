<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->delete();
        DB::table('units')->insert(array(
           0 =>
           array(
               'id' => 1,
               'name' => 'Centimeter',
               'symbol' => 'cm',
               'active' => 1,
               'created_by' => 1,
               'updated_by' => 1
           ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Kilograms',
                'symbol' => 'kg',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Meter',
                'symbol' => 'm',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Pieces',
                'symbol' => 'pcs',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Boxes',
                'symbol' => 'box',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Rolls',
                'symbol' => 'roll',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Bottles',
                'symbol' => 'bottle',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Tons',
                'symbol' => 'ton',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1
            )
        )); 
    }
}
