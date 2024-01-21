<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Software;
use \App\Models\Type;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = [
            [
                'name' => 'IDE'
            ],
            [
                'name' => 'ERD'    
            ]
        ];
           
        foreach($types as $type){
            Type::create($type);
        }


        $softwares = [
            [
                'name' => 'VS Code',
                'type_id' => 1,
                'version_id' => 3

            ],
            [
                'name' => 'MS Visual Studio',
                'type_id' => 1,
                'version_id' => 1
            ],
            [
                'name' => 'Sublime',
                'type_id' => 1,
                'version_id' => 2
            ],
            [
                'name' => 'PhpStorm',
                'type_id' => 1,
                'version_id' => 4
            ],
            [
                'name' => 'Looping',
                'type_id' => 2,
                'version_id' => 5
            ],
            [
                'name' => 'Visual Paradigm',
                'type_id' => 2,
                'version_id' => 6
            ]
        ];
           
        foreach($softwares as $software){
            Software::create($software);
        }
    }
}
