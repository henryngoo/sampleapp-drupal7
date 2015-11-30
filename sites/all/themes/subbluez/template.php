<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 */

function subbluez_preprocess_page(&$vars) {
    $vars['main_menu_tree'] = menu_tree_output(menu_tree_all_data('main-menu'));
    $vars['slideshow_display'] = theme_get_setting('slideshow_display', 'subbluez');
    $vars['footer_developed'] = theme_get_setting('footer_developed', 'subbluez');

    //Columns
    $vars['col1'] = filter_xss_admin(theme_get_setting('colone', 'subbluez'));
    $vars['col1title'] = filter_xss_admin(theme_get_setting('colonetitle', 'subbluez'));
    $vars['col2'] = filter_xss_admin(theme_get_setting('coltwo', 'subbluez'));
    $vars['col2title'] = filter_xss_admin(theme_get_setting('coltwotitle', 'subbluez'));
    $vars['col3'] = filter_xss_admin(theme_get_setting('colthree', 'subbluez'));
    $vars['col3title'] = filter_xss_admin(theme_get_setting('colthreetitle', 'subbluez'));

    //Welcome
    $vars['wtitle'] = filter_xss_admin(theme_get_setting('welcome_title', 'subbluez'));
    $vars['wtext'] = filter_xss_admin(theme_get_setting('welcome_text', 'subbluez'));

    //Social
    $vars['twitter'] = theme_get_setting('twitter', 'subbluez');
    $vars['facebook'] = theme_get_setting('facebook', 'subbluez');
    $vars['linkedin'] = theme_get_setting('linkedin', 'subbluez');
    $vars['theme_path_social'] = base_path() . drupal_get_path('theme', 'subbluez');
    $vars['display'] = theme_get_setting('display', 'subbluez');
}