<?php
// registrar menu
function register_my_menus() {
    register_nav_menus(
      array(
        // creando menu
        'menu_izquierdo' => __( 'Menu principal izquierdo' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
   //agregar a los estilos <a> del menu
   add_filter('nav_menu_link_attributers','clases_menu',10,3);
   function clases_menu($atts,$items,$args){

    $class='waves-effect';
    $atts['class'] =$class;
    return $atts;


   }



?>