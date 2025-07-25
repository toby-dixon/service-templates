# Example application

This contains a basic slim 4 template, with an nginx container to serve it.

## Setup

This is only required if you want to change the names of the services.

1. in `services/example-application-php`
    1. In composer.json, modify references to application-name or ApplicationName
        - PSR4 autoload namespace, project name
    2. In project files (public, src, config) - Make sure to update any namespaces to reference the new PSR4 autoload
       namespace.
2. in `docker-compose/...-docker-compose.yml`
    - Update container names, volumes, etc... to have suitable service names.
    - Make note of the `container_name` you choose for the php container as you will need this when configuring nginx.
3. in `services/example-application-nginx`
   - Update `root` to point to the correct directory (assuming you changed the name of the php folder)
   - Update `fastcgi_pass` to point to the php containers name.

## Run

From the project root, run:
```bash
docker compose -f docker-compose/development-docker-compose.yml up --build
```

## Usage
An example http request can be found in `http-tests/example-application.http`