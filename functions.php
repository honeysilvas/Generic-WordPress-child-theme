<?php

	if ( !defined( "ABSPATH" ) ) exit; // Exit if this file is accessed directly

	// Adds the stylesheet of the child theme.
	function enqueue_child_theme_style() {
		wp_enqueue_style( "generic_child_theme", get_stylesheet_directory_uri(). "/style.css" );
	}

	// Hooks into the wp_enqueue_scripts action.  
	// You can change this number to a higher number if you want this stylesheet to be called after other stylesheets.
	add_action( "wp_enqueue_scripts", "enqueue_child_theme_style", 20 ); 