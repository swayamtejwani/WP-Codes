<?php

/*
Plugin Name: Newsletter
Plugin URI: http://google.com
Description: Newsletter Plugin which subscibes you for Newsletter
Version: The Plugin's Version Number, e.g.: 1.0
Author: Swayam Tejwani
Author URI: http://google.com
*/


function nl_form(){
?>
<h4>Newsletter</h4>
<p>Vestibulum sit amet tincidunt sit amet, tincidunt at dolor. </p>
<form action="javascript:void(0)" method="get">
<input type="text" value="10" name="keyword" id="keyword" title="keyword"  />
<input type="submit" name="Subscribe" value=" Subscribe " alt="Subscribe" id="subscribe_btn" title=" Subscribe " class="subscribe_btn"  onclick="return callajax();"/>
<div class="cleaner"></div>
</form>
<?php
}
add_shortcode('newsletter',nl_form);
function add_jsfile(){
wp_enqueue_script('jquery');
wp_enqueue_script('the_js', WP_PLUGIN_URL.'/newsletter/my_javascript.js');
wp_localize_script( 'the_js', 'the_ajax_url', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_enqueue_scripts','add_jsfile');
function test_ajax_process_request(){
$email = $_POST['post_var'];
echo $email;
die();
}
add_action('wp_ajax_test_response','test_ajax_process_request')
?>

