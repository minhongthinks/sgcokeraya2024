<?php
/*
Plugin Name: Security Fixer
Description: A WordPress plugin to address security issues.
Version: 1.0
Author: Your Name
*/

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Prevent directory listing
if (!defined('ABSPATH')) {
    exit;
}

// Secure session cookies attributes
function secure_session_cookies() {
    session_set_cookie_params([
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict',
    ]);
}
add_action('init', 'secure_session_cookies');

// Set session timeout to 1 minute
function set_session_timeout() {
    ini_set('session.gc_maxlifetime', 3600); // 1 minute in seconds
}
add_action('init', 'set_session_timeout');


// Disable information disclosure in robots.txt
function disable_robots_txt($output, $public) {
    if (!$public) {
        $output .= "User-agent: *\n";
        $output .= "Disallow: /\n";
    }
    return $output;
}
add_filter('pre_option_blog_public', 'disable_robots_txt', 10, 2);
