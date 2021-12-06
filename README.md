# Temas Child
## Como Crearlo!
mas info en:
[https://codex.wordpress.org/Child_Themes](https://codex.wordpress.org/Child_Themes)
[https://codex.wordpress.org/es:Temas_hijos](https://codex.wordpress.org/es:Temas_hijos)

### Archivos a modificar:
Utiliza como modelo los tres archivos del directorio aaaa-child


#### functions.php
En el archivo functions.php reemplaza la palabra parent-theme por el nombre del directorio donde se instala tu tema. Normalmente es el nombre del tema que elegiste en minúsculas y las palabras separadas por -
Si tienes duda ingresa por ftp a tu hosting y verifica el nombre del directorio


#### style.css
/*
Theme Name:   theme-parent child
Theme URI:    https://theme-parent.com/
Description:  This is a custom child theme I have created.
Author:       Your name
URI:          https://yoursite.com/
Template:     theme-parent
Version:      1.0.0
License:      GNU General Public License v2 or later
License URI:  http://www.gnu.org/licenses/gpl-2.0.html
Tags:         light, dark, two-columns, responsive-layout, your tags
Text Domain:  theme-parent-child
*/

- Lo importante es reemplazar dos lineas: Theme Name y Template
  - Theme Name : el nombre del tema padre y le agregas child
  - Template   : es el nombre del directorio del Tema Padre
- Theme URI: puede quedar en Blanco o puedes agregarlos. Este dato lo puedes obtener del archivo style.css del tema padre (pero no es imprescindible)
- Description: puedes dejarla con ese contenido, tampoco es imprescindible
- Author: puedes poner los datos del autor del tema padre, o tus datos, o nada
- URI: puedes poner la url del autor del tema padre, o tus datos, o nada
- Version: indica la versión de tu tema child, puedes dejarla en 1.0 si es tu primer versión de tu tema child


#### screenhot.png
Este archivo es solo la imagen q se mostrará en el escritorio de WordPress asociada a tu tema child. También es la se muestra cuando complementos externos verifican que tema está utilizando tu sitio (por ejemplo extensiones de Chrome que verifican que thema y plugins tiene instalado tu sitio)
Lo único importante es el nombre del archivo.
Entonces puedes editarla para escribir el nombre de tu tema o crear una imagen nueva que te sirva para identificar tu tema child en el administrador de temas de WordPress.


### Como instalarlo
- Debes crear un directorio en wp-content/themes cuyo nombre debe comenzar igual que el nombre del directorio del Tema Padre y agregarle -child
- En ese directorio debes subir los tres archivos que acabas de crear
- En el administrador de temas de WordPress aparecerá este tema con la imagen que subiste. Allí debes activarlo y luego personalizarlo

### Que más hacer
Es mucho lo que puedes hacer
- A nivel PHP puedes agregar mas snippets dentro de tu archivo function.php. También puedes agregar archivos con el mismo nombre que tu instalación tales como footer.php header.php sidebar.php template.php y tantos otros.


## Modelos
Hay algunos modelos para algunos Temas, pero mi sugerencia es que siempre inicies a crearlos desde cero.

![Avatar de Héctor](https://en.gravatar.com/userimage/146115819/41a333edd75fea5257a0a684c76cf977.png)
