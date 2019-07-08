# Symfony Mercure
Example how to get up and running with symfony mercure

## Install Symfony
docker run --rm -it -v $PWD:/app composer create-project symfony/website-skeleton symfony_mercure
docker run --rm -it -v $PWD:/app composer remove doctrine
docker run --rm -it -v $PWD:/app composer remove mailer

## Install the Mercure component
docker run --rm -it -v $PWD:/app composer require mercure

## Run the infrastructure
docker-compose up

## Test the mercure hub
```
curl --request POST \
   --url http://localhost:9090/hub \
   --header 'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZXJjdXJlIjp7InN1YnNjcmliZSI6W10sInB1Ymxpc2giOlsiKiJdfX0.iTVjHoLv9bB-O5RNnTtzOFxIW-YECk2JXZeMekZ4GwA' \
   --header 'content-type: application/x-www-form-urlencoded' \
   --data topic=1e9 \
   --data 'data={
 	"headline": "What a nice conf."
 }'
 ```
 
 Demo UI: http://localhost:9090/

## Todo
- Create a client controller: `php bin/console make:controller`
- Create a publisher controller to publish content