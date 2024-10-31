<?php
/*
Plugin Name: Paulund Scroll To Top
Plugin URI: http://www.paulund.co.uk
Description: Adds a jQuery scroll to top button at the bottom of the page.
Author: Paul Underwood
Version: 1.0
Author URI: http://www.paulund.co.uk/
*/

// If not on the admin page then add the button
if( !is_admin() ){
	
	// Create the Paulund scroll to top class
	$scroll = new Paulund_Scroll_To_Top();

}
	
/**
 * The Paulund scroll to top plugin
 */
class Paulund_Scroll_To_Top{
		
	public function __construct(){
		add_action('wp_enqueue_scripts', array(&$this, 'scripts_method') );
		add_action( 'wp_footer', array(&$this, 'Add_Html') );	
	}
	
	public function Scripts_Method() {
		wp_deregister_script( 'jquery' );
	    wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' ), false, null, true );
	    wp_enqueue_script( 'jquery' );
				
		// Register styles and js
		wp_register_style( 'toolbar_settings_css', plugins_url( '/pinterest-scroll-to-top-plugin/css/style.css' ) );
		wp_register_script( 'toolbar_settings_js', plugins_url( '/pinterest-scroll-to-top-plugin/js/script.js' ), false, null, true );
		
		wp_enqueue_style( 'toolbar_settings_css' );
		wp_enqueue_script( 'toolbar_settings_js' );
	}		
	
	public function Add_Html(){
		?>
			<div class="scrollToTop">
				<strong>Scroll To Top</strong>
			</div>
		<?php		
	}
}
?>