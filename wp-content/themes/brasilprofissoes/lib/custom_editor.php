<?php  

add_filter( 'mce_css', 'custom_editor_mce_css' );
function custom_editor_mce_css( $mce_css ) {
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= get_stylesheet_directory_uri() . '/css/custom_editor.css';

	return $mce_css;
}


//Adds "Styles" drop-down 
add_filter( 'mce_buttons_2', 'custom_editor_buttons' );  
function custom_editor_buttons( $buttons ) {  
    array_unshift( $buttons, 'styleselect' );  
    return $buttons;  
}  



// Add "Styles" drop-down content or classes 
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );  
function custom_editor_settings( $settings ) {  

	$style_formats = array(  
        //Highlight 
        array(  
            'title' => 'Highlight: Blue',  
            'inline' => 'span',  
            'classes' => 'highlight blue'
        ),
        array(  
            'title' => 'Highlight: Green',  
            'inline' => 'span',  
            'classes' => 'highlight green'
        ),
        array(  
            'title' => 'Highlight Red',  
            'inline' => 'span',  
            'classes' => 'highlight red'
        ),
        array(  
            'title' => 'Highlight: Yellow',  
            'inline' => 'span',  
            'classes' => 'highlight yellow'
        ),
    );  
    $settings['style_formats'] = json_encode( $style_formats );  
    return $settings;  
}  

?>