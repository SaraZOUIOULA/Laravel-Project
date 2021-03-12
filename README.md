#Framework 
## Cloner le repo LARAVEL

1. sur git récupérer l'URL du projet à cloner 
2. Dans le terminal lancer la commande 
''' git clone urlRepo nomDossier
3. Changer le .env.example en .env et configurer la BDD
4. installer composer sur votre machine ''' composer install
5. lancer ''' php artisan migrate:fresh -- seed pour charger la BDD
6. lancer le projet sur votre dossier avec la cmd  '''php artisan serve


## Menu
### characters ==> (page home)
- liste de caractère avec leur information + un bouton modifier et supprimer 
- le dessinateur est sous forme de lien qui récupère l'id de ce dernier et ramène vers une page avec ses informations avec 2 boutton supprimer et modifier

### Add Draftsman 
- formulaire pour ajouter un dessinateur 

### Add Character
- formulaire pour ajouter caractère de bande dessinée

### MVC & BDD 

- la base donnée contient 2 tables draftsnem (dessinateur) et characters (caratère de bd) qui sont lié en one to many
- Mise en place d'un CRUD pour les 2 tables 
- le NavController et le web.php en route: permettent la navigation et redirection entre les views.

