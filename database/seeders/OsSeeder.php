<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Operatingsystem;

class OsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operatingsystems = [
            [
                'name'=>'Ubuntu',  
            ],
            [
                'name'=>'Debian',
            ],
            [
                'name'=>'Fedora',
            ],
            [
                'name'=>'Windows 10',
            ],
            [
                'name'=>'Windows 11',
            ]
        ];
           
        foreach($operatingsystems as $operatingsystem){
            Operatingsystem::create($operatingsystem);
        }

    }
}
