<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\State;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $states = [
            [
                'name' => 'Normal',
                'description' => 'Etat par défaut de chaque matériel.' 
            ],
            [
                'name' => 'Disparu',
                'description' => 'Ce matériel doit être deleté par le gestionnaire.'
            ],
            [
                'name' => 'Cassé mais je sais le réparer moi-même',
            'description' => "Le Professeur  ou l'intervenant cumule 2 fonctions."
            //demandeur et intervenant interne.
            ],
            [
                'name' => 'Cassé et nécessite une réparation externe',
                'description' => "Ce n'est pas la FK user_id mais external_id qui est remplie"
            ],
            [
                'name' => 'Cassé et sera réparé en interne',
                'description' => "Scénario nominal"
            ],
            [
                'name' => 'Délocalisé',
                'description' => "Le gestionnaire fera un update de la location du material."
            ],
            [
                'name' => 'En encodage',//Donc disabled (car nouveau) 
                'description' => "C'est un create fait par un Professeur ou un Intervenant,le gestionnaire vérifie l'encodage."
                //il mettral'état à Normal et le statut à Terminé.
            ]
        ];
           

        //Looping and Inserting states'array into State Table
        foreach($states as $state){
            State::create($state);
        }
       
    }
}
