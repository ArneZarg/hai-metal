<?php

	function contact_information(){
		register_post_type('contact_information', array(
			'supports' => array('title', 'editor'),
			'has_archive' => false,
			'public' => true,
			'labels' => array(
				'name' => 'Contact Information',
				'add new_item' => 'Add New Contact Information',
				'edit_item' => 'Edit Contact Information',
				'singular_name' => 'Contact Information'
			),
			'menu_icon' => 'dashicons-phone'
		));
	}

	add_action('init', 'contact_information');//to create new post type. 'init' is first argument, 2nd argument is a function that you define.

	function address_information(){
		register_post_type('address_information', array(
			'supports' => array('title', 'editor'),
			'has_archive' => false,
			'public' => true,
			'labels' => array(
				'name' => 'Address Information',
				'add new_item' => 'Add New Address Information',
				'edit_item' => 'Edit Address Information',
				'singular_name' => 'Address Information'
			),
			'menu_icon' => 'dashicons-store'
		));
	}

	add_action('init', 'address_information');//to create new post type. 'init' is first argument, 2nd argument is a function that you define.	
?>