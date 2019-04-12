<?php

	function clients(){
		register_post_type('our_clients', array(
			'supports' => array('title', 'editor'),
			'has_archive' => false,
			'public' => true,
			'labels' => array(
				'name' => 'Our Clients',
				'add new_item' => 'Add New Client Logo',
				'edit_item' => 'Edit Client Logo',
				'singular_name' => 'Client Logo'
			),
			'menu_icon' => 'dashicons-images-alt2'
		));
	}

	add_action('init', 'clients');

?>