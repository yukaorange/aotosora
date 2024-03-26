<?php get_header(); ?>
<main class="main">
  <div class="common-pageheader">
    <h1 class="common-pageheader__title _en" data-splitting>
      <?php the_title(); ?>
    </h1>
  </div>
  <section class="section single-news">
    <div class="single-news__body">
      <div class="content-post">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>