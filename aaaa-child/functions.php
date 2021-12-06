<?php
function my_theme_enqueue_styles() {
  // in line 4 replace 'parent-theme' for the theme's name that your choose
  $parenthandle = 'parent-theme-style';  // replace here
  $theme = wp_get_theme();
  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
      array(),  // if the parent theme code has a dependency, copy it to here
      $theme->parent()->get('Version')
  );
  wp_enqueue_style( 'child-style', get_stylesheet_uri(),
      array( $parenthandle ),
      $theme->get('Version') // this only works if you have Version in the style header
  );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
