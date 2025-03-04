# Adoptez une architecture MVC en PHP

Voici le site qui sert de support au cours **Adoptez une architecture MVC en PHP**. À partir de ce dépôt, vous pourrez récupérer le code source, situé dans le dossier `blog/`, à chaque étape de l'avancement du projet.

Ce document vous fournira aussi quelques astuces et informations sur la manière d'installer le projet.



## Installation

### Prérequis

Tout d'abord, ce projet est fait pour fonctionner avec les dernières versions de PHP (actuellement `^8.0`). Il vous faudra donc l'installer sur votre machine.

De plus, ce projet nécessite l'utilisation d'une base de données MySQL. Vous devrez donc installer ET configurer votre base de données, et créer un utilisateur. Par défaut, l'application utilise une base de données dénommée `blog`, accessible à un utilisateur `root` dont le mot de passe est ``.

### Configuration

Une fois que vous avez installé votre serveur MySQL, vous pouvez remplacer les identifiants utilisés dans le code par les votre. Dans le fichier `blog/src/model.php`, à la ligne 5 :

```php
$database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog', 'password');
```

Vous devriez aussi remplir votre base de données. Vous pouvez charger le schéma par défaut (et quelques données), contenu dans le fichier `db.sql`. Pour ce faire, vous pouvez utiliser votre interface d'administration MySQL, ou bien lancer la commande suivante, si vous êtes sous Linux :

```bash
mysql -ublog -p blog < db.sql
```

### Lancement

Vous pouvez utiliser le serveur web intégré à PHP pour lancer ce projet. Placez vous dans le dossier `blog/`, puis lancez la commande `php -S localhost:8080` (vous pouvez choisir le port que vous souhaitez si `8080` est déjà utilisé).

Alternativement, et si vous avez une _stack_ WAMP ou LAMP installée, vous pouvez configurer votre serveur Apache pour qu'il gère le dossier `blog/`.
