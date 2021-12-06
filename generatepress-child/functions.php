<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */



/**
 * GeneratePress child theme functions and definitions.
 *
 * 
 * Adding styles.css 
 */
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'generatepress-child' );
}, 50 );


/**
 * Changing the Copyright Message in GeneratePress's footer.
 *
 * @author  Héctor Chocobar <hector@chocobar.net>
 * @version 1.1
 * 
 * .
 */
add_filter( 'generate_copyright','tu_custom_copyright' );
function tu_custom_copyright() {
    $my_copy_message    = "Héctor Chocobar Torrejón";   // Escriba aquí el propietario del blog
    $my_copy_first_year = "2016";              // Escriba aquí el año de inicio
    $my_copy_last_year  = date('Y');
    echo $my_copy_message . " | Copyright " . $my_copy_first_year . " - " . $my_copy_last_year ;
}


/**
 * GeneratePress child theme functions and definitions.
 *
 * 
 * End your custom PHP in this file.
 */
?>
