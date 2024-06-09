
# Docker Laravel Setup with PHP 8.2

### Step by step
Clone Repository
```sh
git clone https://github.com/willamelions/crud-produto.git app
```
```sh
cd app
```


Create the file .env
```sh
cp .env.example .env
```


Update file environment variables .env
```dosini
APP_NAME=app
APP_URL=http://localhost:8001

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

```


Load project containers
```sh
docker-compose up -d
```


Access the container app
```sh
docker-compose exec app bash
```


Install project dependencies
```sh
composer install
```


Generate Laravel project key
```sh
php artisan key:generate
```


Access the project
[http://localhost:8001](http://localhost:8001)
