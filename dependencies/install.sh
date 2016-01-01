#!/bin/bash
apt-get install apache2 php5 libapache2-mod-php5
apt-get update
apt-get install build-essential libssl-dev
curl https://raw.githubusercontent.com/creationix/nvm/v0.17.2/install.sh | sh
source ~/.profile
nvm install v0.12.7
nvm use v0.12.7
nvm alias default v0.12.7
npm install -g bower