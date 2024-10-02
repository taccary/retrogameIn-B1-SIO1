# squelette_SIO
site dynamique d'exemple en SIO1-B1-web-et-données



Pour créer la BDD : A la racine de votre SGBD mysql ou mariaDB (petite maison), importez le script BDD/retrogamein.sql

Vérifez et mettez à jour les fichiers de configuration BDD/configBdd.php avec les bonnes valeurs si besoin



# MAJ 2024 simplifications config


# Installation du site sur un serveur

Ce projet nécessite les éléments suivants :
- Un serveur web Apache
- Un serveur SGBD MySQL

## Configuration

### CAS 1 : Utilisation avec un serveur LAMP local (Wamp, Uwamp, Laragon, ...)

1. Copiez le contenu du dossier `site` sous votre repertoire web dans /retrogaming
2. Importez le script `database/retrogamein.sql` dans votre SGBD MySQL local. Ce script crée la base de données, l'utilisateur du driver, les tables et importe les données nécessaires.
2. Adaptez la valeur du serveur MySQL auquel on effectue la connexion dans la variable $_ENV["host"] du fichier `site/BDD/infoBDD.inc.php`. Sur un serveur local, elle est classiquement à "localhost".
2. Adaptez la valeur du port d'écoute de votre serveur MySQL dans la variable $_ENV["port"] du fichier `site/BDD/infoBDD.inc.php`.
3. Adaptez la valeur de la base de données utilisée sur votre serveur MySQL dans la variable $_ENV["dbname"] du fichier `site/BDD/infoBDD.inc.php`.

### CAS 2 : Utilisation avec des conteneurs (Apache/MySQL/PhpMyAdmin) à l'intérieur d'un CodeSpace

1. Ouvrez un CodeSpace depuis votre dépot sur Github. Vous arrivez sur un vscode en ligne, il est possible de l'ouvrir également depuis un vscode bureau qui est alors connecté à vore codespace (espace dans le cloud)
2. Ouvrez le terminal dans votre vscode du CodeSpace et saisissez la commande `docker compose up -d` pour démarrer les trois conteneurs. Le script de construction (docker-compose.yml) crée automatiquement la base de données et les utilisateurs nécessaires.
3. Adaptez la valeur du serveur MySQL auquel on effectue la connexion dans la variable $_ENV["host"] du fichier `site/BDD/infoBDD.inc.php` en utilisant la valeur 'db' (nom du conteneur MySQL démarré dans le codespace).
4. Installez l'extension Docker dans le vscode de votre CodeSpace pour visualiser les états des 3 conteneurs et facilement les démarrer/éteindre/ouvrir dans le navigateur. Depuis l'extension Docker, faites un clic droit sur les conteneurs php:8.1 et phpmyadmin pour les ouvrir dans des onglets du navigateur.

## Notes importantes

- Pour toute assistance supplémentaire, consultez la documentation appropriée pour votre environnement LAMP local ou pour l'utilisation de CodeSpaces.


