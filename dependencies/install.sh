#!/bin/bash
yum update
yum install httpd php5 libapache2-mod-php5 gcc gcc-c++ make -y
yum install nodejs npm --enablerepo=epel -y
npm install -g bower
