#!/bin/bash
apt-get update
apt-get install apache2 php5 libapache2-mod-php5 gcc g++ make git git-core clang-3.4 clang++-3.4 -y 
apt-get install build-essential libssl-dev -y
a2enmod rewrite
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
curl -sL https://deb.nodesource.com/setup_4.x | bash -
apt-get install -y nodejs
chmod -R 777 /var/www/public
npm install -g bower