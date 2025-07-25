<?php

namespace ApplicationName\Service\LoggerService;

use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

/**
 * Wrapper service for monolog logger
 */
class LoggerService
{

    protected Logger $logger;

    public function __construct(string $loggerName = "logger", Level $loglevel = Level::Info)
    {
        $this->logger = new Logger($loggerName);
        $this->logger->pushHandler(new StreamHandler(getenv('LOG_FILE'), $loglevel));
        $this->logger->pushHandler(new FirePHPHandler($loglevel));
    }


    /**
     * Wrapper for monolog debug method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function debug(string $msg, array $context): void
    {
        $this->logger->debug($msg, $context);
    }
    /**
     * Wrapper for monolog info method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function info(string $msg, array $context): void
    {
        $this->logger->info($msg, $context);
    }
    /**
     * Wrapper for monolog notice method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function notice(string $msg, array $context): void
    {
        $this->logger->notice($msg, $context);
    }
    /**
     * Wrapper for monolog warning method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function warning(string $msg, array $context): void
    {
        $this->logger->warning($msg, $context);
    }
    /**
     * Wrapper for monolog error method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function error(string $msg, array $context): void
    {
        $this->logger->error($msg, $context);
    }
    /**
     * Wrapper for monolog critical method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function critical(string $msg, array $context): void
    {
        $this->logger->critical($msg, $context);
    }
    /**
     * Wrapper for monolog alert method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function alert(string $msg, array $context): void
    {
        $this->logger->alert($msg, $context);
    }
    /**
     * Wrapper for monolog emergency method
     * @param string $msg
     * @param array $context
     * @return void
     */
    public function emergency(string $msg, array $context): void
    {
        $this->logger->emergency($msg, $context);
    }
}