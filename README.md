# phpmvc

Blog basique en PHP avec une architecture MVC simplififée. Implémente les designs patterns MVC et Repository.

# Installation

- git clone https://github.com/Handigital-Formation/phpmvc2022

# Lancement

- Dans un terminal, lancer la commande:

```
php -S localhost:3000

```

Tant que cette commande est active, l'application sera disponible à l'url http://localhost:3000

# Todo

- Suivez le chemin de la requête HTTP (-> index.php -> Bootstrap.php -> Frontend.php -> etc.) pour comprendre le fonctionnement de l'application
- Compléter Frontend.php, les modèles et les vues
- Créer une interface d'administration (Avec plusieurs contrôleurs pour gérer les différents modèles)

# SQLite

- Par défaut, une base de données SQLite est utilisée
- PHPLiteAdmin est installé dans le projet pour l'administrer

# MySQL

- Pour utiliser MySQL plutôt que SQLite, il faut modifier le fichier Application/Bootstrap.php
- Insérer les fichiers blog_db.sql et blog_data.sql dans MySQL ( fichiers dans le repertoire SQL )
- Configurer le fichier Bootstrap.php avec vos identifiants de base de données