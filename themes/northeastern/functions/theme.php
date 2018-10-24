<?php

  if (!isset($content_width))
  {
      $content_width = 900;
  }

  if (function_exists('add_theme_support'))
  {
      // Add Menu Support
      add_theme_support('menus');

      // Enables post and comment RSS feed links to head
      // add_theme_support('automatic-feed-links');

      // Localisation Support
      // load_theme_textdomain('northeastern', get_template_directory() . '/languages');
  }

  // Remove invalid rel attribute values in the categorylist
  function remove_category_rel_from_category_list($thelist)
  {
      return str_replace('rel="category tag"', 'rel="tag"', $thelist);
  }

  // Add page slug to body class, love this - Credit: Starkers Wordpress Theme
  function add_slug_to_body_class($classes)
  {
      global $post;
      if (is_home()) {
          $key = array_search('blog', $classes);
          if ($key > -1) {
              unset($classes[$key]);
          }
      } elseif (is_page()) {
          $classes[] = sanitize_html_class($post->post_name);
      } elseif (is_singular()) {
          $classes[] = sanitize_html_class($post->post_name);
      }

      return $classes;
  }

?>
