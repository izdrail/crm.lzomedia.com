#!/bin/sh
build:
	docker build -t cornatul/news.ai:latest --progress=plain .
build-fresh:
	docker build -t cornatul/news.ai:latest --no-cache --progress=plain .
up:
	docker-compose up
stop:
	docker-compose down
restart-horizon:
	docker exec -it app_server supervisorctl restart all
