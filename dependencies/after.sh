#!/bin/bash
cd /var/www
rm -Rf ./html
mv public html
service apache2 start
composer install