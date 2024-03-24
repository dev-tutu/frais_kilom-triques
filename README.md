# frais_kilom-triques

## Install

### Apache

Sur un serveur apache vous devez importer le front

    ```

    index.php => front
    js (dossier)
        select.js => Actualisation des select
    php
        bareme.php => gestion du barème
        bdd.php => connexion à la BDD
        calcule.php => calcule la formule
        config.php => variables de configuration
        unit.php => test unitaire

    ```

### MariaDB

    1. configuration de la BDD

Vous devez avoir un serveur MariaDB dèjà configuer et importer les données du fichier simulateur_km.sql

    2. Modification des variables

    Dans le fichier config.php vous devez modifier les valeurs des variables pour initialiser la connexion à votre BDD

    ```

         $servername = "localhost"; (@IP ou dns du serveur)
         $username = "root"; (nom de l'utilisateur)
         $password = ""; (password de l'utilisateur)
         $dbname = "simulateur_km"; (nom de la BDD)

      ```

## Technique

### Global

L'application fonctionne au moyen d'un formulaire qui envoie les données (véhicule, CV, KM) vers le backend pour récupérer la formule correspondante et effectuer le calcul.

    1. bareme.php
    
  ```

  class BaremeManager extends Database => possède en fille la class BDD

  getFormule($vehicule, $cv, $km) => recupère la bonne formule en fonction des paramètres

  getIndiceKM($vehicule, $km) => recupère l'indice de la formule

  ```

    2. bdd.php

  ```

  class Database

  paramètres :

      private $servername;
      private $username;
      private $password;
      private $dbname;
      protected $conn;

  function connect() => établie la connexion

  function disconnect() => ferme la connexion
  ```

  3. calcule.php

  ```
   class Calculator

   public static function calculate($formule) => calcule de la formule sans instancier

```

  4. config.php

  ```
    Constantes du projet
  
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "simulateur_km";
  ```

## Unitaire

Pour tester que les calcules sont bons vous devez utiliser le test unitaire 

phpunit unit.php

