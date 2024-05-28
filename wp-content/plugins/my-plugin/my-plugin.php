<?php
/**
 * Plugin Name: My Plugin
 * Description: This is a test plugin
 * Version: 0.1
 * Author: Anshal
 */

if (!defined('ABSPATH')) {
    header("Location: /plugin.development");
    die("");
}

// Activation hook function
function my_plugin_activation() {
    // Activation code here
}
register_activation_hook(__FILE__, 'my_plugin_activation');

// Deactivation hook function
function my_plugin_deactivation() {
    // Deactivation code here
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivation');

// Shortcode function
function my_sc_fun() {
    return 'Function Call';
}
add_shortcode('my-sc', 'my_sc_fun');
