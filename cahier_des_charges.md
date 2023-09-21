# Cahier des charges

## Index
- [Résumé du projet](#résumé-du-projet)
- [Description du projet](#description-du-projet)
- [Objectifs](#objectifs)
- [Fonctionnalités](#fonctionnalités)
- [Spécifications techniques](#spécifications-techniques)
- [Design et interface utilisateur](#design-et-interface-utilisateur)
- [Contraintes](#contraintes)

## Résumé du projet
Développement d'un site web pour le Garage V. Parrot, spécialisé dans la réparation, l'entretien, et la vente de véhicules d'occasion. Le site permettra aux visiteurs de consulter les horaires d'ouverture du garage, les services proposés, de déposer un avis client, de prendre rendez-vous en ligne, et de consulter la galerie des véhicules à vendre. Un espace utilisateur intégré donnera accès au tableau de bord de l'application, permettant l'ajout et la suppression de personnel, l'ajout de nouveaux véhicules à la vente, ainsi que leur suppression.

[Retour à l'index ↑](#index)

## Description du projet
Le Garage V. Parrot souhaite développer un site web pour améliorer sa visibilité sur internet auprès de ses clients. Le site offrira aux clients la possibilité de prendre rendez-vous plus facilement et de consulter les véhicules à vendre en ligne. Il permettra également aux employés de gérer les véhicules à vendre de manière efficace, en évitant les erreurs de saisie et les doublons.

Le directeur du site pourra gérer la liste des employés inscrits sur le site, ce qui lui permettra de sélectionner le personnel responsable de la gestion des véhicules et de leur accorder un accès au tableau de bord pour gérer les ventes d'occasion. Le directeur pourra également modifier les horaires d'ouverture du garage depuis le tableau de bord, ainsi que les services proposés aux clients. Le modérateur pourra gérer les avis clients.

[Retour à l'index ↑](#index)

## Objectifs
Les objectifs spécifiques du projet et les résultats attendus sont les suivants :

- Mettre le site en ligne.
- Assurer la compatibilité du site avec les différents appareils (responsive design).
- Offrir des fonctionnalités différentes en fonction des rôles attribués (voir Fonctionnalités).
- Mettre en place une fonction de tri dynamique des véhicules.
- Mettre en place un formulaire de contact fonctionnel.

[Retour à l'index ↑](#index)

## Fonctionnalités
### Fonctionnalités pour les Visiteurs

- Les visiteurs auront la possibilité de naviguer sur les pages du site qui ne sont pas réservées au personnel :
    - **Accueil** : Présentation du garage, services proposés par l'enseigne, horaires d'ouverture et espace pour les avis clients.
    - **Galerie de ventes** : Liste des véhicules à vendre avec une fonction de tri dynamique sans rechargement de la page.
    - **Formulaire de contact** : Permet aux visiteurs de contacter le garage en ligne.
    - **Fiche technique du véhicule** : Page de description complète du véhicule sélectionné dans la galerie des ventes.
- **Avis client** : Possibilité de déposer un avis dans l'espace "Avis client". Les avis seront validés par le modérateur avant d'apparaître sur le site.
- **Fonction de tri dynamique** : Utilisation de la fonction de tri des véhicules sur la page Galerie de ventes. La page affichera les véhicules selon les filtres choisis par l'utilisateur.
- **Remplir les formulaires** : Remplir le formulaire de contact et prendre rendez-vous en ligne pour un service, ou prendre rendez-vous pour l'achat d'un véhicule particulier à partir de la page "Fiche technique du véhicule".

### Fonctionnalités pour l'Administrateur (Directeur du Garage)

- L'administrateur dispose de fonctionnalités supplémentaires pour gérer le site et son contenu :
    - **Panneau de contrôle** : Accès au panneau de contrôle "admin", qui permet de gérer les employés, les heures d'ouverture du garage et les services proposés.
    - **Gestion du personnel** : Ajout et suppression des membres du personnel, ainsi que l'attribution du statut de modérateur.
    - **Gestion des heures d'ouverture** : Modification des heures d'ouverture du garage.
    - **Gestion des services** : Modification des services proposés sur la page d'accueil.

### Fonctionnalités pour les Employés

- **Panneau de contrôle** : Accès au panneau de contrôle "employé", qui permet d'ajouter, d'éditer et de supprimer les véhicules d'occasion à vendre sur le site, ainsi que de laisser un témoignage client.
- **Ajout/Suppression et Édition des véhicules** : Ajout, édition et suppression de véhicules stockés dans la base de données, et affichage sur le site web.
- **Ajouter un témoignage client** : Possibilité de laisser un témoignage client après la visite d'un client satisfait ou insatisfait.

### Fonctionnalités pour le Modérateur

- **Panneau de contrôle** : Accès au panneau de contrôle "modérateur", qui permet d'éditer et de supprimer les avis clients, ainsi que d'approuver ou de rejeter les avis en attente.

[Retour à l'index ↑](#index)

## Spécifications techniques

### Composition des pages

#### Accueil

La page d'accueil comprend un espace pour les avis clients, où 10 commentaires seront sélectionnés par le modérateur et affichés sur la section "Avis Client", visibles par tous les visiteurs du site.

#### Galerie

Les visiteurs pourront effectuer un tri des véhicules qu'ils souhaitent voir affichés. Pour une expérience utilisateur plus dynamique, la page ne devra pas se recharger ; la liste des voitures affichées sera modifiée en fonction de la réponse de l'appel AJAX ou Fetch effectué à la base de données.

#### Formulaire

Les visiteurs auront accès à un formulaire qui leur permettra de prendre rendez-vous en ligne auprès du garage pour un entretien, ainsi que de prendre rendez-vous pour l'achat d'une voiture en particulier.

#### Espace de Connexion

L'espace de connexion est accessible à tout utilisateur, mais il ne sera pas lié à un lien direct. Pour y accéder, l'utilisateur devra saisir l'URL : `site.com/login`.

[Retour à l'index ↑](#index)

## Design et Interface Utilisateur

Les maquettes seront accessibles sur GitHub.

[Retour à l'index ↑](#index)

## Contraintes

- Date limite : 21/09/23 ; 23h59.
- Pas d'interface graphique pour la génération du code SQL.
- Utilisation de la fonction de tri des véhicules sans rechargement de la page.

[Retour à l'index ↑](#index)
