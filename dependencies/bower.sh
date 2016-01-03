#!/bin/bash
cd /var/www
sudo chmod -R 777 /var/www/public/
sudo bower install --allow-root
rm -Rf ./html
mv public html