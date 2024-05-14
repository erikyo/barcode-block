<?php
/**
 * Plugin Name:   Barcode
 * * Description: Barcode block
 * * Version:     1.0.0
 * * Author:      me
 * * Text Domain: barcode
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_barcode_block() {
	\register_block_type( __DIR__ . '/build' );
}

\add_action( 'init', 'create_barcode_block' );

/**
 * Registers the block custom metadata.
 */
function barcode_register_post_meta() {
	\register_meta( 'post', 'barcode', array(
		'show_in_rest' => true,
		'single'       => true,
		'type'         => 'string',
	) );
}
add_action( 'init', 'barcode_register_post_meta' );
