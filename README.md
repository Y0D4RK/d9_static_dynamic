# Debian9 - Website statique & dynamique
Bienvenue dans <strong style="color:black">Debian 9</strong>

<p align="center">
  <img src="http://vpn-services.bestreviews.net/files/dynamic-vs-static-ip.jpg"/>
</p>

## Pourquoi ?

Le web contient un certain nombre d'application propre à la réalisation d'un serveur HTTP, parmi les plus connus:

- Apache (packagist: gestion des user),
- Nginx  (packagist: gestion upload image),
- ...

## Executer l'application

### A. Mise en place du projets

1) Cloner le projet :
```bash 
$ git clone git@gitlab.com:victorgarciaparis13/MovingMate.git 
```

### B. Projet statique

Celui-ci ne contient que du HTML, CSS, Javascript et images.
Le serveur n'execute pas de code pour génerer le HTML.

### C. Projet dynamique 

1) Entrer dans le dossier: 
```bash
$ cd dynamic
```
2) Puis installer les vendors:
```bash
$ composer install
```
3) Executer l'application (Symfony):
```bash
$ php bin/console server:run
```
4) Acceder à l'interface:
Ouvrez votre navigateur et accéder à l'URI<strong> [localhost](localhost:8000) </strong> dans votre browser.

# La documentation (Nelmio)

[Documentation ici](DOC.md)

