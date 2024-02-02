<?php get_header(); ?>
<main class="main">
  <div class="common-pageheader">
    <h1 class="common-pageheader__title _en" data-splitting>
      News
    </h1>
  </div>
  <section class="section single-news">
    <div class="single-news__body">
      <div class="content-post">
        <?php the_content(); ?>
      </div>
      <div class="single-news__pagination">
        <?php
        the_post_navigation(array(
          'prev_text' => '前へ',
          'next_text' => '次へ',
        ));
        ?>
        <?php
        $h = $_SERVER['HTTP_HOST'];
        if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'], $h) !== false)) {
        ?>
          <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="button-more button-more--small">
            <span class="button-more__text _en">
              Back
            </span>
            <span class="arrow arrow--red">
              <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
              </svg>
            </span>
          </a>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>