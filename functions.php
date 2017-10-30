<?php
/**
* загружаемые скрипты и стили
*/
  function load_style_script() {
    wp_enqueue_script('my_jquery', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
    wp_enqueue_script('FancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_style('my_css', get_template_directory_uri() . '/style.css');
  }
  add_action('wp_enqueue_scripts', 'load_style_script');

  /*
  * поддержка миниатюр
  */

  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size('180', '180');

  /**
  * виджеты
  */
  register_sidebar(array(
    'name' => 'Меню',
    'id' => 'menu_header',
    'before_widget' => '<ul class="menu">',
    'after_widget' => '</ul>'
  ));
    register_sidebar(array(
    'name' => 'Меню social',
    'id' => 'menu_soc',
    'before_widget' => '<ul class="menu-social">',
    'after_widget' => '</ul>'
  ));
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '<div class="footer__blocks %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="footer__capture">',
    'after_title'   => '</h2>'
  ));

  /*
  * баннер
  */
  function banner_posts(){
    register_post_type('banner', array(
      'labels'             => array(
      'name'               => 'Баннеры', // Основное название типа записи
      'singular_name'      => 'Баннер', // отдельное название записи типа Book
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Добавить новый баннер',
      'edit_item'          => 'Редактировать баннер',
      'new_item'           => 'Новая баннер',
      'view_item'          => 'Посмотреть баннер',
      'search_items'       => 'Найти баннер',
      'not_found'          =>  'баннер не найден',
      'not_found_in_trash' => 'В корзине баннер не найден',
      'parent_item_colon'  => '',
      'menu_name'          => 'Баннеры'

      ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title','thumbnail')
      )
    );
  }
  add_action('init', 'banner_posts');

  /*
  * слайдер
  */
  function slider_posts(){
    register_post_type('slider', array(
      'labels'             => array(
      'name'               => 'Слайдер', // Основное название типа записи
      'singular_name'      => 'Слайдер', // отдельное название записи типа Book
      'add_new'            => 'Добавить новое',
      'add_new_item'       => 'Добавить новое изображение',
      'edit_item'          => 'Редактировать изображение',
      'new_item'           => 'Новое изображение',
      'view_item'          => 'Посмотреть изображение',
      'search_items'       => 'Найти изображение',
      'not_found'          =>  'изображение не найдено',
      'not_found_in_trash' => 'В корзине изображение не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Слайдер'

      ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title','thumbnail')
      )
    );
  }
  add_action('init', 'slider_posts');

 ?>