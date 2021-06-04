# PHP 8 sandbox project with docker-compose

## Start

- Set the MySQL environment variables creating a `.env` file based on the `.env.example` file.

- Build the app image:
```bash
make build
```

- Start backend:
```bash
make up
```

- Shut down backend:
```bash
make down
```

## Commands in project root (./)
- Restart backend
```bash
make restart
```

- Backend bash
```bash
make sh
```

- Build frontend
```bash
make build-front
```

- Restart nginx
```bash
make nginx-restart
```

## Commands in frontend directory (./frontend)
- Build frontend
```bash
make build
```

- Start virtual server for frontend (vue-cli-service serve)
```bash
make serve
```
