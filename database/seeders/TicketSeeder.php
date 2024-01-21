<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Ticket;
use \App\Models\Material;
use \App\Models\User;

use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //creating the ticket when the user click the submit btn of the form
        //"Signaler un problème":

    //--------------------NEW LINE IN tickets tbl-----------------------
        $ticket = [
            'code' => 'Ticket_H_Clavier_0001',
           // 'description' => 'Touche manquante...',
            'urgency' => true,
            'material_id' => 1 
        ];

        Ticket::create($ticket);

//------------------------NEW LINE IN statut_ticket tbl------------------
        //On récupère l'id du ticket qui vient d'être créé:
       // $lastInsertedTicketID = $ticket->id;
        //return dd($lastInsertID);

         //On crée une ligne dans la table statut_ticket avec l'id du ticket
        //et statut à "en standby"(1)
        //$myCurrentTicket = Ticket::find($lastInsertedTicketID);
        $myCurrentTicket = Ticket::find(1);
       // $ticketStatut->statuts()->syncWithoutDetaching($lastInsertedTicketID,1);
        $myCurrentTicket->statuts()->syncWithoutDetaching([1]);

        //------------------NEW LINE IN ticket_user tbl-----------------
        $user = User::find(8);
        $user->tickets()->syncWithoutDetaching([1 => ['message' => 'Une touche de ce clavier est manquante...']]);

        //------------------UPDATE EXISTING LINE AND NEW LINE IN material_state tbl--------------
        $matState1 = Material::find(1);
        $matState1->states()->updateExistingPivot($matState1->id, ['updated_at' => now()]);
        $matState1->states()->syncWithoutDetaching([5]);


        //JUSTE POUR AVOIR LA MEME DATE SUR LE STATUT  L'ETAT et le ticket:
       /* $query1 = DB::table('material_state')
        ->where('material_id', 1)
        ->where('state_id', 1)
        //->update(['updated_at' => now()]);
        ->update(['updated_at' => '2024-01-21 20:31:48']);
 
         $query2 = DB::table('material_state')
             ->where('material_id', 1)
             ->where('state_id', 5)
            // ->update(['created_at' => now(),'updated_at' => now()]);
             ->update(['created_at' => '2024-01-21 20:31:48','updated_at' => '2024-01-21 20:31:48']);
 
         // $matState1->states()->attach([
         //     $matState1->id => [
         //       'state_id' => 5,
         //       'created_at' => now(),
         //       'updated_at' => ''
         //     ]
         //   ]);  
		
	    $query3 = DB::table('tickets')
        ->where('id', 1)
        ->update(['urgency' => true]);



         */
    }
}
