<?php 
if ( ! function_exists( 'social_plus' ) ) :
	function social_plus() {
		load_theme_textdomain( 'social', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
		// Size of post thumbnail
		set_post_thumbnail_size( 1568, 9999 );


		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'social' ),
				'footer' => __( 'Footer Menu', 'social' ),
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'social_plus' );

//Custom post register
require_once (get_template_directory().'/inc/custom_post_register.php');
//Widgets
require_once (get_template_directory().'/inc/widgets.php');
//Custom Meta Box
require_once (get_template_directory().'/inc/custom_meta.php');
/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/cs-framework/codestar-framework.php';
require_once get_theme_file_path() .'/inc/cs-framework/options.php';
