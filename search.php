<?php get_header(); ?>
  <div class="main-wrapper">
    <main class="main">
      <section class="main-content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="main-content__article">
          <div class="article-img">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="<?php bloginfo('template_url'); ?>/img/no_img.jpg" alt="">
              <?php endif; ?>
            </a>
          </div>
          <header class="article-header">
            <span class="article-header__txt"><img src="<?php bloginfo('template_url'); ?>/img/article-autor.jpg" alt=""><span class="txt--orange"><?php the_author(); ?></span> - <?php the_time('M jS, Y') ?></span>
            <span class="article-header__txt right"><img src="<?php bloginfo('template_url'); ?>/img/article-comm.jpg" alt=""><span class="txt--orange"> <?php comments_popup_link('Нет комментариев', '1 комментарий', '% комментариев'); ?> </span></span>
          </header>
          <a href="<?php the_permalink(); ?>">
            <h1 class="article-capture">
              <?php the_title(); ?>
            </h1>
          </a>
          <div class="article-txt">
            <?php the_excerpt(); ?>
          </div>
          <footer class="article-footer">
            <a href="<?php the_permalink(); ?>">Read More</a>
          </footer>
        </article>
        <hr>

        <?php endwhile; ?>
        <?php else: ?>
          <p>По Вашему запросу ничего не найдено</p>
        <?php endif; ?>

<!--
        <div class="pagination">
          <ul>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li>of</li>
            <li><a href="">75</a></li>
            <li><a href="">Next</a></li>
          </ul>
        </div> -->
      </section>
      <?php get_sidebar(); ?>
    </main>
  </div>
  <?php get_footer(); ?>