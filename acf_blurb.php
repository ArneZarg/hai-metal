<?php function front_page_blurb(){
		register_post_type('blurb', array(
			'supports' => array('title', 'editor'),
			'has_archive' => false,
			'public' => true,
			'labels' => array(
				'name' => 'Front Page Blurb',
				'add_new_item' => 'Add New Blurb',
				'edit_item' => 'Edit Blurb',
				'singular_name' => 'Blurb'
			),
			'menu_icon' => 'dashicons-testimonial'
		));
	}

	add_action('init', 'front_page_blurb');//to create new post type. 'init' is first argument, 2nd argument is a function that you define.

	function front_page_title(){
		register_post_type('front_page_heading', array(
			'supports' => array('title', 'editor'),
			'has_archive'=> false,
			'public' => true,
			'labels' => array(
				'name' => 'Front Page Blurb Heading',
				'add_new_item' => 'Add New Heading',
				'edit_item' => 'Edit Heading',
				'singular_name' => 'Heading'
			),
			'menu_icon' => 'dashicons-align-center'
		));
	}

	add_action('init', 'front_page_title');
?>