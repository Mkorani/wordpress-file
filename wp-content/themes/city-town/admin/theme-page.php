<?php
// Exit if accessed directly.
if (! defined('ABSPATH')) {
  exit;
}

/**
 * Add Theme Page under Appearance
 */
if (! function_exists('city_town_add_theme_page')) {
  function city_town_add_theme_page()
  {
    add_theme_page(
      __('Theme Info', 'city-town'),
      __('Theme Info', 'city-town'),
      'edit_theme_options',
      'city-town-page',
      'city_town_render_theme_page'
    );
  }
}
add_action('admin_menu', 'city_town_add_theme_page');

/**
 * Callback to render the theme page content
 * Allow to override in a child theme.
 */
if (! function_exists('city_town_render_theme_page')) {
  function city_town_render_theme_page()
  {
    require_once get_theme_file_path('admin/theme-page-template.php');
  }
}
