# Debian9 - Website statique & dynamique
Bienvenue dans <strong style="color:black">mon environnement de benchmark</strong>

<p align="center">
  <img src="http://vpn-services.bestreviews.net/files/dynamic-vs-static-ip.jpg"/>
  <p> TOTO </p>
</p>

## Pourquoi ?

Le web contient un certain nombre d'application propre à la réalisation d'un serveur HTTP, parmi les plus connus:

- Apache (packagist: gestion des user),
- Nginx  (packagist: gestion upload image),
- ...

Selon moi, nous nous devons de comparer ces deux applications, qui peuvent etre le coeur du business (e-commerce, etc).

Les 2 websites sont là pour effectuer un BENCHMARK.

### I. Mise en place du projets

1) Cloner le projet :
```bash 
$ git clone git@gitlab.com:victorgarciaparis13/MovingMate.git 
```

### II. Projet statique

Celui-ci ne contient que du HTML, CSS, Javascript et images.
Le serveur n'execute pas de code pour génerer le HTML.

### III. Projet dynamique 

a) Entrer dans le dossier: 
```bash
$ cd dynamic
```
b) Puis installer les vendors:
```bash
$ composer install
```
c) Executer l'application (Symfony):
```bash
$ php bin/console server:run
```
d) Acceder à l'interface:
Ouvrez votre navigateur et accéder à l'URI<strong> [localhost](localhost:8000) </strong> dans votre browser.


