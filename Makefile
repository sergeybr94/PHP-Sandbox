up:
	docker-compose up -d
down:
	docker-compose down -v
sh:
	docker-compose exec app bash
restart: down up
nginx-restart:
	docker-compose restart nginx
nginx-logs:
	docker-compose logs nginx
nginx-sh:
	docker-compose exec nginx /bin/sh