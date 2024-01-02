# Dockerisation d'une application Symfony
version 7.0.* - https://symfony.com/doc/current/index.html
> déc. 2023

| services  |  version | link  |   |   |
|---|---|---|---|---|
|  php | `latest`  | [Docker Official Image](https://hub.docker.com/_/php/tags?page=1&name=8.3.0) |   |   |
|  mysql |  `8.0`| [Docker Official Image](https://hub.docker.com/_/mysql) |   |   |
|  node |  `lts` | [Docker Official Image](https://hub.docker.com/_/node) |   |   |

### Pour build les container en mode développement

```console
# docker compose -f docker-compose.dev.yml  up
``````



#### Création de la base de données locale

```console
# docker exec -it NOM_CONTENEUR_PHP sh
# docker exec -it php-from-scratch-php-1 sh
# mysql -p
# symfony console doctrine:database:create
# symfony console doctrine:migration:migrate
``````