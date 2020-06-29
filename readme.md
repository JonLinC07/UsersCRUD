# UsersCRUD

# Pasos para iniciar correctamente UsersCRUD

Una vez clonado el repositorio en la carpeta o servidor donde se va ejecutar seguir los siguientes pasos:

- 1. Abrir la terminal de comandos en la carpeta del proyecto y ejecutar el comando `composer install`.
-  2. En la misma capeta ejecutar el comando `npm install`.
- 3.  En el directorio raíz del proyecto creamos un nuevo archivo llamado **.env**, en el hay que copiar el contenido del archivo **.env.example**.
- 4. En el nuevo archivo **.env** las siguientes propiedades deben estar de la siguiente manera**DB_DATABASE=userscrud**, **DB_USERNMAE=root** y por ultimo la propiedad **DB_PASSWORD=** debe estar vacía. 
- 5. Estando dentro de la carpeta del proyecto en la terminal de comando ejecutamos `mysql -u root -p`; después ejecutar `create database userscrud` para crear la base de datos; por ultimo salimos con el comando `exit`.
- 6. En la terminal de comando ejecutar el comando `php artisan key:generate` estando dentro de la carpeta del proyecto.
- 7. Por ultimo ejecutar las migraciones mediante el comando `php artisan migrate`.

Una vez concluidos los 7 pasos anteriores se tendrá acceso a la aplicación mediante el correo **admin@mail.com** y la contraseña **admin123**.