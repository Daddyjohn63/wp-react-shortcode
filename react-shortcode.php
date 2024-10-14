<?php
/**
 * Plugin Name: React With Shortcode
 * Description: A plugin that renders a React component using a shortcode
 * Version: 1.0
 * Author: John Paul
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function react_awesome_shortcode() {
    return '<div id="react-app-jp"></div>';
}

function enqueue_react_awesome_script() {
    // Check if the shortcode is present
    $has_shortcode = has_shortcode(get_post()->post_content, 'react_awesome');
    error_log('Shortcode present: ' . ($has_shortcode ? 'Yes' : 'No'));

    if ($has_shortcode) {
        // Enqueue wp-element (React wrapper)
        wp_enqueue_script('wp-element');

        // Register and enqueue your custom script
        $script_path = plugin_dir_url(__FILE__) . 'build/index.js';
        error_log('Script path: ' . $script_path);

        wp_register_script(
            'react-awesome-script',
            $script_path,
            array('wp-element'), // No wp-react-jsx-runtime dependency
            filemtime(plugin_dir_path(__FILE__) . 'build/index.js'),
            true // Load in the footer
        );
        wp_enqueue_script('react-awesome-script');

        // Debugging output to confirm if script is enqueued
        if (wp_script_is('react-awesome-script', 'enqueued')) {
            error_log('react-awesome-script is enqueued');
        } else {
            error_log('react-awesome-script is not enqueued');
        }
    }
}

function init_react_awesome_shortcode() {
    add_shortcode('react_awesome', 'react_awesome_shortcode');
}

add_action('init', 'init_react_awesome_shortcode');
add_action('wp_enqueue_scripts', 'enqueue_react_awesome_script');

