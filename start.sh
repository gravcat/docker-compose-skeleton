#!/usr/bin/env bash

docker rm -f $(docker ps -a -q) 2> /dev/null
set -e

chown -R ivan:ivan ./app
chmod -R 777 ./app
docker-compose kill
docker-compose build
docker-compose up -d

echo "Done!"
