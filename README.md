# Project database
A drupal backend that exposes projects created with an API.
## Installation instructions
Setup Docker environment (Optional):
```
itkdev-docker-compose up -d
```
Get php packages
```
itkdev-docker-compose composer install
```
Setup local site configuration:
```
cp web/sites/default/_docker.settings.local.php web/sites/default/docker.settings.local.php
```
Install site:
```
itkdev-docker-compose vendor/bin/drush site-install minimal --existing-config -y
```

## Api documentation
```
admin/config/services/openapi/redoc/jsonapi
```
