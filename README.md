
# Friki Calendar 🪄

La idea creativa se basa en la creación una web que recoja diferentes eventos relacionados con eventos decómic,convenciones de coleccionismo, cometcon etc.

En dichos eventos, presentados en Cards con la información (Día,hora,descripción) el usuario podrá apuntarse, registrarse y acceder a la plataforma.

## Prototype ✏️



 ![Logo]( https://github.com/lauracastelao/image/blob/main/home%20friki.PNG?raw=true)



Requirements 🔩
------------

#### Latest Composer

PHP 

#### Composer 2.2 LTS (Long Term Support)

PHP versions 5.3.2 - 8.1 are still supported via the LTS releases of Composer (2.2.x). If you
run the installer or the `self-update` command the appropriate Composer version for your PHP
should be automatically selected.





## Ejecutar el proyecto 🏃‍♀️

1. Clonar el proyecto
2. Una vez abierto en el procesador de texto, ejecutar los siguientes comandos: 


`composer install` 

`npm install` 

`npm update`

3. Crear un archivo .env que contenga la misma información que el archivo .env.example, a excepción del nombre de la base de datos: 
    db_database: event-route

4. Ejecutar los siguientes comandos: 
`php artisan migrate:fresh --seed` 

5. En una terminal nueva, ejecutar:

`npm run dev` 


6. En una terminal nueva, ejecutar:
`php artisan serve`


## Links de recursos 🔗 


<p align= "center"> [Taildwind](https://tailwindcss.com/) 

<p align="center"> <a margin="10" href="https://tailwindcss.com" target="_blank"><img align="center" margin="10px" height="30" src="https://github.com/abdoachhoubi/abdoachhoubi/blob/main/svgs/tailwind.svg" alt="tailwind"></a>
    
<p align= "center"> [Laravel v.8] (https://laravel.com/docs/8.x/installation)  

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>












