# Docker Laravel Setup with PHP 8.2

### Step by step
Clone Repository

```sh
git clone https://github.com/willamelions/crud-produto.git app
```

```sh
cd app
```



Crie o arquivo .env
```sh
cp .env.example .env
```



Atualizar variáveis ​​de ambiente de arquivo .env
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



Carregar contêineres de projeto
```sh
docker-compose up -d
```


Acesse o aplicativo contêiner
```sh
docker-compose exec app bash
```



Instalar dependências do projeto
```sh
composer install
```



Gerar chave do projeto Laravel
```sh
php artisan key:generate
```



Acessar o projeto
[http://localhost:8001](http://localhost:8001)# s
 
 
