<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Version;

class VersionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $versions = [
            [
                'name'=>'5.1',  
            ],
            [
                'name'=>'5.2',
            ],
            [
                'name'=>'5.3',
            ],
            [
                'name'=>'5.4',
            ],
            [
                'name'=>'5.6',
            ],
            [
                'name'=>'6.1',
            ]
        ];
           
        foreach($versions as $version){
            Version::create($version);
        }
    }
}
