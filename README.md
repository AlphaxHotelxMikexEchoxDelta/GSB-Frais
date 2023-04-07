# GSB-Frais
Application web realiser avec [Symfony](https://symfony.com) ( [__Projet GSB__](https://github.com/AlphaxHotelxMikexEchoxDelta/GSB-Projet) )

## Installation des ressources

``` bash
apt install php php-xml php-mysql
```
``` bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```
``` bash
curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
sudo apt install symfony-cli
```

## Installation de l'application

``` bash
symfony composer update
```

## Lancer l'application avec ```symfony server:start```
