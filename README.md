# Projet Dragodindes

## Description

Ce projet Symfony permet de gérer une liste d'habitants (en locurence pas vraiment vraiment des habitants) et leurs habitations associées. Il offre des fonctionnalités pour ajouter, modifier, supprimer et voir les détails des habitants, ainsi que pour voir toutes les habitations et les détails de chaque habitation.

## Fonctionnalités

- **Gestion des Habitants** : Ajoutez, modifiez et supprimez des habitants de la base de données.
- **Détails des Habitants** : Voir les informations détaillées de chaque habitant.
- **Gestion des Habitations** : Affichez une liste de toutes les habitations et leurs détails.
- **Association** : Associez les habitants à des habitations spécifiques et consultez la liste des habitants par habitation.

## Prérequis

- PHP 8.0 ou supérieur
- Composer
- Symfony CLI
- Serveur MySQL ou autre base de données compatible Doctrine

## Installation

1. Clonez le dépôt GitHub :
   ```bash
   $git clone https://github.com/LACOSTE-PIER/TP_Projet.git

2. Installez les dépendances Composer :
    ```bash
    $composer install
3. Configurez votre fichier .env avec les détails de la base de données.

4. Créez la base de données et les schémas :
    ```bash
    $php bin/console doctrine:database:create
    $php bin/console doctrine:migrations:migrate

5. Lancez le serveur Symfony :
    ```bash
    $symfony server:start

## Utilisation

Accédez à http://localhost:8000/habitant/ sur votre navigateur pour commencer à utiliser l'application.