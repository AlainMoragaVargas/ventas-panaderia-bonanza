Registro de ventas para panadería bonanza, Los Ángeles
================================================
Este proyecto consiste en un pequeño sistema web donde se pueden registrar las ventas sin boleta del local en cuestión. El sistema permite lo siguiente:
* Iniciar el día para registrar ventas.
* Registrar una venta sin boleta.
* Acceder a un registro temporal de ventas, la que se elimina al finalizar el día.
* Cálculo automático del total diario vendido.
* Registro de los totales diarios vendidos en un rango de tiempo.

Pre-requisitos
--------------
Se requiere tener instalado lo siguiente:
* ```XAMPP(windows)``` 
* ```APACHE2(linux)``` 
* ```PHP 5 en adelante``` 
* ```GIT``` 
* ```MYSQL``` 

Descarga del repositorio e importar base de datos
-----------
Descargue el repositorio mediante línea de comandos o en formato zip:
* ```git clone https://github.com/AlainMoragaVargas/ventas-panaderia-bonanza.git``` 

Acceda al repositorio clonado e importe la base de datos a mysql:

* ```mysql -u root -p ventas_bonanza < ventas_bonanza.sql``` Para linux: donde ventas_bonanza, es una base de datos vacía creada previamente.
* ```En el caso de windows, dependerá de su gestor de mysql.```

Verificación de credenciales
-----------
Entre al archivo conexion.php y cambie las credenciales por las suyas.

Desplegar el proyecto
-----------
* En el caso de linux, copie el repositorio en el directorio ```/var/www/html/``` y luego escriba en su terminal ```sudo apache2 start``` para iniciar el servicio de apache2.
* En el caso de windows, copie el repositorio en la carpeta htdocs de xampp e inicie el servicio de xampp en el panel de control.

Entrar el proyecto
-----------
Dentro de su navegador web, escriba en la url:
* ```http://localhost/ventas-bonanza/php/index.php``` para acceder al proyecto.
