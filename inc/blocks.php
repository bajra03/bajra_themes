<?php

/** BLOCK HTML RENDER  (in loop) */

function _bajra_render_block($block_name) {
	$func_name = 'bajra_render_' .$block_name;
	if ( !function_exists($func_name) ) {
		$template_file = __DIR__ . '/blocks/'. $block_name .'.php';

    if( file_exists( $template_file ) ){
      # Start output buffering
      ob_start();

      # Include the template file
      include $template_file;

      # End buffering and return its contents
      return ob_get_clean();
    }
	}
	return call_user_func_array($func_name, array());
}
