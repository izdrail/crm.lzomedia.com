#!/bin/sh
# Makefile for news.ai
build:
	docker build -t cornatul/news.ai:latest --progress=plain .
build-fresh:
	docker build -t cornatul/news.ai:latest --no-cache --progress=plain .
up:
	docker-compose up -d
stop:
	docker-compose down
restart-horizon:
	docker exec -it app_server supervisorctl restart laravel-horizon:*
push:
	docker push cornatul/news.ai:latest
watch:
	npm run watch
frontend:
	npm run production
