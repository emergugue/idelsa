<?php  
	//Acitvar imágenes destacadas
	add_theme_support("post-thumbnails");
	//Tamaño extra en imágenes
	add_image_size( "my-size", 200, 200, true );


	// Registrar los menús
	function register_my_menus() {
		register_nav_menus(
		    array(
		      'header-menu' => __( 'Menu del header' ),
		      'footer-menu' => __( 'Menú del footer' )
		    )
		  );
	}
	add_action( 'init', 'register_my_menus' );

	//Registrar los sidebars
	function otro_sidebar() {
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$args = array(
				'name'          => __( 'Widget de prueba', 'sidebar_left' ),
				'id'            => 'sidebar-left',
				'description'   => 'Sidebar para probar cómo funcionan los sidebars',
				'before_widget' => '<li id="%1" class="widget %2">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>'
			);
		
			register_sidebar( $args );
	}
	add_action( "widgets_init", "otro_sidebar" );

	function footer_sidebar() {
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$args = array(
				'name'          => __( 'Widget para el footer', 'sidebar_footer' ),
				'id'            => 'sidebar-footer',
				'description'   => 'Sidebar para probar cómo funcionan los sidebars en el footer',
				'before_widget' => '<div class="footer-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>'
			);
		
			register_sidebar( $args );
	}
	add_action( "widgets_init", "footer_sidebar" );

?>