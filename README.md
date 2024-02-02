# Projet TP – Festival de musique

Fichiers du site web Festival de musique

## Où se trouve la BDD ?

J'ai fourni un dump de la BDD afin de visualiser son état : [thunderdome24.sql](https://github.com/etil2jz/app-web-TP-I3/blob/main/thunderdome24.sql)

## Pourquoi le PHP ne fonctionne pas sur la Pages GitHub ?

GitHub fournit via son service Pages un accès statique au site web.  
Cependant, il est impossible de faire héberger une base de données et de faire exécuter du PHP par GitHub.  
Une solution serait de cloner le dépôt et d'héberger un LAMP en local ainsi que d'importer le dump de la BDD pour vérifier.  
Il se peut que les identifiants de connexion situés dans [connexion.php](https://github.com/etil2jz/app-web-TP-I3/blob/main/connexion.php) varient pour vous.
