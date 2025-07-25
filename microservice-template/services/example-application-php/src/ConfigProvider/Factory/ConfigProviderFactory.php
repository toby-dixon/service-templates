<?php

namespace ApplicationName\ConfigProvider\Factory;

use ApplicationName\ConfigProvider\ConfigProvider;
use Psr\Container\ContainerInterface;

class ConfigProviderFactory
{
    public function __invoke(ContainerInterface $container): ConfigProvider {
        $moduleConfig = require __DIR__ . '/../../../config/module.config.php';

        return new ConfigProvider(
            $moduleConfig["logFile"],
            $moduleConfig["logLevel"],
            $moduleConfig["loggerName"],
            $moduleConfig["basePath"],
        );
    }
}