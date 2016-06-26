#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

cd /home/vagrant/animecenter
composer install --no-ansi --no-interaction --no-progress --optimize-autoloader
cp .env.example .env
php artisan key:generate
php artisan migrate --seed --env=local
sudo npm install -g npm gulp --no-color --progress=false
npm install --no-bin-links --no-color --progress=false --silent
npm rebuild --no-bin-links --no-color --progress=false
rm -rf node_modules/.*.DELETE node_modules/.staging node_modules/.bin
