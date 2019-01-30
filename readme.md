# Shoply Server

This repo contains the source code for the shoply backend.\
It uses Laravel.

## Installation Guide

Clone the repo
```
git clone https://github.com/zerofairnight/shoply-server.git
```

cd into the directory

```
cd shoply-server
```

Create the .env file
```
cp .env.example .env
```

Intall composer
```
composer install
```

Prepare the laravel application
```
php artisan key:generate
php artisan jwt:secret
```