<? php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu', __( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
