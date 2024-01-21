<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Ajouts use des <> Models de Laravel (User) et de Spatie (Role et Permission):
use \App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            VersionsSeeder::class,
            OsSeeder::class,
            StatesSeeder::class,
            StatutsSeeder::class,
            CategoriesSeeder::class,
            VersionOsSeeder::class,
            MaterialSeeder::class,
            SoftwareSeeder::class
            
        ]);

        //puis faire:php artisan db:seed (si la db n'a été populée par aucun seeding)
        //ou:
        //php artisan db:seed --class=VersionsSeeder
        //et
        //php artisan db:seed --class=VersionOsSeeder
        //etc.

        //Les users qui ont accès au Filament back office(Admin Panel):
        //-L'Admin
        //-Le Gestionnaire

        //Par défaut le password est "password" voir dans factories->UserFactory.php:
        //'password' => static::$password ??= Hash::make('password'),

        $user1 =  User::factory()->create([
            'name' => 'Admin1',
            'email' => 'admin1@emi.be',
        ]);
        $user2 =  User::factory()->create([
            'name' => 'Gestionnaire1',
            'email' => 'gestionnaire1@emi.be',
        ]);
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Gestionnaire']);

        //https://spatie.be/docs/laravel-permission/v6/basic-usage/role-permissions
        $user1->assignRole($role1);
        $user2->assignRole($role2);

        //Les users qui ont accès au Filament Home Panel = site:

        //Les users qui ont le rôle de Professeur:
        $user3 =  User::factory()->create([
            'name' => 'Philippe',
            'email' => 'philippe.richard@emi.be',
        ]);
   
        $user4 =  User::factory()->create([
            'name' => 'Alain',
            'email' => 'alain.choquet@emi.be',
        ]);

        //Prof qui n'est pas informaticien:
        $user8 =  User::factory()->create([
            'name' => 'Guy',
            'email' => 'guy.demaupassant@emi.be',
        ]);

        $role3 = Role::create(['name' => 'Professeur']);
        $user3->assignRole($role3);
        $user4->assignRole($role3);
        $user8->assignRole($role3);
    
        //(Si on a crée un user et qu'on veut lui assigner un rôle après coup:
        //$guy = User::find(8);
        //$guy->assignRole('Professeur');)


        //Les users qui ont le rôle d'Intervenant:

        //L'informaticien:
        $user5 =  User::factory()->create([
            'name' => 'Francis',
            'email' => 'francis.leclercq@emi.be',
        ]);

        //La personne en charge du nettoyage:
        $user6 =  User::factory()->create([
            'name' => 'Ada',
            'email' => 'ada.lovelace@emi.be',
        ]);

        //Le réparateur de mobilier:
        $user7 =  User::factory()->create([
            'name' => 'Jean-Pierre',
            'email' => 'jp.lecomte@emi.be',
        ]);

        $role4 = Role::create(['name' => 'Intervenant']);
        $user5->assignRole($role4);
        $user6->assignRole($role4);
        $user7->assignRole($role4);

    }
}
