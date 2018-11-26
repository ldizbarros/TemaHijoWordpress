<?php
    
    /**
     * Añadir un nuevo menu a la pagina
     **/ 
    
    function register_my_menu() {
        register_nav_menu('footer-menu',__( 'Footer Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    /**
     * Añadir un widget 
     **/
    
    function arphabet_widgets_init() {
	    register_sidebar( array(
		    'name'          => 'Mi sidebar',
		    'id'            => 'mi_sidebar',
		    'before_widget' => '<div>',
		    'after_widget'  => '</div>',
		    'before_title'  => '<h2 class="rounded">',
		    'after_title'   => '</h2>',
	    ) );
    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );

?>
