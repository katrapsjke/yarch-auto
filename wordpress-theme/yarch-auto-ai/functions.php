<?php
if (!defined('ABSPATH')) {
  exit;
}

function yarch_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'yarch_theme_setup');

function yarch_asset_url($path) {
  return trailingslashit(get_template_directory_uri()) . ltrim($path, '/');
}

function yarch_page_url($slug = '') {
  if ($slug === '' || $slug === '/') {
    return home_url('/');
  }

  $page = get_page_by_path(trim($slug, '/'), OBJECT, 'page');
  if ($page instanceof WP_Post) {
    return get_permalink($page);
  }

  return home_url('/' . trim($slug, '/') . '/');
}
