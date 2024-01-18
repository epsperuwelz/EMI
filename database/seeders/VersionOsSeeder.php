<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Operatingsystem;

class VersionOsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //REMPLIR LA PIVOT TABLE OU TABLE INTERMEDIAIRE
        $osVersion = Operatingsystem::find(1);
        $osVersion->versions()->attach([3,4]);
        $osVersionbis = Operatingsystem::find(4);
        $osVersionbis->versions()->attach([1,3,4,5]);
    }
}
