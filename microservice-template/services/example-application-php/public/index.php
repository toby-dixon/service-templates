<?php

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require __DIR__ . "/../vendor/autoload.php";

$builder= new ContainerBuilder();
$builder->addDefinitions(require __DIR__ . "/../config/dependencies.php");

$container = $builder->build();

$app = AppFactory::createFromContainer($container);

$app->addBodyParsingMiddleware();

$routes = require __DIR__ . "/../src/Routes.php";
$routes($app, $container);

$app->run();


