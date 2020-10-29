<?php
/**
 * Plugin Name: Gutenberg Hello World Plugin
 * Plugin URI:
 * Description: This is the most basic form of a block.
 * Version:     0.1.0
 * Author:      fabiankaegy
 * Author URI:  https://fabian-kaegy.de
 * Text Domain: example
 * Domain Path: /languages
 *
 * @package HelloWorld
 */

namespace HelloWorld;

add_action( 'init', __NAMESPACE__ . '\register_block' );
/**
 * Register the block
 */
function register_block() {

	wp_register_script(
		'editor-script',
		plugin_dir_url( __FILE__ ) . 'build/index.js',
		[ 'wp-blocks' ],
		time(),
		false
	);

	register_block_type(
		'example/hello-world',
		[
			'editor_script'   => 'editor-script',
			'render_callback' => __NAMESPACE__ . '\hello_world_render_callback',
		]
	);
};

/**
 * Hello World Block Render Callback
 */
function hello_world_render_callback() {
	return '<h1>Hello Frontend!</h1>';
};
