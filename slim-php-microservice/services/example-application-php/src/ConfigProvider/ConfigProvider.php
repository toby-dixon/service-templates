<?php

namespace ApplicationName\ConfigProvider;

class ConfigProvider
{
    public function __construct(
        protected string $logFile,
        protected string $logLevel,
        protected string $loggerName,
        protected string $basePath,
    ) {
    }

    /**
     * @return string
     */
    public function getLogFile()
    {
        return $this->logFile;
    }

    /**
     * @param string $logFile
     * @return ConfigProvider
     */
    public function setLogFile($logFile)
    {
        $this->logFile = $logFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogLevel()
    {
        return $this->logLevel;
    }

    /**
     * @param string $logLevel
     * @return ConfigProvider
     */
    public function setLogLevel($logLevel)
    {
        $this->logLevel = $logLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoggerName()
    {
        return $this->loggerName;
    }

    /**
     * @param string $loggerName
     * @return ConfigProvider
     */
    public function setLoggerName($loggerName)
    {
        $this->loggerName = $loggerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     * @return ConfigProvider
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
        return $this;
    }

}