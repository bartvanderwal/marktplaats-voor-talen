#!/bin/sh
docker context use onstage
docker compose -f docker-compose.prod.yml up -d
docker cp plugins/onstage/ onstagewordpress-wordpress-1:var/www/html/wp-content/plugins/onstage/
docker cp themes/onstage/ onstagewordpress-wordpress-1:var/www/html/wp-content/themes/onstage/
docker context use default