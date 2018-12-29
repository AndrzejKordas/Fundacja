<?php

/********************************************************************************************

									REJESTRACJA MENU

*********************************************************************************************/


function register_my_menus() {
	register_nav_menus(array(
	'TopMenu' => __('Menu w topie'),
    'extra-menu' => __( 'Extra Menu' )
	));
	
}
add_action( 'init', 'register_my_menus' );


/********************************************************************************************

									WCZYTYWANIE SKRYPTÓW I ARKUSZY

*********************************************************************************************/



function load_styles_and_scripts() {
  //wczytywanie CSS
  wp_enqueue_style (
    'Montserrat',
    'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900'
  );
  wp_enqueue_style (
    'Open+Sans',
    'https://fonts.googleapis.com/css?family=Open+Sans'
  );

  wp_enqueue_style (
    'bootstrap4.1.3',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
  );
    
  wp_enqueue_style (
    'Fundacja',
    get_template_directory_uri() . '/style.css'
  );

 
  
  // wczytywanie JS
  
  wp_enqueue_script (
    'jquery',
    'https://code.jquery.com/jquery-3.3.1.slim.min.js',
	false,
    '3.3.1',
    true
  );
  
 wp_enqueue_script (
			'Cloudflare',
			 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
			 array('jquery'),
			'1.2',
			true
		  ); 


 wp_enqueue_script (
			'jquerySlim',
			 get_template_directory_uri() .'/js/vendor/jquery-slim.min.js',
			 array('jquery'),
			'1.2',
			true
		  ); 

 wp_enqueue_script (
			'popper',
			 get_template_directory_uri() .'/js/vendor/popper.min.js',
			 array('jquerySlim'),
			'1.2',
			true
		  ); 


 wp_enqueue_script (
			'bootstrap',
			 get_template_directory_uri() .'/js/bootstrap.min.js',
			 array('popper'),
			'1.2',
			true
		  ); 

 wp_enqueue_script (
			'holder',
			 get_template_directory_uri() .'/js/vendor/holder.min.js',
			 array('bootstrap'),
			'1.2',
			true
		  ); 

 wp_enqueue_script (
			'offcanvas',
			 get_template_directory_uri() .'/js/offcanvas.min.js',
			 array('holder'),
			'1.2',
			true
		  );     
    

}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/********************************************************************************************

									OBRAZKI WYRÓŻNIAJĄCE

*********************************************************************************************/

add_theme_support( 'post-thumbnails');	

/********************************************************************************************

									REJESTRACJA WIGETÓW

*********************************************************************************************/

add_action('widgets_init', 'smashing_register_sidebars');
function smashing_register_sidebars(){
	register_sidebar();
	register_sidebar(array('id' => 'lid1', 'name' => 'obszar na wyszukiwarkę','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'lid2', 'name' => 'tekst w stopce','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'lid3', 'name' => 'trzecie tekstowe na strone główną','before_widget' => '<span>', 'after_widget' => '</span>'));
	register_sidebar(array('id' => 'produkty', 'name' => 'Menu produktowe', 'before_widget' => '<h1>', 'after_widget' => '</h1>'));
	register_sidebar(array('id' => 'Facebook', 'name' => 'Ikona Facebook'));
	}


?>