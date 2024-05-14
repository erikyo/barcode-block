<?php

global $post;
$custom_field = get_post_meta( $post->ID, 'barcode', true );
?>
<div
	<?php echo get_block_wrapper_attributes(); // phpcs:ignore ?>
>
	<svg
		class="barcode"
		id="barcode-<?php echo esc_attr( $custom_field ); ?>"
		data-barcode="<?php echo esc_attr( $custom_field ); ?>"
	></svg>
</div>
