# Projet de restaurant O Cnamo

ce projet est un site web test pour la formation DevWeb de Cnam.

## Prérequis
-Apache 2.4.54
-MariaDB 10.10.2
-PHP 8.2.0
-Composer 2.6.5
-NodeJS et npm 

## Installation

### Version dev

Il faut d'abord cloner l'application en local :

```
git clone adresse du repo github
```

Ensuite, il faut créer une BDD puis configurer les accès dans le fichier `.env` :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mon_application
DB_USERNAME=mon_application
DB_PASSWORD=123
```

Pour créer les tables et injecter des données de test, vous pouvez utiliser un script bash :

```
./mkdb.sh
```

Vous pouvez donner un nom à l'application dans le fichier `.env` :

```
APP_NAME="Mon Application"
```

## Utilisation

Dans le terminal : 

```
php artisan serve
```

Aller sur la page [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Requêtes SQL utiles

```
-- Liste des catégories et de leurs plats
SELECT categories.id, categories.nom, plats.id, plats.nom
FROM categories
INNER JOIN plats ON categories.id = plats.categories_id
ORDER BY categories.id, plats.nom
```

```
-- Liste des plats et de leurs étiquettes
SELECT etiquettes.id, etiquettes.nom, plats.id, plats.nom
FROM plats
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = plats.id
INNER JOIN etiquettes ON etiquettes_plats.etiquettes_id = etiquettes.id
ORDER BY plats.nom, etiquettes.nom
```

## Recommendations

### Tailles des images d'ambiances

La taille recommandées est :

-Largeur : 1024px
-Hauteur : 768px

Il vaut mieux utiliser des fichiers JPEG car ils sont plus léger.

## Mentions Légales

### Licence du projet

? @TODO

### Droits d'auteur

Toutes les photos du site ont été réalisées par...
