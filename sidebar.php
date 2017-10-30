<aside class="sidebar">
  <div class="sidebar__widget">
    <div class="widget__search">
      <form action="" method="get">
        <input class="search-txt" type="text" name="s" value="" placeholder="Поиск">
          <input class="search-btn" type="image" src="<?php bloginfo('template_url'); ?>/img/lop.png">
      </form>
    </div>
  </div>
  <?php if (!dynamic_sidebar('sidebar')): ?>
  <?php endif; ?>

  <div class="sidebar__widget">
    <div class="widget_facebook">
      <img src="<?php bloginfo('template_url'); ?>/img/facebook.jpg" alt="">
    </div>
  </div>
</aside>