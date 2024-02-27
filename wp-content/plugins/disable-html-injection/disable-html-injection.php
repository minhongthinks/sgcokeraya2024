<?php
/*
Plugin Name: Disable HTML Injection
Description: Disables HTML injection by removing HTML code from user input.
Version: 1.2
Author: Cloudix
*/

// Disable HTML injection in user-generated content
function disable_html_injection($content) {
    if (is_user_logged_in()) {
        $content = wp_strip_all_tags($content);
    }
    return $content;
}

// Disable HTML injection in post content
add_filter('the_content', 'disable_html_injection');

// Disable HTML injection in post excerpts
add_filter('the_excerpt', 'disable_html_injection');

// Disable HTML injection in widget areas
add_filter('widget_text_content', 'disable_html_injection');
add_filter('widget_text_content', 'shortcode_unautop');
add_filter('widget_text_content', 'prepend_attachment');

// Disable HTML injection in post titles
function disable_html_in_post_titles($title) {
    $title = wp_strip_all_tags($title);
    return $title;
}
add_filter('the_title', 'disable_html_in_post_titles', 10, 2);

// Disable HTML injection in comments
function disable_html_injection_comments($data) {
    $data['comment_content'] = wp_strip_all_tags($data['comment_content']);
    return $data;
}
add_filter('preprocess_comment', 'disable_html_injection_comments');
