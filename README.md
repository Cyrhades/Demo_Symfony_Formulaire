# Comment installer ce projet ?

Dans un terminal placez vous dans le répertoire où vous souhaitez travailler

`💻 >  git clone https://github.com/Cyrhades/Demo_Symfony_Formulaire ./`

 
 
>📌 Si vous n'avez pas git d'installé sur votre système vous pouvez [télécharger le projet](https://github.com/Cyrhades/Demo_Symfony_Formulaire/archive/master.zip) et le décompresser dans votre répertoire.
 

 
Vous devez ensuite effectuer la commande :

`💻 > composer install`

 
Une fois l'installation effectuée vous devez modifier le fichier .env (ou mieux encore créer un fichier .env.local)
et modifiez (ou créez) la variable DATABASE_URL, par exemple :

`📑 > DATABASE_URL=mysql://root:@127.0.0.1:3306/nom_de_votre_bdd`

 
> **IMPORTANT**

>⚠️ Pensez bien à démarrer votre serveur SQL ! ⚠️

 
Vous pouvez maintenant taper la commande :

`💻 > php bin/console doctrine:database:create`

 
Puis la commande :

`💻 > php bin/console doctrine:migrations:migrate`


 
Lancez votre serveur via la commande

`> 💻 php -S localhost:8000 -t ./public`



# Comment a été créé ce projet ?

🎼 avec le client de Symfony :

`> 💻 symfony new ./ --full`


sans le client Symfony :

`> 💻 composer create-project symfony/website-skeleton ./`


Une fois l'installation effectuée vous devez modifier le fichier .env (ou mieux encore créer un fichier .env.local)
et modifiez (ou créez) la variable DATABASE_URL, par exemple :

`📑 > DATABASE_URL=mysql://root:@127.0.0.1:3306/nom_de_votre_bdd`

 
> **IMPORTANT**

>⚠️ Pensez bien à démarrer votre serveur SQL ! ⚠️


## Créer l'entity Post ?

🎼 avec le client de Symfony :

`> 💻 symfony console make:entity`


sans le client Symfony :

`> 💻 php bin/console make:entity`


La console vous pose en premiere question quel nom souhaitez vous donner à votre entity, nommez la "Post"

Il vous propose de créer les champs, voici la liste des réponses par champs : 

    1) title, string, 255, no 
    2) image, string, 255, no
    3) content, text, no
    4) createdAt, datetime, no

Cela aura pour conséquence de vous créer l'entity et le repository !

Fichiers : ./src/Entity/Post.php, ./src/Repository/PostRepository.php


## Impacter la BDD avec l'entiity créée !

🎼 avec le client de Symfony :

`> 💻 symfony console make:migration`


sans le client Symfony :

`> 💻 php bin/console make:migration`


Cela aura pour conséquence de vous créer 1 fichier migration ! Mais n'aura aucun impact sur la BDD.

Fichiers : ./src/Migrations/Version*********.php



🎼 avec le client de Symfony :

`> 💻 symfony console doctrine:migrations:migrate`


sans le client Symfony :

`> 💻 php bin/console doctrine:migrations:migrate`

La console vous demandera si vous avez conscience que cela aura un impact sur la BDD répondez "y" pour créer votre table post !


## Créer le controller ?

🎼 avec le client de Symfony :

`> 💻 symfony console make:controller`


sans le client Symfony :

`> 💻 php bin/console make:controller`

La console vous demande quel nom souhaitez vous donner à votre controller, nommez le "PostController"

Cela aura pour conséquence de vous créer le controller, la route (via Annotation) et le template !

Fichiers : ./src/Controller/PostController, ./templates/post/index.html.twig



## Créer le formulaire ?
🎼 avec le client de Symfony :

`> 💻 symfony console make:form`


sans le client Symfony :

`> 💻 php bin/console make:form`


La console vous quel nom souhaitez vous donner à votre form, nommez le "PostType", elle vous demande ensuite si ce formulaire fait référence à une entity (si oui entrez le nom) dans notre cas tapez "Post"


Cela aura pour conséquence de vous créer le fichier qui buildera votre Formulaire.

Fichier : ./src/Form/PostType.php

