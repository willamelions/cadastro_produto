# Docker Laravel Setup with PHP 8.2

###Passo a passo###
------ Clone Repositorio -----

1º ````sh
git clone https://github.com/willamelions/crud-produto.git app
```

2º````sh
cd app
```



------Crie o arquivo .env-----
3º```sh
cp .env.example .env
```



-----Atualizar variáveis ​​de ambiente de arquivo .env-----
4º```dosini
APP_NAME=app
APP_URL=http://localhost:8001

-----5º CONFIGURAÇÃO BD-----
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

```



-----Carregar contêineres de projeto-----
7º```sh
docker-compose up -d
```


-----Acesse o aplicativo contêiner-----
8º```sh
docker-compose exec app bash
```



-----Instalar dependências do projeto-----
9°```sh
composer install
```



########Gerar chave do projeto Laravel########
10º```sh
php artisan key:generate
```



11º Acessar o projeto
[http://localhost:8001](http://localhost:8001)# s
 
 
