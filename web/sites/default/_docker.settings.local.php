<?php

/**
 * Add development service settings.
 */
if (file_exists(__DIR__ . '/../development.services.yml')) {
  $settings['container_yamls'][] = __DIR__ . '/../development.services.yml';
}

/**
 * Disable CSS and JS aggregation.
 */
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

/**
 * Disable caching.
 */
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';

/**
 * Set hash salt.
 */
$settings['hash_salt'] = '1234';

/**
 * Set private files path.
 */
$settings['file_private_path'] = '../private-files';

/**
 * Set trusted host pattern.
 */
$settings['trusted_host_patterns'] = [
  '^project-database\.local\.itkdev\.dk$',
  '^127\.0\.0\.1$',
  '^0\.0\.0\.0$',
];
