# Big Project Guardia_1 2022/2023

Bonjour, dans ce README, je vais vous expliquer comment refaire mon projet de A à Z.

Ce README fera office de doc technique.


## Création du serveur Ubuntu avec Apache2

_Nous créerons le serveur dans une machine virtuelle._

Ici nous utiliseront VirtualBox (abrévié VBox).

Premièrement téléchargez un fichier image .iso de votre distribution linux préférée (nous utiliseront Ubuntu Server 22.04.2)

Ensuite créez une nouvelle machine virtuelle avec VBox et le fichier .iso téléchargé.

Le setup est plutôt intuitif nous passerons donc rapidement à l'étape suivante.

Connectez vous à votre machine et mettez la à jour à l'aide des commandes suivantes : ``sudo apt update`` puis ``sudo apt upgrade``.

Une fois le système à jour vous pouvez télécharger les modules Apache2, PHP et MySQL.
Les fichier de votre site se trouverons normalement à l'adresse ``~/var/www/html``

/!\ Faites bien attention à retenir les identifiants de votre base de donnée MySQL lorsque vous la setupez /!\


## Création du Site Web

La création du site se divisera en plusieurs petites parties : Framework CSS, contenu HTML/PHP et le SQL. 

---
### CSS Framework
Nous utiliseront BootStrap comme framework CSS.

Je vous laisse vous référer au site officiel et aux tutoriels et exemples présent sur leurs site.

[Bootstrap](https://getbootstrap.com/)

Pour faire simple nous utiliseront les éléments de base fournit par ce framework tel que les _Navbar_, les _Footers_ et les _Cards_


---
### HTML/PHP

Notre site et ses éléments vont être répartis entre plusieurs fichiers notamment la barre de navigation et le footer qui feront l'objet d'un import en PHP.  

La création du site est très simple et rudimentaire, mais cela suffit amplement pour l'utilité que l'on en a.

---
### SQL et Base de données

La base de donnée est très simple elle aussi, il s'agit d'une base de donnée qui stockera les avis des utilisateurs pour le livre d'or

elle se compose d'une table `user`, qui elle même se compose de quatres colonnes, `id` qui stockera l'id du message et qui servira de clé primaire, `usernameavis` qui sert a stocker le username, `emailavis` qui sert a stocker l'email de la personne émettant l'avis pour procéder à une supression si demandé et `texteavis` qui sert à stocker le corps du message. 


# Conclusion

Ce projet m'a permis de mettre en commun toutes mes compétences vues depuis le début de l'année, c'est un bon rappel et une bonne expérience.
