<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin\Supplier;
use Illuminate\Database\Seeder;
use Database\Seeders\ItemTableSeeder;
use Database\Seeders\UnitTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\MachineTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\EmployeeTableSeeder;
use Database\Seeders\PositionTableSeeder;
use Database\Seeders\DepartmentTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(50)->create();
        // \App\Models\Admin\Employee::factory(100)->create();

        $this->call([
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            DepartmentTableSeeder::class,
            UnitTableSeeder::class,
            PositionTableSeeder::class,
            EmployeeTableSeeder::class,
            MachineTableSeeder::class,
            ItemTableSeeder::class,
        ]);
        Supplier::factory(100)->create();

    }
}
