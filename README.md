# Phonexa
[![phonexa](https://forthebadge.com/images/badges/check-it-out.svg)](https://sure-tough-snail.ngrok-free.app/) [![forthebadge](https://forthebadge.com/images/badges/uses-brains.svg)](https://forthebadge.com) [![forthebadge](https://forthebadge.com/images/badges/works-on-my-machine.svg)](https://forthebadge.com)

Phonexa est un site web utilisant les technologies PHP, Javascript, Postgres et Alpine qui vous permet d'envoyer des messages entre utilisateurs enregistrés sur le site. L'envoi de message se fait en temps réel et les mot de passes sont stockés de manière sécurisée dans la base de données en utilisant le hashage.

## Prérequis
Ce qu'il est requis pour commencer avec votre projet...
* [Ngrok](https://ngrok.com/) - Tunnel de développement
* [Postgres](https://www.pgadmin.org/) - PgAdmin4 pour la base de données
- Git
- Php 8.0

## Installation
- Ouvrez votre terminal et positionnez vous dans le dossier dans lequel vous souhaitez intier le projet en utilisant la commande ``cd``

- Cette commande permettra de cloner ce repo dans votre dossier. ``git clone https://github.com/Adrrien04/phonexa.git``

- Ensuite un fois que le repo est cloné, vous devez configurer la base de données Postgres.

- Sur votre logiciel Postgres, créez la base de données Phonexa en faisant clique-droit sur "Database" juste en dessous du nom du serveur utilisé (en général PostgreSQL XX) et cliquez sur "Create". Donnez un nom a la base de données.

- Dans le fichier ``chatapp.sql`` vous trouverez un code SQL à executer dans votre logiciel Postgres, qui va automatiquement générer la base de données.
Pour ce faire, faites clique-droit sur le nom de votre base de données et cliquez sur "query tool" et ensuite copiez la première partie de chatapp.sql et tapez f5 puis la seconde partie et encore f5.
Bravo ! La base de donnée est complète est est désormais prête a être utilisée.

- Modifiez ensuite le fichier ``config.php`` avec les identifiants de connexion de votre base de données.
En général l'utilisateur est "postgres" et le port 5342 par défaut.

## Démarrage du projet
- Pour lancer le projet vous devez aller a la racine du projet avec le terminal et faire la commande suivante `` php -S localhost:8000 `` 
On utilise en général le port 8000

- Le projet est maintenant lancé sur votre port 8000 et vous pouvez tester le site en local.

## Déploiement du projet

- Une fois le projet lancé, vous pouvez utiliser le site en local, pour le "lancer en public" vous devez utiliser ngrok.

- Double cliquez sur l'executable ngrok et ensuite écrire dans le terminal qui s'ouvre ``ngrok http 8000``

- Une fois la commande executée il y aura dans le terminal un lien que vous devez Ctrl + Click et le projet se lancera sur internet, vous pouvez ensuite partager ce lien et d'autre personnes pourront y acceder.

## Auteurs
Liste des [contributeurs](https://github.com/Adrrien04/phonexa/graphs/contributors) 
