<?php
	function hai_metal_files(){
		wp_register_script( 'jScript', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
		wp_enqueue_script( 'jScript' );
		wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), NULL, microtime(), true);
		wp_enqueue_script('my-js', get_theme_file_uri('/js/myJs.js'), NULL, microtime(), true);
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all');
		wp_enqueue_style('hai-main-styles', get_stylesheet_uri(), NULL, microtime());
	}
	add_action('wp_enqueue_scripts', 'hai_metal_files');//for first argument you need wp_enqueue_scripts to be the name. For the second argument, name doesn't matter because you create the file.

	//Redirect subscriber accounts out of admin and onto homepage
	add_action('admin_init', 'redirectSubsToFrontend');

	function redirectSubsToFrontend(){
		$ourCurrentUser = wp_get_current_user();
		if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
			wp_redirect(site_url('/'));
			exit;
		}
	}

	//hides admin bar from non-editorial/administrative roles
	add_action('admin_init', 'noSubsAdminBar');

	function noSubsAdminBar(){
		$ourCurrentUser = wp_get_current_user();
		if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
			show_admin_bar(false);
		}
	}

	function hai_features(){
		register_nav_menu('headerMenuLocation', 'Header Menu Location');//args('name of the menu', 'the text that actually shows up in the menu') this allows you to make a menu in wp-admin.
		register_nav_menu('footerLocationOne', 'Footer Location One');
		register_nav_menu('footerLocationTwo', 'Footer Location Two');
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'hai_features');//args: to have a unique title for every page: (wordpress function after_setup_theme, our function)
?>