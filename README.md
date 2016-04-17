Symfony 2.8 + Sonata Admin 2.3 
================

* [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) : Provides user management for your Symfony2 Project. Compatible with Doctrine ORM & ODM, and Propel.

<!-- -->

## Installation

The easiest way to get started is to clone the repository:

```bash
# Get the latest snapshot
$ git clone https://github.com/Neomatt/wawahouse.git
$ cd wawahouse
$ git remote rm origin

#composer install

$composer install

#install assets

$ php app/console assets:install --symlink

#Create schema

$ php app/console doctrine:database:create (si BD pas encore créer -bd name :wawahouse_db)

php app/console doctrine:schema:update --force (demander à Doctrine de créer nos tables de BDD (ou les mettre à jour afin de prendre en compte notre configuration))

$ php app/console doctrine:fixtures:load


## Starter Kit

Go to localhost/wawahouse/web/app_dev.php/admin to access the admin and refer the sonata documentation to create new admin panel.

To fix asset on CSS and JS

use command: composer require symfony/assetic-bundle
