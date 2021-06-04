.PHONY: build-back build-front build up down restart sh nginx-restart nginx-logs nginx-sh
build-back:
	docker-compose build app
build-front:
	cd ./frontend/; make install; make build
build: build-back build-front

up:
	docker-compose up -d
down:
	docker-compose down -v

restart: down up

sh:
	docker-compose exec app bash

nginx-restart:
	docker-compose restart nginx
nginx-logs:
	docker-compose logs nginx