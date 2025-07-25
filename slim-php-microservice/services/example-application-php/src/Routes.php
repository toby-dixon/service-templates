<?php
namespace ApplicationName;

use ApplicationName\ConfigProvider\ConfigProvider;
use ApplicationName\Controller\ExampleController;
use Psr\Container\ContainerInterface;
use Slim\App;

return function (App $app, ContainerInterface $container) {
    /** @var ConfigProvider $configProvider */
    $configProvider = $container->get(ConfigProvider::class);

    $basePath = $configProvider->getBasePath();
    $app->get($basePath . "/", [ExampleController::class, "exampleControllerMethod"]);
};