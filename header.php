 <!DOCTYPE html>
<html lang="ru">
<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <?php wp_head(); ?>
</head>
<body>
  <div class="header-wrapper">
    <header class="header">
      <div class="header-logo">
        <a href="https://netmag.000webhostapp.com">
          <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
        </a>
      </div>
      <div class="header-banner">
      <?php $banner = new WP_Query(array('post_type' => 'banner', 'posts_per_page' => 1));
            if ($banner->have_posts()) : while ($banner->have_posts()) : $banner->the_post();
            the_post_thumbnail('full');
            endwhile;
            endif;
      ?>
      </div>
    </header>
  </div>
  <div class="nav-wrapper">
    <nav class="menu-main">
      <?php if (!dynamic_sidebar('menu_header')): ?>
        <!-- статическое меню если виджет не работает -->
      <ul class="menu">
        <li><a href="https://netmag.000webhostapp.com">Home</a></li>
        <li><a href="https://netmag.000webhostapp.com/?page_id=5">About Me</a></li>
        <li><a href="https://netmag.000webhostapp.com/?page_id=13">Contact Me</a></li>
      </ul>
      <?php endif; ?>
      <?php if (!dynamic_sidebar('menu_soc')): ?>
        <!-- статическое меню если виджет не работает -->
        <ul class="menu-social">
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/B.png"></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/YT.png"></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/F.png"></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/T.png"></a></li>
        </ul>
      <?php endif; ?>
    </nav>
  </div>