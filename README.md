# Project database

A drupal backend that exposes projects created with an API.

## Installation instructions

### Production

Deploy using the server Docker Compose override:

```sh
docker compose --file docker-compose.yml --file docker-compose.server.yml up --detach
```

Set `COMPOSE_SERVER_DOMAIN` in `.env` (or `.env.local`) to the production domain.

This project follows the itk-dev [`drupal-11` Docker
template](https://github.com/itk-dev/devops_itkdev-docker) and runs on PHP 8.4.

### Development

Setup Docker environment:

```sh
docker compose up --detach
```

Setup local site configuration:

```sh
cp web/sites/default/_docker.settings.local.php web/sites/default/docker.settings.local.php
```

Install php packages:

```sh
docker compose exec phpfpm composer install
```

Install site:

```sh
docker compose exec phpfpm vendor/bin/drush site:install minimal --existing-config --yes
```

Sign in as admin (the site uri is provided to Drush via `DRUSH_OPTIONS_URI`):

```sh
docker compose exec phpfpm vendor/bin/drush user:login
```

The site is served through Traefik at <https://project-database.local.itkdev.dk>.

## Api documentation

```sh
admin/config/services/openapi/redoc/jsonapi
```

## Handle CORS

Create the file `web/sites/default/services.yml` with the following content:

```yml
parameters:
  # Configure Cross-Site HTTP requests (CORS).
  # Read https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS
  # for more information about the topic in general.
  # Note: By default the configuration is disabled.
  cors.config:
    enabled: true
    # Specify allowed headers, like 'x-allowed-header'.
    allowedHeaders: ['content-type', 'authorization']
    # Specify allowed request methods, specify ['*'] to allow all possible ones.
    allowedMethods: ['GET']
    # Configure requests allowed from specific origins.
    allowedOrigins: ['*']
    # Sets the Access-Control-Expose-Headers header.
    exposedHeaders: false
    # Sets the Access-Control-Max-Age header.
    maxAge: false
    # Sets the Access-Control-Allow-Credentials header.
    supportsCredentials: false
```
