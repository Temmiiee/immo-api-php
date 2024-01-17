# Slim 4 API

Simple API using Slim v4 MySQL and optionnaly S3 Storage

## Run

- Create `.env` from `.env.exemple`
    - the S3 variables are optionnal
- Update environment variable 

        docker exec -it  immo-api-php-immo-api-php-1 bash
        composer install
- run `php -S localhost:8080 -t ./public`
    - don't forget to change the port if you edited the docker-compose.yml
- Now going to localhost:8080 should send you a "Hello world" message.
