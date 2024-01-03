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
# cd app/
# composer install
# npm / yarn install 
# docker compose -f docker-compose.dev.yml up
``````

### Connection aux containeurs
```console
# docker exec -it docker-symfony-php-1 sh
# docker exec -it docker-symfony-node-1 sh
# docker exec -it mysql_db sh
# mysql -p
# symfony console doctrine:database:create
# symfony console doctrine:migration:migrate
``````

### Création de la base de données locale
```  docker exec -it mysql_db sh ```

```  mysql -p  ``` 

```symfony console doctrine:database:create```

```symfony console doctrine:migration:migrate```


### Fonctionnement du framwork 
![Kernel Symfony](./doc/Kernel%20Synfony.png "Kernel Symfony")


### Debug
```console
    dans le container php 
    cd /app
    symfony console
``````
