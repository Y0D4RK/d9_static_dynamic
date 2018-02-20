# Moving Mate - Web App
Bienvenue dans <strong style="color:black">Moving Mate</strong> - Créé sous Symfony 3.3.10

<p align="center">
  <img src="http://www.xlwlx.fr/images/logo_M.png"/>
</p>

## Quoi de neuf ?

Symfony contient un certain nombre de bundle de base, à cela s'ajoute pour le moment les bundles ci-dessous:

- FosUserBundle (packagist: gestion des user),
- VichUploader (packagist: gestion upload image),
- FosJsRouting (packagist: gestion des routes js),
- ... d'autre vont s'ajouter (JWT, fosrest, ...),
 
- UserBundle (perso: il override FosUser),


## Executer l'application

### A. Mise en place du projets
1) Cloner le projet :
```bash 
$ git clone git@gitlab.com:victorgarciaparis13/MovingMate.git 
```

2) Entrer dans le dossier du projet :
```bash
$ cd MovingMate
```

3) Executer l'installation des bundles via composer puis renseigner les informations :
```bash
$ composer install
```

### B. Generate SSH keys for JWT
```bash
$ mkdir var/jwt
```
```bash
$ openssl genrsa -out var/jwt/private.pem -aes256 4096
```
```bash
$ openssl rsa -pubout -in var/jwt/private.pem -out var/jwt/public.pem
```

### C. Puis poursuivre l'installation 
4) Lancer les commandes suivantes: 
```bash
$ alias sf3='php bin/console'
```
```bash
$ sf3 doctrine:schema:update --force {sf3 doctrine:schema:create}
```
```bash
$ sf3 assets:install web
```
```bash
$ sf3 server:run
```
5) Vous pouvez vous connecter à l'adresse suivante <strong> [localhost](localhost:8000) </strong> dans votre browser.

# Documentation

[Documentation ici](DOC.md)

