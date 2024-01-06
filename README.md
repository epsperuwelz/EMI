EAFC Material Inventory

Coucou les petits loups,

Je vous donne quelques instructions:

1.créer la DB dans phpMyAdmin:(onglet Bases de données)

nom: emi

codage de caractères: utf8mb4_general_ci /!\

2.copier l'url du projet (le btn vert "Code" tout en haut -> onglet HTTPS) : https://github.com/epsperuwelz/EMI.git

3.cloner le projet:

     a.se mettre dans le dossier www, faire shift + clic droit -> ouvrir la fenêtre PowerShell ici

     b.dans le PowerShell taper les commandes suivantes:

     PS C:\wamp64\www> git clone https://github.com/epsperuwelz/EMI.git

     PS C:\wamp64\www> cd EMI

     PS C:\wamp64\www\EMI> code .

4.dans VS Code ouvrir un terminal (onglet ... -> Terminal -> New Terminal) puis taper la commande suivante:

composer update

afin de récupérer le vendor.

5.faire un copié du fichier .env.example et le coller à la racine puis le renommer: .env

modifier:

APP_NAME=EMI

DB_DATABASE=emi

6.puis taper la commande:

php artisan migrate --seed

afin de créer les tables dans la DB préalablement créée et de populer les tables users,roles et model_has_roles via le database seeding (users créés dans database->seeders->DatabaseSeeder.php). (je vous donnerai les usernames,les emails et les passwords)

Comme ces users sont de toute façon dans mon seeding et que tout le monde y a accès, je vous en donne 2:

-Pour le panel Admin:

email: admin1@emi.be

password: password

-Pour le panel Home:

email: philippe.richard@emi.be

password: password

7.ensuite:

php artisan serv

pour lancer le serveur.

8.une erreur apparaîtra il faut juste cliquer sur le btn "GENERATE APP KEY" et rafraîchir la page.

(c'est la clef cryptée qui se trouve dans le fichier .env (APP_KEY=base64:5CYfpos6fEvE7dVzG9KHN2HPSAQ/u5WTt0N1Xooo+2xLiM=) 

mais comme on a pris l'exemple du .env cette clef n'est pas présente...

9.POUR PROVISOIREMENT FAIRE UN REDIRECT VERS LA LANDING PAGE DEPUIS LA LOGIN PAGE

Dans:vendor->filament->filament->resources->views->pages->auth->login.blade.php

ligne 9:

     "<a class="text-xs" href="{{ url('/') }}" >Return to landing page</a>" 
     
10.et enfin dans un autre terminal 
(que l'on ajoute avec onglet ... -> Terminal -> New Terminal ou bien avec le petit + en haut à droite du terminal):

php artisan icons:cache

qui soi-disant permet à Filament d'être moins lent... :-(

Vous êtes prêts à faire les migrations !! ;-)

Voir aussi le fichier texte emi-etapes.txt que j'ai mis sur Teams dans Développement ->

ETAPES-EMI-BASE&exemple-creation-ressource-avec-Filament3  dans lequel j'ai noté chaque 

étape pour la création de ce projet de base.

De plus à partir du point 21(CREATION DES RESSOURCES POUR CHAQUE PANEL) il y a les étapes

à suivre pour les migrations que vous aurez à faire (exemple avec la ressource Brand).

Happy Coding les petits loups ! ;-)



