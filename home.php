<?php get_header(); ?>
<main class="main">
  <div class="common-pagemv">
    <div class="header-level1">
      <h1 class="header-level1__heading _en" data-splitting>
        News
      </h1>
    </div>
    <div class="common-pagemv__inner">
      <div class="common-pagemv__mainview">
        <picture>
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/news/news-mv-sp.webp' media='(max-width: 780px)' />
          <img width="640" height="440" id="loading" decoding="async" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/news/news-mv.webp" alt="">
        </picture>
      </div>
    </div>
  </div>
  <section class="section news-archive">
    <div class="news-archive__body">
      <ul class="archives">
        <?php
        if (wp_is_mobile()) {
          $num = 10; // スマホの表示数(全件は-1)
        } else {
          $num = 10; // PCの表示数(全件は-1)
        }
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
          'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
          'paged' => $paged, // ページネーションがある場合に必要
          'posts_per_page' => $num, // 表示件数
        ];
        $wp_query = new WP_Query($args);
        if (have_posts()) : while (have_posts()) : the_post();
        ?>
            <li class="archive">
              <a href="<?php the_permalink(); ?>" class="archive__link _serif">
                <div class="archive__inner">
                  <p class="archive__meta"><?php the_time('Y.m.j'); ?>
                  </p>
                  <div class="archive__title">
                    <?php the_title(); ?>
                  </div>
                </div>
              </a>
            </li>
          <?php endwhile;
        else : ?>
          <p><?php esc_html('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
      <div class="archive__pagination _serif">
        <?php
        the_posts_pagination(array(
          'mid_size' => 4,
          'prev_text' => '&lt',
          'next_text' => '&gt'
        ));
        ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>