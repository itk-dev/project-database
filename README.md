# Project database

A drupal backend that exposes projects created with an API.

## Installation instructions

### Production

@TODO

### Development

Setup Docker environment:

```sh
docker-compose up -d
```

Setup local site configuration:

```sh
cp web/sites/default/_docker.settings.local.php web/sites/default/docker.settings.local.php
```

Install php packages:

```sh
docker-compose exec phpfpm composer install
```

Install site:

```sh
docker-compose exec phpfpm vendor/bin/drush site-install minimal --existing-config --yes
```

Sign in as admin:

```sh
docker-compose exec phpfpm vendor/bin/drush --uri=http://$(docker-compose port nginx 80) user:login
```

#### Using Symfony Local Web Server

See [Symfony Local Web
Server](https://symfony.com/doc/current/setup/symfony_server.html) for details.

```sh
docker-compose up -d
symfony composer install
symfony php vendor/bin/drush site-install minimal --existing-config --yes
symfony local:server:start --daemon
# Update the uri to the actual address of the running web server.
symfony php vendor/bin/drush --uri=https://127.0.0.1:8000 user:login
```

## Api documentation

```sh
admin/config/services/openapi/redoc/jsonapi
```
