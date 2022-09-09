
# Friki Calendar 🪄

Este proyecto se estructura principalmente en ser una web que recoja diferentes eventos relacionados con cómic,convenciones de coleccionismo, cometcon etc.


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

[Taildwind](https://tailwindcss.com/)

[Laravel v.8](https://laravel.com/docs/8.x/installation)








