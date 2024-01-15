<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Fonction;

class FonctionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fonctions = [

            [
                'name' => 'Demandeur',
                'description' => 'un Professeur ou un Intervenant'
            ],
            [
                'name' => 'Participant interne',
                'description' => 'un Professeur ou un Intervenant'
            ],
            [
                'name' => 'Participant externe',
                'description' => ''
            ]
        ];
           
        foreach($fonctions as $fonction){
            Fonction::create($fonction);
        }

    }
}
