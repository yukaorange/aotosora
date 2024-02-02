<div class="container">
  <!-- <picture>
    <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top-service.webp' media='(max-width: 780px)' class="lazy" />
    <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/.webp" alt="">
  </picture>
  <div style="width:1000px; height:1000px; background-image: url('<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top-performance.webp');"></div> -->
</div>
<div class="">

  <div class="top-fv">
    <div class="top-fv__slideshow js-slideshow">
      <?php
      $slides = [
        [
          "image" => "top-mv-01",
          "number" => "1"
        ],
        [
          "image" => "top-mv-01",
          "number" => "2"
        ],
        [
          "image" => "top-mv-01",
          "number" => "3"
        ],
        [
          "image" => "top-mv-01",
          "number" => "4"
        ],
      ];
      foreach ($slides as $slide) :
        $slide = $slide["image"];
        $number = $slide["number"];
        var_dump($slide);
      ?>
        <div class="top-fv__slide slide<?php echo esc_html($number); ?>">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($slide); ?>-sp.webp' media='(max-width: 780px)' class="lazy" />
            <img loading="lazy" decoding="async" id="loading" width="640" height="440" data-src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($slide); ?>.webp" alt="">
          </picture>
        </div>
      <?php endforeach; ?>
    </div>
  </div>



  <div class="spacer"></div>
  <div class="spacer"></div>

  <ul class="archive">
    <?php
    if (wp_is_mobile()) {
      $num = 3; // スマホの表示数(全件は-1)
    } else {
      $num = 3; // PCの表示数(全件は-1)
    }
    // $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = [
      'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
      // 'paged' => $paged, // ページネーションがある場合に必要
      'posts_per_page' => $num, // 表示件数
    ];
    $wp_query = new WP_Query($args);
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
        <li class="archive-item">
          <a href="<?php the_permalink(); ?>" class="archive-item__link">
            <div class="archive-item__meta">
              <time class="archive-item__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <div class="archive-item__body">
              <p class="archive-item__text"><?php the_title(); ?></p>
            </div>
          </a>
        </li>
      <?php endwhile;
    else : ?>
      <p>まだ記事がありません</p>
    <?php endif ?>
    <?php wp_reset_postdata(); ?>
  </ul>


  <div class="spacer"></div>

  <div class="cards-factory">
    <?php
    $factories = [
      [
        'title' => 'やまびこ保育園',
        'sub' => 'Nursery school',
        'img' => 'top-yamabiko.webp',
        'img_sp' => 'top-yamabiko-sp.webp',
        'title_logo' => 'logo-yamabiko.webp',
        'title_class' => 'yamabiko',
        'link' => 'yamabiko'
      ],
      [
        'title' => 'PUU A PUU',
        'sub' => 'Nursery school',
        'img' => 'top-nurserypuuapuu.webp',
        'img_sp' => 'top-nurserypuuapuu-sp.webp',
        'title_logo' => 'logo-nurserypuuapuu.webp',
        'title_class' => 'nurserypuuapuu',
        'link' => 'nurserypuuapuu'
      ],
      [
        'title' => 'PUU A PUU etera',
        'sub' => 'Nursery school',
        'img' => 'top-nurserypuuapuuetela.webp',
        'img_sp' => 'top-nurserypuuapuuetela-sp.webp',
        'title_logo' => 'logo-nurserypuuapuuetela.webp',
        'title_class' => 'nurserypuuapuuetela',
        'link' => 'nurserypuuapuuetela'
      ],
      [
        'title' => '森のさんぽみち',
        'sub' => 'Nursery school',
        'img' => 'top-morinosanpomiti.webp',
        'img_sp' => 'top-morinosanpomiti-sp.webp',
        'title_logo' => 'logo-morinosanpomiti.webp',
        'title_class' => 'morinosanpomiti',
        'link' => 'morinosanpomiti'
      ],
      [
        'title' => 'テスの木',
        'sub' => 'Nursery school',
        'img' => 'top-tesunoki.webp',
        'img_sp' => 'top-tesunoki-sp.webp',
        'title_logo' => 'logo-tesnoki.webp',
        'title_class' => 'tesnoki',
        'link' => 'tesnoki'
      ],
      [
        'title' => 'NURSERY ROPE',
        'sub' => 'Nursery school',
        'img' => 'top-nurseryrope.webp',
        'img_sp' => 'top-nurseryrope-sp.webp',
        'title_logo' => 'logo-nurseryrope.webp',
        'title_class' => 'nurseryrope',
        'link' => 'nurseryrope'
      ],
      [
        'title' => '青とそら',
        'sub' => 'Sick kids care',
        'img' => 'top-aotosora.webp',
        'img_sp' => 'top-aotosora-sp.webp',
        'title_logo' => 'logo-aotosora.webp',
        'title_class' => 'aotosora',
        'link' => 'aotosora'
      ],
      [
        'title' => '委託病院内保育事業',
        'sub' => 'Hospital nursery school',
        'img' => 'top-itaku.webp',
        'img_sp' => 'top-itaku-sp.webp',
        'title_logo' => '委託病院内保育事業',
        'title_class' => 'itaku',
        'link' => 'itaku'
      ]
    ];
    foreach ($factories as $factory) :
      $title = $factory['title'];
      $title_logo = $factory['title_logo'];
      $title_class = $factory['title_class'];
      $sub = $factory['sub'];
      $img = $factory['img'];
      $img_sp = $factory['img_sp'];
      $link = $factory['link'];
    ?>
      <div class="card-factory">
        <div class="card-factory__figure">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img_sp); ?>' media='(max-width: 780px)' class="lazy" />
            <img width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img); ?>" alt="<?php echo  esc_html($title); ?>">
          </picture>
        </div>
        <div class="card-factory__body">
          <div class="card-factory__sub _en"><?php echo  esc_html($sub); ?></div>
          <div class="card-factory__title">
            <?php if ($title_logo != "委託病院内保育事業") {; ?>
              <h3 class="<?php echo  esc_html($title_class); ?>">
                <img width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/<?php echo esc_html($title_logo); ?>" alt="<?php echo  esc_html($title); ?>">
              </h3>
            <?php } else { ?>
              <h3 class="card-factory__heading _kiwi"><?php echo  esc_html($title_logo); ?></h2>
              <?php }; ?>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url($link)); ?>" class="card-factory__link"></a>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="spacer"></div>

  <div class="header-en">
    <h2 class="header-en__heading _en">
      Factory
    </h2>
  </div>

  <div class="spacer"></div>
  <div class="spacer"></div>

  <a href="#" class="panel-concept">
    <div class="panel-concept__inner">
      <div class="panel-concept__lead _en">
        Concept
      </div>
      <div class="panel-concept__title">
        <span class="_serif">TOMORROW COMPANYの保育方針</span>
        <span class="arrow arrow--red">
          <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
            <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
          </svg>
        </span>
      </div>
    </div>
  </a>


  <div class="spacer"></div>

  <ul class="list-movie">
    <li class="item-movie">
      <a href="#" class="item-movie__inner">
        <div class="item-movie__icon">
          <img class="icon-youtube" width="88" height="62" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/icon/icon-youtube.webp" alt="youtubeへのリンク">
        </div>
        <div class="item-movie__body">
          <p class="item-movie__text _serif">各施設の紹介動画をみてみる</p>
          <span class="arrow arrow--black">
            <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
              <path d="M10.5 4.0625L0.5 0.5625L2.72222 4.0625L0.5 7.5625L10.5 4.0625Z" fill="#333333" />
            </svg>
          </span>
        </div>
      </a>
    </li>
    <li class="item-movie">
      <a href="#" class="item-movie__inner">
        <div class="item-movie__icon">
          <img class="icon-picture" width="158" height="105" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/top-brandbook.webp" alt="brandbookへのリンクアイコン">
        </div>
        <div class="item-movie__body">
          <p class="item-movie__text _serif">BRAND BOOKが発行されました</p>
          <span class="arrow arrow--black">
            <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
              <path d="M10.5 4.0625L0.5 0.5625L2.72222 4.0625L0.5 7.5625L10.5 4.0625Z" fill="#333333" />
            </svg>
          </span>
        </div>
      </a>
    </li>
  </ul>


  <div class="spacer"></div>

  <div class="spacer"></div>


</div>