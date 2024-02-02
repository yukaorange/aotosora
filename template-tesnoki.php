<?php
/*
Template Name: テスの木（大分県大分市）
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
            生きる基礎となる
          </div>
          <div class="content-announce__heading-row2 _serif">
            「学ぶ力」「体の力」<br class="_sp">「心の力」を育てる
          </div>
          <div class="content-announce__heading-row3 _serif">
            子どもの可能性を<br class="_sp">引き出す保育を提供
          </div>
        </h2>
      </div>
      <div class="content-announce__body">
        <p class="content-announce__text">
          将来社会で生きる基礎となる「学ぶ力」「体の力」「心の力」を育てていく活動に力を入れています。挑戦しできなかったことがはじめてできたとき、子ども達はとびっきりの笑顔をみせてくれます。　̏やればできる˝その「心の力」を保育者と共に共感、共有していく事を大切にしています。また豊かな園庭で自然とたわむれ、自然の美しさに対する感性を高めます。
        </p>
      </div>
    </div>
  </section>
  <!-- images -->
  <section class="section gardens-gallery">
    <div class="panel-images">
      <?php $images = [
        [
          "pc" => "tesunoki/tesunoki-01.webp",
          "sp" => "tesunoki/tesunoki-01-sp.webp"
        ],

        [
          "pc" => "tesunoki/tesunoki-02.webp",
          "sp" => "tesunoki/tesunoki-02-sp.webp"
        ],
        [
          "pc" => "tesunoki/tesunoki-03.webp",
          "sp" => "tesunoki/tesunoki-03-sp.webp"
        ],
        [
          "pc" => "tesunoki/tesunoki-04.webp",
          "sp" => "tesunoki/tesunoki-04-sp.webp"
        ]
      ];
      foreach ($images as $image) :
        $pc = $image['pc'];
        $sp = $image['sp'];; ?>
        <div class="panel-images__item">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($sp); ?>' media='(max-width: 780px)' />
            <img loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html($pc); ?>" alt="">
          </picture>
        </div>
      <?php endforeach; ?>

    </div>
    <!-- <div class="swiper swiper-intro js-swiper-intro">
      <div class="swiper-wrapper swiper-intro__wrapper">
        <?php $slides = [
          [
            "pc" => "tesunoki/tesunoki-01.webp",
            "sp" => "tesunoki/tesunoki-01-sp.webp"
          ],

          [
            "pc" => "tesunoki/tesunoki-02.webp",
            "sp" => "tesunoki/tesunoki-02-sp.webp"
          ],
          [
            "pc" => "tesunoki/tesunoki-03.webp",
            "sp" => "tesunoki/tesunoki-03-sp.webp"
          ],
          [
            "pc" => "tesunoki/tesunoki-04.webp",
            "sp" => "tesunoki/tesunoki-04-sp.webp"
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
            "desc" => "テスの木"
          ],
          [
            "term" => "種類",
            "desc" => "認可保育園"
          ],
          [
            "term" => "開設",
            "desc" => "2018年"
          ],
          [
            "term" => "所在地",
            "desc" => "〒870-0954<br>大分県大分市下郡中央3丁目8番10号"
          ],
          [
            "term" => "TEL",
            "desc" => "097-567-2080"
          ],
          [
            "term" => "FAX",
            "desc" => "097-567-2081"
          ],
          [
            "term" => "開所時間",
            "desc" => "7:00～19:00"
          ],
          [
            "term" => "定 員",
            "desc" => "60名（0歳児～5歳児）"
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.5569239348447!2d131.634475211393!3d33.22571026080991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35469f03721adf21%3A0x77fbf66fab3b7ad8!2z44CSODcwLTA5NTQg5aSn5YiG55yM5aSn5YiG5biC5LiL6YOh5Lit5aSu77yT5LiB55uu77yY4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1702984985964!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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