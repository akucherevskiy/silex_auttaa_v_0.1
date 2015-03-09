<?php

require('../vendor/autoload.php');
require('bootstrap.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {

  $app['monolog']->addDebug('logging output.');
  return 'Hello user!';
});

$app->run();
