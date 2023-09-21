Processus d'Installation Local

Prérequis :
PHP (version 8+)
XAMPP (MariaDB v. 10.4)
Composer
Symfony CLI

- Installez XAMPP. Si PHP à été installé avec Xampp, définissez le chemin dans le PATH système . Configurez XAMPP pour définir le port de MySql sur 3306.
Lancez Apache et MySql avant de lancer le serveur local pour héberger l'application;

- Si PHP n'a pas été installé avec Xampp, installez PHP manuellement, et reliez le PATH système, ainsi que le PATH XAMPP.

- Installer Composer à partir de ce lien : https://getcomposer.org/download/ ;; Téléchargez l'exe pour windows si vous êtes sur windows, ou entrez les commandes si vous êtes sur Linux.

- Symfony CLI -> téléchargez les binaires sur le site https://symfony.com/download, ou, installez avec la commande scoop : `scoop install symfony-cli`

- Clonez le repo distant sur github en local


Dans le répertoire racine de l'application, executez cet commande pour que composer initialise les composants requis :
`composer install`
Vous devez vous assurer que Xampp Fonctionne bien en arrière plan, et que les modules Apaches et MySql soient actifs, avant de continuer.

- dans le fichier .env, vous devez paramétrer le fichiers, et vos identifiants de base de données.
Le fichiers est déja pré remplis, et vous explique la marche à suivre. Pensez a décommenter la partie DATABASE_URL qui vous concerne.
Si vous ne souhaitez pas créer d'utilisateurs spécifiques pour utiliser la base de données, vous pouvez vous connecter en root, lequel ne demande aucun mot de passe et possède tout les droits d'administration.
Pensez à renseigner un nom de Schema pour la création et l'utilisation de la base de données.

- Ouvrez un nouveau Terminal à la racine du projet, et éffectuez la commande : `php bin/console doctrine:database:create`, ceci va initialiser le schéma de la Base de données
Vous pourrez ensuite effectuer la commande : `php bin/console doctrine:migrations:migrate`, laquelle devrait créer les tables nécessaires pour stocker les informations.
Vous pourrez ensuite effectuer la commande : `php bin/console doctrine:fixtures:load`, pour effectuer les chargements des données test de la base de données

Pour voir le rendu du site, entrez la commande : `symfony server:start -d`, le rendu local devrait être visible a l'adresse `127.0.0.1:8000`


