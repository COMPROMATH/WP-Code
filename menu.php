Put the following code in functions.php file

// Menus Register Start
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Navigation' ),//It is your primary nav menu
      'top-menu' => __( 'Top Navigation' ), //It is your Top nav menu
      'footer-menu' => __( 'Footer Navigation' ) //It is your Footer nav menu
    )
  );
}
add_action( 'init', 'register_my_menus' );
// Menus Register Stop


Put the following code in selected file

<?php 
//Menu
wp_nav_menu(array(
    'theme_location'      => 'primary',
    'container'           => 'div',
    'container_class'     => 'mymenu',
    'menu_class'          => 'cf menu-ul',
    'menu_id'             => 'main_navigation_menu',
)) ;		
?>
