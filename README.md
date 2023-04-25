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

---
### SQL et Base de données



# Conclusion
