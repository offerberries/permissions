<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role=Role::create(['name'=>'Admin','slug'=>'admin']);
        $role=Role::create(['name'=>'Teacher','slug'=>'teacher']);
        $role=Role::create(['name'=>'Student','slug'=>'student']);
    }
}
