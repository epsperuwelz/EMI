<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Statut;

class StatutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $statuts = [

            [
                'name' => 'En standby',
                'description' => "Intervention en attente car pas encore acceptée par un intervenant." 
            ],
            [
                'name' => 'En cours',
                'description' => ""
            ],
            [
                'name' => 'Terminé',
                'description' => ""
            ]
            
        ];
           
        // Looping and Inserting  statuts'array into Statut Table
        foreach($statuts as $statut){
            Statut::create($statut);
        }

        
    }
}
