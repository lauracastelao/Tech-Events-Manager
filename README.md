
# Friki Calendar 🪄

La idea creativa se basa en la creación una web que recoja diferentes eventos relacionados con eventos decómic,convenciones de coleccionismo, cometcon etc.

En dichos eventos, presentados en Cards con la información (Día,hora,descripción) el usuario podrá apuntarse, registrarse y acceder a la plataforma.

## Prototype ✏️



 ![Logo]( https://github.com/lauracastelao/image/blob/main/home%20friki.PNG?raw=true)









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

[Taildwind](https://tailwindcss.com/) <a margin="10" href="https://tailwindcss.com" target="_blank"><img margin="10px" height="40" src="https://github.com/abdoachhoubi/abdoachhoubi/blob/main/svgs/tailwind.svg" alt="tailwind"></a>

[Laravel v.8] (https://laravel.com/docs/8.x/installation)  <img src="https://img.icons8.com/officel/48/000000/php-logo.png"/> 








