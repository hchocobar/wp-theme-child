0.- Archivo readme.txt
readme significa leame
Este archivo readme.txt tiene las instrucciones para adecuar los archivos a cualquier tema.
No hace falta q subas este archivo a tu instalación de WordPress.


1.- Archivo functions.php
En el archivo functions.php reemplaza la palabra hestia por el nombre de tu tema (en todos lados)
Ejemplo, para el tema Ocean la siguiente línea
if ( !function_exists( 'hestia_child_parent_css' ) ):
luego de reemplazar quedaría así:
if ( !function_exists( 'ocean_child_parent_css' ) ):




2.- Archivo style.css
/*
Theme Name: Hestia Child
Theme URI: https://www.themeisle.com/
Description: This is a custom child theme I have created.
Author: ThemeIsle
URI: https://www.themeisle.com/
Template: hestia    
Version: 0.1
*/
2.1.- Lo importante es reemplatar dos lineas: Theme Name y Template
2.2.- Las lineas Theme URI, Author, URI pueden quedar en Blanco o si conoces esos datos, puedes agregarlos. Estos datos puedes obtenerlos del archivo style.css del tema padre (pero no son impresindibles)
2.3.- La línea Description puedes dejarla con ese contenido
2.4.- La linea Version indica la version de tu tema child, por lo tanto puedes dejarla en 0.1

Ejemplo para el tema Ocean
/*
Theme Name: Ocean Child
Theme URI: 
Description: This is a custom child theme I have created.
Author: 
URI: 
Template: ocean    
Version: 0.1
*/




3.- Archivo screenhot.png 
Este archivo es solo la imagen q se mostrará en el escritorio de WordPress asociada a tu tema child.
Por lo tanto puedes editarla para escribir el nombre de tu tema o crear una imagen nueva que te sirva para identificar tu tema child en el administrador de temas de WordPRess.