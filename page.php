<?php get_header(); ?>
  <div class="main-wrapper">
    <main class="main">
      <section class="main-content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="main-content__article">
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
      </section>
      <?php get_sidebar(); ?>
    </main>
  </div>
  <?php get_footer(); ?>