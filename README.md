# Instalación del proyecto.

Una vez descargado el proyecto haciendo git clone se deben descargar los modos los composer.
```=bash
composer install
```
Luego hay que configurar nuestro propio archivo .env de forma local
```=bash
cp .env.example .env
```
y para terminar generar nuestra key de proyecto de forma local.
```=bash
php artisan key:generate
```
Para comprobar que todo funciona correctamente corremos el servidor
```=bash
php artisan serve
```
Al hacer todo esto estamos listos para trabajar de forma colaborativa en un proyecto de laravel en git.