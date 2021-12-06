# Temas hijos o child themes de WordPress. Como Crearlo!

En este repositorio, les comparto un modelo general para crear manualmente un "tema hijo" o "child theme" de cualquier tema de WordPress.

## Modelo General

En el directorio `aaa-child` encontrarás tres archivos que debes modificar.

### functions.php
En el archivo `functions.php`, debes reemplazar la palabra `parent-theme` por el nombre del directorio donde se instaló tu tema padre. 

Normalmente, es el nombre del directorio es el nombre del tema que elegiste en minúsculas. Si el nombre del tema que elegiste tiene más de dos palabras, entonces utiliza `-` para separarlas.

Si tienes duda sobre esto, la mejor opción es ingresar vía ftp a los directorios de tu hosting, y verificar allí cuál es el nombre del directorio.

### style.css

En el archivo modelo encontrarás lo siguiente: 

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

Lo importante aquí es reemplazar el contenido de dos líneas: `Theme Name` y `Template`.
- `Theme Name:` el nombre del tema padre y le agregas child
- `Template:` es el nombre del directorio del Tema Padre

Las otras líneas son opcionales, sin embargo aquí te describo que significan

- `Theme URI:` puede quedar en Blanco o puedes agregarlos. Este dato lo puedes obtener del archivo style.css del tema padre (pero no es imprescindible)
- `Description:` puedes dejarla con ese contenido, tampoco es imprescindible
- `Author:` puedes poner los datos del autor del tema padre, o tus datos, o nada
- `URI:` puedes poner la url del autor del tema padre, o tus datos, o nada
- `Version:` indica la versión de tu tema child, puedes dejarla en 1.0 si es tu primer versión de tu tema child


### screenshot.png

Este archivo es la imagen asociada a tu tema child que WordPress mostrará en el escritorio. 

También es la imagen que muestran los complementos externos cuando verifican que tema está utilizando tu sitio (por ejemplo extensiones de Chrome que verifican temas y plugins instalados en tu sitio).

Lo único importante es el nombre del archivo: `screenshot.png`.

Entonces puedes editarla para escribir el nombre de tu tema o crear una imagen nueva que te sirva para identificar tu tema child en el administrador de temas de WordPress.


### Cómo instalar el tema child que has creado

Es muy sencillo. 

Utilizando un "cliente FTP" o a través del "administrador de archivos" de tu hosting debes:

- Primero, crear un sub-directorio en `wp-content/themes` cuyo nombre debe comenzar igual que el nombre del directorio del Tema Padre y agregarle `-child`.
- Segundo, en el sub-directorio que acabas de crear, debes subir los tres archivos modificados.

Listo! Ya tienes tu tema hijo instalado.

Ahora puedes configurarlo desde el administrador de temas de WordPress donde ya aparecerá este tema con la imagen que subiste.

- Allí debes activarlo y luego personalizarlo.

## Qué más puedes hacer

Es mucho lo que puedes hacer:

- A nivel PHP, puedes agregar más snippets dentro de tu archivo `function.php`.
- También puedes agregar archivos con el mismo nombre que tu instalación tales como `footer.php`, `header.php`, `sidebar.php`, `template.php`, y tantos otros.
- A nivel CSS, puedes editar el archivo `style.css` y agregar clases o modificar atributos que estás utilizando en tu sitio WordPress. 

## Otros Modelos

Hay algunos modelos listos para algunos temas, pero mi sugerencia es que siempre inicies creándolos desde cero.

# Enlaces
[WordPress](https://wordpress.org) | 
[WP Child Themes](https://codex.wordpress.org/Child_Themes) | 
[WP Temas Hijos](https://codex.wordpress.org/es:Temas_hijos)

# Muchas Gracias!

[Héctor Chocobar Torrejón](https://chocobar.net)

![Avatar de Héctor](https://en.gravatar.com/userimage/146115819/41a333edd75fea5257a0a684c76cf977.png)
