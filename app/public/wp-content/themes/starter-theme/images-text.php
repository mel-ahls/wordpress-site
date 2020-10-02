<?php $image = get_field('image');
if( $image ) {
	  echo wp_get_attachment_image( $image, 'thumbnail');
} ?>