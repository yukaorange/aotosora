<?php
/*
Template Name: ＲＯＰＥ（大分県大分市）
*/
get_header(); ?>
<main class="main">
  <div class="common-pagemv">
    <div class="common-pagemv__header">
      <h1 class="common-pagemv__title common-pagemv__title--gardens _en">
        <picture>
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($post->post_name); ?>/<?php echo esc_html($post->post_name); ?>-logo-mv-sp.webp' media='(max-width: 780px)' />
          <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($post->post_name); ?>/<?php echo esc_html($post->post_name); ?>-logo-mv.webp" alt="">
        </picture>
      </h1>
      <div class="common-pagemv__sub">
        大分県大分市
      </div>
    </div>
    <div class="common-pagemv__inner">
      <div class="common-pagemv__mainview">
        <picture>
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html(my_page_mainview_sp()); ?>' media='(max-width: 780px)' />
          <img decoding="auto" width="640" height="440" id="loading" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html(my_page_mainview()); ?>" alt="">
        </picture>
      </div>
    </div>
  </div>
  <!-- announce -->
  <section class="section gardens-announce">
    <div class="content-announce js-reveal" data-splitting>
      <div class="content-announce__header">
        <h2 class="content-announce__heading">
          <div class="content-announce__heading-row1 _serif">
            一人ひとりと丁寧に
          </div>
          <div class="content-announce__heading-row2 _serif">
            目線をあわせ、<br class="_sp">言葉をかわす
          </div>
          <div class="content-announce__heading-row3 _serif">
            豊かで温かい環境を<br class="_sp">約束する
          </div>
        </h2>
      </div>
      <div class="content-announce__body">
        <p class="content-announce__text">
          子ども一人ひとりと丁寧に寄り添い本質を育てる大切な時期、０歳児～２歳児のみの少人数制の保育園となります。乳児期だからこそ初めての出会いを全身、五感で感じとるため人、物すべてを近くで感じ取ることができる安心安全にとんだ環境です。また、３歳児からはグループ園のテスの木、森のさんぽ道に自動進級します。
        </p>
      </div>
    </div>
  </section>
  <!-- images -->
  <section class="section gardens-gallery">
    <div class="panel-images">
      <?php $images = [
        [
          "pc" => "nurseryrope/nurseryrope-01.webp",
          "sp" => "nurseryrope/nurseryrope-01-sp.webp"
        ],

        [
          "pc" => "nurseryrope/nurseryrope-02.webp",
          "sp" => "nurseryrope/nurseryrope-02-sp.webp"
        ],
        [
          "pc" => "nurseryrope/nurseryrope-03.webp",
          "sp" => "nurseryrope/nurseryrope-03-sp.webp"
        ],
        [
          "pc" => "nurseryrope/nurseryrope-04.webp",
          "sp" => "nurseryrope/nurseryrope-04-sp.webp"
        ]
      ];
      foreach ($images as $image) :
        $pc = $image['pc'];
        $sp = $image['sp'];; ?>
        <div class="panel-images__item">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($sp); ?>' media='(max-width: 780px)' />
            <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($pc); ?>" alt="">
          </picture>
        </div>
      <?php endforeach; ?>

    </div>
    <!-- <div class="swiper swiper-intro js-swiper-intro">
      <div class="swiper-wrapper swiper-intro__wrapper">
        <?php $slides = [
          [
            "pc" => "nurseryrope/nurseryrope-01.webp",
            "sp" => "nurseryrope/nurseryrope-01-sp.webp"
          ],

          [
            "pc" => "nurseryrope/nurseryrope-02.webp",
            "sp" => "nurseryrope/nurseryrope-02-sp.webp"
          ],
          [
            "pc" => "nurseryrope/nurseryrope-03.webp",
            "sp" => "nurseryrope/nurseryrope-03-sp.webp"
          ],
          [
            "pc" => "nurseryrope/nurseryrope-04.webp",
            "sp" => "nurseryrope/nurseryrope-04-sp.webp"
          ]
        ];
        foreach ($slides as $slide) :
          $pc_slide = $slide['pc'];
          $sp_slide = $slide['sp'];; ?>
          <div class="swiper-slide swiper-intro__slide js-swiper-intro__slide">
            <picture>
              <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($sp_slide); ?>' media='(max-width: 780px)' />
              <img loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($pc_slide); ?>" alt="">
            </picture>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-intro__nav js-swiper-intro__nav"></div>
    </div>
    <div class="swiper-intro__controler">
      <div class="swiper-intro__button-prev js-swiper-intro__button-prev"></div>
      <div class="swiper-intro__button-next js-swiper-intro__button-next"></div>
    </div> -->
  </section>
  <!-- movie -->
  <section class="section gardens-movie">
    <a href="#" target="_blank" class="panel-movie panel-movie--yamabiko">
      <div class="panel-movie__inner">
        <div class="panel-movie__header">
          <div class="panel-movie__lead _en js-reveal" data-reveal>
            Movie
          </div>
          <div class="panel-movie__sub _en js-reveal" data-reveal>
            A Day of Nursery Moive
          </div>
        </div>
        <div class="panel-movie__button js-fadein">
          <div class="button-default">
          </div>
        </div>
      </div>
    </a>
  </section>
  <!-- overview -->
  <section class="section gardens-overview">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>園概要</h2>
    </div>
    <div class="gardens-overview__body">
      <dl class="list-summary">

        <?php
        $summary = [
          [
            "term" => "名称",
            "desc" => "ROPE"
          ],
          [
            "term" => "種類",
            "desc" => "小規模認可保育園"
          ],
          [
            "term" => "開設",
            "desc" => "2020年"
          ],
          [
            "term" => "所在地",
            "desc" => "〒870-0954<br>大分県大分市下郡中央3丁目8番24号"
          ],
          [
            "term" => "TEL",
            "desc" => "097-560-5088"
          ],
          [
            "term" => "FAX",
            "desc" => "097-560-5089"
          ],
          [
            "term" => "開所時間",
            "desc" => "7:00～19:00"
          ],
          [
            "term" => "定 員",
            "desc" => "18名（0歳児～2歳児）"
          ],
        ];
        foreach ($summary as $item) :
          $term = $item['term'];
          $desc = $item['desc'];

        ?>
          <div class="item-summary">
            <div class="item-summary__inner">
              <dt class="item-summary__term _serif"><?php echo esc_html($term); ?></dt>
              <dd class="item-summary__desc _serif"><?php echo $desc; ?></dd>
            </div>
          </div>
        <?php endforeach; ?>
      </dl>
    </div>
  </section>
  <!-- map -->
  <section class="section gardens-map">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>MAP</h2>
    </div>
    <div class="gardens-map__map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.5569239348447!2d131.634475211393!3d33.22571026080991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35469f03721adf21%3A0x77fbf66fab3b7ad8!2z44CSODcwLTA5NTQg5aSn5YiG55yM5aSn5YiG5biC5LiL6YOh5Lit5aSu77yT5LiB55uu77yY4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1702985102514!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="gardens-map__button">
      <a href="<?php echo esc_url(home_url("introduction")); ?>" class="button-more">
        <span class="button-more__text _serif">
          他の保育施設紹介
        </span>
        <span class="arrow arrow--red">
          <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
            <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
          </svg>
        </span>
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>