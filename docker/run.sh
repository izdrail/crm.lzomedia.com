#!/bin/sh
cd /var/www
# php artisan migrate:fresh --seed
php artisan cache:clear
echo "Trying"
/usr/bin/supervisord -c /etc/supervisord.conf
