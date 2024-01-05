EAFC Material Inventory

Coucou les petits loups,

Je vous donne quelques instructions:

1.créer la DB dans phpMyAdmin:(onglet Bases de données)

nom: emi

codage de caractères: utf8mb4_general_ci /!\

2.récuper l'url du projet (https://github.com/epsperuwelz/EMI.git) (btn vert "Code") sur github : https://github.com/epsperuwelz/EMI

3.sur VS Code:cloner et ouvrir le projet puis taper la commande suivante dans le terminal:

composer update

afin de récupérer le vendor.

4.faire un copié du fichier .env.example et le coller à la racine puis le renommer: .env

modifier:

APP_NAME=EMI

DB_DATABASE=emi

5.puis taper la commande:

php artisan migrate --seed

afin de créer les tables dans la DB préalablement créée et de populer les tables users,roles et model_has_roles via le database seeding (users créés dans database->seeders->DatabaseSeeder.php). (je vous donnerai les usernames,les emails et les passwords)

Comme ils sont de toute façon dans mon seeding et que tout le monde y a accès je vous en donne 2:

-Pour le panel Admin:

email: admin1@emi.be

password: password

-Pour le panel Home:

email: philippe.richard@emi.be

password: password

6.ensuite:

php artisan serv

pour lancer le serveur.

7.une erreur apparaîtra il faut juste cliquer sur le btn "GENERATE APP KEY" et rafraîchir la page.

(c'est la clef cryptée qui se trouve dans le fichier .env (APP_KEY=base64:5CYfpos6fEvE7dVzG9KHN2HPSAQ/u5WTt0N1Xooo+2xLiM=) 

mais comme on a pris l'exemple du .env cette clef n'est pas présente...

8.POUR PROVISOIREMENT FAIRE UN REDIRECT VERS LA LANDING PAGE DEPUIS LA LOGIN PAGE

Dans:vendor->filament->filament->resources->views->pages->auth->login.blade.php

ligne 9:

     "<a class="text-xs" href="{{ url('/') }}" >Return to landing page</a>" 
     
9.et enfin dans un autre terminal:

php artisan icons:cache

qui soi-disant permet à Filament d'être moins lent... :-(

Vous êtes prêts à faire les migrations !! ;-)

Voir aussi le fichier texte emi-etapes.txt que je mets sur Teams.
