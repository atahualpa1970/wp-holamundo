# wp-holamundo
Prueba técnica. WordPress HolaMundo con plugin admnistrable

# Instalación en modo local
Se debe tener instalado Apache con PHP y MySQL
En Windows poede ser con WAMP o XAMP

* Clonar el repositiorio dentro de la carpeta c:\wamp64\www\wordpress

* Restaurar las BD del archivo: wp-prueba-tecnica.sql
* se creará una BD con el nombre: db_wordpress

* Para poder acceder con un dominio local "wordpress"
* Modificar el archivo C:\Windows\System32\drivers\etc\host (se debe abrir con permisos de administrador)
* agregar la línea: 127.0.0.1 wordpress
* 
* En el archivo C:\wamp64\bin\apache\apache2.4.41\conf\extrahttpd-vhosts.conf (el nro de version de apache puede variar)
* Agregar las siguientes líneas

<VirtualHost *:80>
    DocumentRoot "c:/wamp64/www/wordpress"
    ServerName wordpress
</VirtualHost>

* Reiniciar el servicio de apache para poder ingresar con http://wordpress
* Para ingresar a la administracion del plugin http://wordpress/wp-admin/
* El usuario creado para la prueba es: atahualpa1970@outlook.com
* El password es: wp-prueba-tecnica