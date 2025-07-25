<?php

use ApplicationName\ConfigProvider\ConfigProvider;
use ApplicationName\ConfigProvider\Factory\ConfigProviderFactory;
use ApplicationName\Service\LoggerService\Factory\LoggerServiceFactory;
use ApplicationName\Service\LoggerService\LoggerService;
use DI\Definition\Helper\FactoryDefinitionHelper;
use function DI\factory;

function factoryFrom(string $factoryClass): FactoryDefinitionHelper {
    return factory([$factoryClass, '__invoke']);
}

return [
    LoggerService::class => factoryFrom(LoggerServiceFactory::class),
    ConfigProvider::class => factoryFrom(ConfigProviderFactory::class),
];