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
