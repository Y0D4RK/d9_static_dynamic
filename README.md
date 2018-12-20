# Debian9 - Static & dynamic website - Benchmark
<strong style="text-algin: center; color:black">WELCOME</strong>

<p align="center">
  <img src="http://vpn-services.bestreviews.net/files/dynamic-vs-static-ip.jpg"/>
</p>

## Why ?

HTTP server, among the best known:

- Apache,
- Nginx

According to me we have to compare these two softwares which can be pillars for our business (e-commerce, etc). Which one is better?

### I. Implementation

1) Clone project :
```bash 
$ git clone git@github.com:Y0D4RK/d9_static_dynamic.git
```

### II. Static project

This project (*static* folder) contain only HTML,CSS,Javascript and images files.


### III. Dynamic project - with Symfony 3.4

a) Go to the folder *dynamic*: 
```bash
$ cd dynamic
```
b) Then install vendor:
```bash
$ composer install
```
c) Execute application:
```bash
$ php bin/console server:run
```
d) Watch:
Open your browser and go to the URI <strong>[localhost](localhost:8000)</strong>.

