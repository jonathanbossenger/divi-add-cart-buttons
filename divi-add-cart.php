<?php
/*
 * Plugin Name: Divi Add Cart
 * Version: 1.0
 * Plugin URI: http://www.psykrotek.co.za/
 * Description: Include Add to Cart buttons to all Product archive pages.
 * Author: Jonathan Bossenger
 * Author URI: http://www.psykrotek.co.za/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: divi-add-cart
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Jonathan Bossenger
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// register add to cart action
function dac_add_cart_button () {
	add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'after_setup_theme', 'dac_add_cart_button' );

function dac_load_plugin_css() {
	$plugin_url = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'dac_style', $plugin_url . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'dac_load_plugin_css' );
