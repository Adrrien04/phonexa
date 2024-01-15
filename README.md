# Phonexa
[![phonexa](https://forthebadge.com/images/badges/check-it-out.svg)](https://sure-tough-snail.ngrok-free.app/) [![forthebadge](https://forthebadge.com/images/badges/uses-brains.svg)](https://forthebadge.com) [![forthebadge](https://forthebadge.com/images/badges/works-on-my-machine.svg)](https://forthebadge.com)

Phonexa est un site web utilisant les technologies PHP, Javascript, Postgres et Alpine qui vous permet d'envoyer des messages entre utilisateurs enregistrés sur le site. L'envoi de message se fait en temps réel et les mot de passes sont stockés de manière sécurisée dans la base de données en utilisant le hashage.

## Prérequis
Ce qu'il est requis pour commencer avec votre projet...
- Ngrok
- Git
- Postgres 
- Php 8.0

## Installation
- Cette commande permettra de cloner ce repo dans votre dossier. ``git clone https://github.com/Adrrien04/phonexa.git``

- Ensuite un fois que le repo est cloné, vous devez configurer la base de données Postgres.

- Sur votre logiciel Postgres, créez la base de données Phonexa, qui permettra d'enregistrer les utilisateurs ainsi que les messages. Dans le fichier ``chatapp.sql`` vous trouverez un code SQL à executer dans votre logiciel Postgres, qui va automatiquement générer la base de données.

- Modifiez ensuite le fichier ``config.php`` avec les identifiants de connexion de votre base de données.

## Démarrage du projet
- Pour lancer le projet vous devez aller a la racine du projet avec le terminal et faire la commande suivante `` php -S localhost:port ``

- Une fois le projet lancé, vous pouvez utiliser le site en local, pour le "lancer en public" vous devez utiliser ngrok.

- Double cliquez sur l'executable ngrok et ensuite écrire dans le terminal qui s'ouvre ``ngrok http port_utilisé_en_localhost``
Veillez a bien écrire le même port en local ET sur ngrok.

- Une fois la commande executée il y aura dans le terminal un lien que vous devez Ctrl + Click et le projet se lancera sur internet, vous pouvez ensuite partager ce lien et d'autre personnes pourront y acceder.

## Logiciels Utilisés
* [Ngrok](https://ngrok.com/) - Tunnel de développement
* [Postgres](https://www.pgadmin.org/) - PgAdmin4 pour la base de données
