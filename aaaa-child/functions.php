<?php
function my_theme_enqueue_styles() {
  // en la línea 4 reemplaza 'parent-theme' por el nombre del tema padre que elegiste
  $parenthandle = 'parent-theme-style';  // reemplace aquí
  $theme = wp_get_theme();
  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
      array(),  // si el código del tema padre tiene una dependencia, copiala aquí
      $theme->parent()->get('Version')
  );
  wp_enqueue_style( 'child-style', get_stylesheet_uri(),
      array( $parenthandle ),
      $theme->get('Version') // esto, solo se ejecuta si tienes Version en el encabezado del style
  );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
