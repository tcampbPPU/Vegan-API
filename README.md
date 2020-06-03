## Docker commands use for app
#### Starting & Tearing Containers
> docker-compose up -d --build

> docker-compose down

#### Commands Once Running
> docker-compose run --rm composer update

> docker-compose run --rm npm run dev

> docker-compose run --rm artisan migrate


### Active Docker Ports & Services
nginx - :8080
mysql - :3306
php - :9000
phpmyadmin - :808
npm
composer
artisan