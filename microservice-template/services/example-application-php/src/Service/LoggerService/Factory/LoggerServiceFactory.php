<?php

namespace ApplicationName\Service\LoggerService\Factory;

use ApplicationName\ConfigProvider\ConfigProvider;
use ApplicationName\Service\LoggerService\LoggerService;
use Monolog\Level;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class LoggerServiceFactory
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container): LoggerService
    {
        /** @var ConfigProvider $configProvider */
        $configProvider = $container->get(ConfigProvider::class);

        return new LoggerService($configProvider->getLoggerName(), Level::fromName($configProvider->getLogLevel()));
    }
}