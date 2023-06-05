<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker=Faker::create();
        $per=Permission::create(['name'=>'Add view','slug'=>'add-view']);
        $per=Permission::create(['name'=>'Edit view','slug'=>'edit-view']);
        $per=Permission::create(['name'=>'Read view','slug'=>'read-view']);
        $per=Permission::create(['name'=>'Update view','slug'=>'update-view']);
        
// for($i=1; $i<=100; $i++){
//     $per=new Permission();
//         $per->name=$faker->name;
//         $per->slug=$faker->name;
//         $per->save();}
    }
}
