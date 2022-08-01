## Docker com php, apache, mysql com Lumen

> Instalar Ambiente Docker

**Pré requisitos:** Docker e Docker Compose

```bash
# Criar e levantar os containers
docker-compose up -d

# Iniciar o container Docker
docker-compose start

# Parar o container Docker
docker-compose stop

# Parar e remover containers da máquina
docker-compose down
```

**Acesso localhost**
```txt
http://localhost:4500
```

> Instalar o Lumen

**Pré requisitos:** Composer

```bash
# abrir pasta api
cd api

# instalar o lumen
composer install

# instalar banco de dados
php artisan migrate
```