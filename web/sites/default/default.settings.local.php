<?php

// Docksal DB connection settings.
$databases['default']['default'] = array (
  'database' => 'default',
  'username' => 'user',
  'password' => 'user',
  'prefix' => '',
  'host' => 'db',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

/**
 * Disable CSS and JS aggregation.
 */
$config['system.performance']['css']['preprocess'] = false;
$config['system.performance']['js']['preprocess'] = false;
