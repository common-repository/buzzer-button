<?php
/**
 * Plugin Name: Buzzer Button
 * Plugin URI: https://klaetke.com/wordpress-buzzer-button
 * Description: Thanks for using the Buzzer.Best Button. With the Following Shortcodes you integrate the Buzzer Buttons: [buzzer_button] - [buzzer_yellow] - [buzzer_green] - [buzzer_blue] - [buzzer_purple] - [buzzer_orange] - [buzzer_small] - [buzzer_yellow_s] - [buzzer_green_s] - [buzzer_blue_s] - [buzzer_purple_s] - [buzzer_orange_s] - [buzzer_large] - [buzzer_yellow_l] - [buzzer_green_l] - [buzzer_blue_l] - [buzzer_purple_l] - [buzzer_orange_l]
 * Version: 1.3
 * Text Domain: buzzer.best
 * Author: Buzzer.Best
 * Author URI: https://buzzer.best
 */
 
 function klaetkebuzz_wordpress_plugin_demo($atts) {
	$Content .= '<iframe style="border: none; width:125px;height:125px;" src="https://buzzer.best/widget"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_button', 'klaetkebuzz_wordpress_plugin_demo');

 function buzzer_red_wp($atts) {
	$Content .= '<iframe style="border: none; width:50px;height:50px;" src="https://buzzer.best/widget"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_small', 'buzzer_red_wp');

 function buzzer_yellow_wp($atts) {
	$Content .= '<iframe style="border: none; width:125px;height:125px;" src="https://buzzer.best/widget-yellow"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_yellow', 'buzzer_yellow_wp');

 function buzzer_green_wp($atts) {
	$Content .= '<iframe style="border: none; width:125px;height:125px;" src="https://buzzer.best/widget-green"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_green', 'buzzer_green_wp');

 function buzzer_blue_wp($atts) {
	$Content .= '<iframe style="border: none; width:125px;height:125px;" src="https://buzzer.best/widget-blue"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_blue', 'buzzer_blue_wp');

 function buzzer_purple_wp($atts) {
	$Content .= '<iframe style="border: none; width:125px;height:125px;" src="https://buzzer.best/widget-purple"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_purple', 'buzzer_purple_wp');


 function buzzer_orange_wp($atts) {
	$Content .= '<iframe style="border: none; width:125px;height:125px;" src="https://buzzer.best/widget-orange"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_orange', 'buzzer_orange_wp');

 function buzzer_yellow_s_wp($atts) {
	$Content .= '<iframe style="border: none; width:50px;height:50px;" src="https://buzzer.best/widget-yellow"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_yellow_s', 'buzzer_yellow_s_wp');

 function buzzer_green_s_wp($atts) {
	$Content .= '<iframe style="border: none; width:50px;height:50px;" src="https://buzzer.best/widget-green"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_green_s', 'buzzer_green_s_wp');

 function buzzer_blue_s_wp($atts) {
	$Content .= '<iframe style="border: none; width:50px;height:50px;" src="https://buzzer.best/widget-blue"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_blue_s', 'buzzer_blue_s_wp');

 function buzzer_purple_s_wp($atts) {
	$Content .= '<iframe style="border: none; width:50px;height:50px;" src="https://buzzer.best/widget-purple"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_purple_s', 'buzzer_purple_s_wp');


 function buzzer_orange_s_wp($atts) {
	$Content .= '<iframe style="border: none; width:50px;height:50px;" src="https://buzzer.best/widget-orange"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_orange_s', 'buzzer_orange_s_wp');


 function buzzer_yellow_l_wp($atts) {
	$Content .= '<iframe style="border: none; width:500px;height:500px;" src="https://buzzer.best/widget-yellow"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_yellow_l', 'buzzer_yellow_l_wp');

 function buzzer_green_l_wp($atts) {
	$Content .= '<iframe style="border: none; width:500px;height:500px;" src="https://buzzer.best/widget-green"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_green_l', 'buzzer_green_l_wp');

 function buzzer_blue_l_wp($atts) {
	$Content .= '<iframe style="border: none; width:500px;height:500px;" src="https://buzzer.best/widget-blue"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_blue_l', 'buzzer_blue_l_wp');

 function buzzer_purple_l_wp($atts) {
	$Content .= '<iframe style="border: none; width:500px;height:500px;" src="https://buzzer.best/widget-purple"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_purple_l', 'buzzer_purple_l_wp');


 function buzzer_orange_l_wp($atts) {
	$Content .= '<iframe style="border: none; width:500px;height:500px;" src="https://buzzer.best/widget-orange"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_orange_l', 'buzzer_orange_l_wp');

 function buzzer_large_wp($atts) {
	$Content .= '<iframe style="border: none; width:500px;height:500px;" src="https://buzzer.best/widget"></iframe>';
	 
    return $Content;
}

add_shortcode('buzzer_large', 'buzzer_large_wp');
