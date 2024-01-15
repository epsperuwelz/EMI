<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            [
                'name' => 'Hardware',
                'enabled' => 1,
                'topcategory_id' => NULL 
            ],
            [
                'name' => 'Mobilier',
                'enabled' => 1,
                'topcategory_id' => NULL 
            ],
            [
                'name' => 'TBI',
                'enabled' => 1,
                'topcategory_id' => 1
            ],
            [
                'name' => 'Clavier',
                'enabled' => 1,
                'topcategory_id' => 1
            ],
            [
                'name' => 'Moniteur',
                'enabled' => 1,
                'topcategory_id' => 1
            ],
            [
                'name' => 'Chaise',
                'enabled' => 1,
                'topcategory_id' => 2
            ],
            [
                'name' => 'Table',
                'enabled' => 1,
                'topcategory_id' => 2
            ],   
        ];
           
        // Looping and Inserting  statuts'array into Statut Table
        foreach($categories as $category){
            Category::create($category);
        }

    }
}
