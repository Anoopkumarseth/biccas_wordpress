<?php 

if ( ! function_exists( 'biccas_theme' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function biccas_theme() {
		add_theme_support( 'title-tag' );
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		// add_theme_support( 'wp-block-styles' );

		
	}


	// svg Support on Theme
	// Allow SVG
	add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

		global $wp_version;
		if ( $wp_version !== '4.7.1' ) {
		return $data;
		}
	
		$filetype = wp_check_filetype( $filename, $mimes );
	
		return [
			'ext'             => $filetype['ext'],
			'type'            => $filetype['type'],
			'proper_filename' => $data['proper_filename']
		];
	
	}, 10, 4 );
	
	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );
	
	function fix_svg() {
		echo '<style type="text/css">
			.attachment-266x266, .thumbnail img {
				width: 100% !important;
				height: auto !important;
			}
			</style>';
	}
	add_action( 'admin_head', 'fix_svg' );

	require get_template_directory() . '/inc/custom_type_post.php';
	require get_template_directory() . '/inc/shortcodes.php';
	require get_template_directory() . '/inc/customizer.php';
	require get_template_directory() . '/inc/widgets.php';


	// adding Js in theme
	function biccas_register_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );	


		// js adding
		wp_enqueue_script( 'biccas-jQuery', get_template_directory_uri() . '/lib/jquery/jquery-3.6.0.min.js', array(), $theme_version, true );
		wp_enqueue_script( 'biccas-swiper', get_template_directory_uri() . '/lib/swiper/js/swiper-bundle.min.js', array(), $theme_version, true );
		wp_enqueue_script( 'biccas-script', get_template_directory_uri() . '/js/script.js', array(), $theme_version, true );
		// wp_script_add_data( 'biccas-js', 'async', true );
	
	}	
	add_action( 'wp_enqueue_scripts', 'biccas_register_scripts' );



}
add_action( 'after_setup_theme', 'biccas_theme' );