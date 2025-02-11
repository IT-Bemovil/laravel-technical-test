<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proyecto Laravel de Métodos de Pago

Este proyecto laravel implementa un API para gestionar métodos de pago y sus opciones 

## Requisitos 
* PHP 8.0 ó superior
* Composer
* Base de datos MySQL ó SQLite
* Git

## Instalación 

1. Clona el repositorio (Puede ser Fork)

2. Navega al directorio del proyecto 

3. Instala dependiencias con composer 
  - composer install

4. Configura las variable de entorno
  - Copia el archivo env.example a .env

5. Abre el archivo .env y configura tu base de datos 

6. Migra la base de datos 
  - php artisan migrate

7. Ejecuta los seeders para crear datos de prueba
  - php artisan db:seed --class=PaymentMethodSeeder
  - php artisan db:seed --class=PaymentMethodOptionSeeder

8. Inicia el servidor de desarrollo 
  - php artisan serve

9. La API estará disponible en 
  - http://127.0.0.1:8000/api/

## ENDPOINTS

1. GET /api/payment_methods

2. GET /api/payment_methods/{id}