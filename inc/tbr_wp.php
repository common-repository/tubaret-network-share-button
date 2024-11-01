<?php

function tbr_wp_add_css_to_head() {
	$output='<link rel="stylesheet" type="text/css" media="all" href="'.$GLOBALS['path']['tbr_wp_plugin_url']."css/style.css".'">';
	echo $output;
}

/**
 * Adds the button to the beginning of every post.
 *
 * @uses is_single()
 */
function tbr_wp_add_button_filter( $content ) {

    if ( is_single() ){

    	//Rendering the button iframe template and getting the content into a variable
	    ob_start();
	    include($GLOBALS['path']['tbr_wp_tpl']."button_iframe.tpl.php");
	    $button_html = ob_get_contents ();
	    ob_end_clean();

    	//$button_html = '<div style="display: none; float: '.get_option('tbr_wp_position_horiz', 'right').';" class="added '.get_option('tbr_wp_site', 'tubaret').' '.get_option('tbr_wp_size', 'large').'">added</div>';

    	if (get_option('tbr_wp_position_vert', 'top') == 'top'){
           $content = sprintf($button_html.'%s', $content);
        }else{
           $content = sprintf('%s'.$button_html, $content);        	
        }
    }

    // Returns the content.
    return $content;
}