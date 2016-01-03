#!/bin/bash
apt-get update
apt-get install apache2 php5 libapache2-mod-php5 -y 
apt-get install build-essential libssl-dev -y
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
curl https://raw.githubusercontent.com/creationix/nvm/v0.16.1/install.sh | sh
source ~/.bashrc
nvm install v0.12.7
nvm alias default v0.12.7
nvm use default
npm install -g bower