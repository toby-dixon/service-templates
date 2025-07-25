<?php

namespace ApplicationName\Controller;

use ApplicationName\Service\LoggerService\LoggerService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ExampleController
{
    public function __construct(
        protected LoggerService $logger,
    ) {}

    public function exampleControllerMethod(Request $request, Response $response, array $args): Response {
        $this->getLogger()->info("Example controller method accessed", []);

        $response->getBody()->write(json_encode([
            "ping" => "pong"
        ]));
        return $response->withHeader("Content-Type", "application/json");
    }

    public function getLogger(): LoggerService
    {
        return $this->logger;
    }

    public function setLogger(LoggerService $logger): ExampleController
    {
        $this->logger = $logger;
        return $this;
    }
}