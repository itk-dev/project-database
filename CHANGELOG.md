# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

* [#15](https://github.com/itk-dev/project-database/pull/15)
  Security updates

### Changed

- Upgraded Drupal core 9.3 → 11.3 and contrib to Drupal 11-compatible releases.
- Switched runtime to PHP 8.4; Drush 10 → 13.
- Aligned the development setup with the itk-dev `drupal-11` Docker template
  (docker-compose with healthchecks, `nginx-unprivileged`, Mailpit, GitHub
  Actions workflows and lint configuration).

### Removed

- Removed the abandoned `drupal/console` dependency.
