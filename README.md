# Debian9 - Benchmark web server - Static & dynamic website
<strong style="color:black">Hello guys</strong>

<p align="center">
  <img src="http://vpn-services.bestreviews.net/files/dynamic-vs-static-ip.jpg"/>
</p>

## Why ?

HTTP server, among the best known:

- Apache,
- Nginx

Selon moi nous devons comparer ces deux logiciels qui peuvent etres des piliers pour notre business (e-commerce, etc). Lequel des deux est meilleur ?

### I. Mise en place du projets

1) Cloner le projet :
```bash 
$ git clone git@github.com:Y0D4RK/d9_static_dynamic.git
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
Ouvrez votre navigateur et accéder à l'URI<strong> [localhost](localhost:8000) </strong> dans votre navigateur.

