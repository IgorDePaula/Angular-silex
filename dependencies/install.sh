#!/bin/bash
apt-get update
apt-get install apache2 php5 libapache2-mod-php5 -y
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer