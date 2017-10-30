<?php get_header(); ?>
  <div class="main-wrapper">
    <main class="main">
      <section class="main-content">

        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

          <article class="main-content__article">

          <header class="article-header article-header_page">
            <span class="article-header__txt"><img src="<?php bloginfo('template_url'); ?>/img/article-autor.jpg" alt=""><span class="txt--orange"><?php the_author(); ?></span> - <?php the_time('M jS, Y'); ?></span>
            <span class="article-header__txt right"><img src="<?php bloginfo('template_url'); ?>/img/article-comm.jpg" alt=""><span class="txt--orange"><?php comments_popup_link('Нет комментариев', '1 комментарий', '% комментариев'); ?></span></span>
          </header>
            <h1 class="article-capture article-capture_page">
              <?php the_title(); ?>
            </h1>
          <div class="article-txt article-txt_page">
            <?php the_content(); ?>
          </div>

        </article>
        <hr>

        <?php endwhile; ?>
        <?php endif; ?>

        <div class="pagination pagination_page">
          <?php previous_post_link('<span>&laquo; %link</span>'); next_post_link('<span>%link &raquo;</span>'); ?>
        </div>
        <?php comments_template(); ?>
      </section>
      <?php get_sidebar(); ?>
    </main>
  </div>
  <?php get_footer(); ?>