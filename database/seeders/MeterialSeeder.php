<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Material;
use \App\Models\Location;
use \App\Models\Brand;
use \App\Models\Supplier;

class MeterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name'=>'Acer',  
            ],
            [
                'name'=>'Dell'
            ],
            [
                'name'=>'Lenovo'
            ],
            [
                'name'=>'Magis'
            ],
            [
                'name'=>'Marelli'
            ],
        ];
           
        foreach($brands as $brand){
            Brand::create($brand);
        }
        $suppliers = [
            [
                'name'=>'Supplier1',  
            ],
            [
                'name'=>'Supplier2'
            ]
        ];
           
        foreach($suppliers as $supplier){
            Supplier::create($supplier);
        }

        $locations = [
            [
                'name'=>'A13',  
            ],
            [
                'name'=>'A21',
            ],
            [
                'name'=>'A22',
            ],
            [
                'name'=>'B11',
            ],
            [
                'name'=>'C13',
            ]
        ];
           
        foreach($locations as $location){
            Location::create($location);
        }

        $materials = [

            [
                'code' => 'H_Clavier_0001',
                'name' => 'clavier1',
                'category_id' => 4,
                'user_id' => 5,
                'supplier_id' => 1,
                'location_id' => 1,
                'brand_id' => 1
            ],
            [
                'code' => 'H_Moniteur_0001',
                'name' => 'moniteur1',
                'category_id' => 5,
                'user_id' => 5,
                'supplier_id' => 1,
                'location_id' => 1,
                'brand_id' => 2
            ],
            [
                'code' => 'M_Chaise_0001',
                'name' => 'chaise1',
                'category_id' => 6,
                'user_id' => 7,
                'supplier_id' => 2,
                'location_id' => 1,
                'brand_id' => 5
            ],
            [
                'code' => 'M_Table_0001',
                'name' => 'table1',
                'category_id' => 7,
                'user_id' => 7,
                'supplier_id' => 2,
                'location_id' => 1,
                'brand_id' => 4
            ],
            [
                'code' => 'H_TBI_0001',
                'name' => 'TBI1',
                'category_id' => 3,
                'user_id' => 5,
                'supplier_id' => 1,
                'location_id' => 2,
                'brand_id' => 3
            ],
            [
                'code' => 'H_Clavier_0002',
                'name' => 'clavier2',
                'category_id' => 4,
                'user_id' => 5,
                'supplier_id' => 1,
                'location_id' => 2,
                'brand_id' => 1
            ],
            [
                'code' => 'M_Chaise_0002',
                'name' => 'chaise2',
                'category_id' => 6,
                'user_id' => 7,
                'supplier_id' => 2,
                'location_id' => 3,
                'brand_id' => 4
            ],
            [
                'code' => 'M_Chaise_0003',
                'name' => 'chaise3',
                'category_id' => 6,
                'user_id' => 7,
                'supplier_id' => 2,
                'location_id' => 3,
                'brand_id' => 4
            ],
            [
                'code' => 'H_Moniteur_0002',
                'name' => 'moniteurs2',
                'category_id' => 5,
                'user_id' => 5,
                'supplier_id' => 1,
                'location_id' => 2,
                'brand_id' => 1
            ],
            [
                'code' => 'M_Chaise_0004',
                'name' => 'chaise4',
                'category_id' => 6,
                'user_id' => 7,
                'supplier_id' => 2,
                'location_id' => 3,
                'brand_id' => 4
            ]
           
        ];
           
        // Looping and Inserting  statuts'array into Statut Table
        foreach($materials as $material){
            Material::create($material);
        }

        $matState1 = Material::find(1);
        $matState1->states()->syncWithoutDetaching([1]);
        $matState2 = Material::find(2);
        $matState2->states()->syncWithoutDetaching([1]);
        $matState3 = Material::find(3);
        $matState3->states()->syncWithoutDetaching([1]);
        $matState4 = Material::find(4);
        $matState4->states()->syncWithoutDetaching([1]);
        $matState5 = Material::find(5);
        $matState5->states()->syncWithoutDetaching([1]);
        $matState6 = Material::find(6);
        $matState6->states()->syncWithoutDetaching([1]);
        $matState7 = Material::find(7);
        $matState7->states()->syncWithoutDetaching([1]);
        $matState8 = Material::find(8);
        $matState8->states()->syncWithoutDetaching([1]);
        $matState9 = Material::find(9);
        $matState9->states()->syncWithoutDetaching([1]);
        $matState10 = Material::find(10);
        $matState10->states()->syncWithoutDetaching([1]);
        
    }
}
