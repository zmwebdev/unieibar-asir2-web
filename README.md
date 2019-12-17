# unieibar-asir2-web

## Azpiegitura

Ubuntu server 18 (Apache + PHP + MySQL-MariaDB)

[Visual code]<---ssh---->[Ubuntu]

```
#ubuntu
apt update
apt install openssh-server

# Maria DB
apt install mariadb-server

# PHP apache
add-apt-repository ppa:ondrej/php
apt install php7.3 libapache2-mod-php7.3 php-mysql

# git
apt install git
```

vscode install extension: Visual Studio Code Remote Development Extension Pack

```
cd
mkdir workspace
cd /var/www/html
sudo ln -s ~/workspace workspace
#
cd
cd workspace
#cd ~/workspace
git clone ...
```

PHP erroreak ikusteko:
```
tail -f /var/log/apache2/error.log
```

## PHP

- https://www.w3schools.com/php/
- https://github.com/zmwebdev/php-examples

## XAMPP

- https://www.apachefriends.org/index.html


## Visual Code

- https://code.visualstudio.com/

## gitpod
- https://gitpod.io#
- https://www.gitpod.io/blog/gitpodify/

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/zmwebdev/unieibar-asir2-web)

```
$ php -S 0.0.0.0:8000
```
