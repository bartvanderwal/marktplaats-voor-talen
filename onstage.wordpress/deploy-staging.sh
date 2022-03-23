#!/bin/sh
docker context use onstage
docker compose -f docker-compose.prod.yml up -d
docker cp ./onstage-plugin/ onstagewordpress-wordpress-1:var/www/html/wp-content/plugins/onstage/
docker cp ./onstage-theme/ onstagewordpress-wordpress-1:var/www/html/wp-content/themes/onstage/
docker cp ./uploads/ onstagewordpress-wordpress-1:var/www/html/wp-content/uploads/

docker context use default