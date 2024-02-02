<?php
/*
Template Name: PUU A PUU etela（大分県別府市）
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
        大分県別府市
      </div>
    </div>
    <div class="common-pagemv__inner">
      <div class="common-pagemv__mainview">
        <picture>
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html(my_page_mainview_sp()); ?>' media='(max-width: 780px)' />
          <img width="640" height="440" id="loading" data-src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html(my_page_mainview()); ?>" alt="">
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
            ０歳児～２歳児が<br class="_sp">心地よく過ごす
          </div>
          <div class="content-announce__heading-row2 _serif">
            PUU A PUUの分園
          </div>
        </h2>
      </div>
      <div class="content-announce__body">
        <p class="content-announce__text">
          PUU A PUUの分園となる「PUU A PUU etela」。やわらかな陽光が差し込む保育室、園庭であたたかい保育を行っています。０歳児～２歳児までの少人数で集団生活する場において保育者は一人ひとりに寄り添うことを大切にしています。なぜなら乳幼児期は心身ともに大きく変化し成長が著しい時期だからです。また３歳児～５歳児の異年齢交流も行っています。
        </p>
      </div>
    </div>
  </section>
  <!-- images -->
  <section class="section gardens-gallery">
    <div class="panel-images">
      <?php $images = [
        [
          "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-01.webp",
          "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-01-sp.webp"
        ],

        [
          "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-02.webp",
          "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-02-sp.webp"
        ],
        [
          "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-03.webp",
          "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-03-sp.webp"
        ],
        [
          "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-04.webp",
          "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-04-sp.webp"
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
            "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-01.webp",
            "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-01-sp.webp"
          ],

          [
            "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-02.webp",
            "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-02-sp.webp"
          ],
          [
            "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-03.webp",
            "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-03-sp.webp"
          ],
          [
            "pc" => "nurserypuuapuuetela/nurserypuuapuuetela-04.webp",
            "sp" => "nurserypuuapuuetela/nurserypuuapuuetela-04-sp.webp"
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
            "desc" => "PUU A PUU etela"
          ],
          [
            "term" => "種類",
            "desc" => "認可保育園"
          ],
          [
            "term" => "開設",
            "desc" => "2020年"
          ],
          [
            "term" => "所在地",
            "desc" => "〒874-0919<br>大分県別府市石垣東2丁目5-12"
          ],
          [
            "term" => "TEL",
            "desc" => "0977-80-7575"
          ],
          [
            "term" => "FAX",
            "desc" => "0977-80-7576"
          ],
          [
            "term" => "開所時間",
            "desc" => "7:30～18:30"
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.066757848974!2d131.4937967113952!3d33.29091645743544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546a71e07bfb405%3A0x6c7fcd89164f56ef!2z44CSODc0LTA5MTkg5aSn5YiG55yM5Yil5bqc5biC55-z5Z6j5p2x77yS5LiB55uu77yV4oiS77yR77yS!5e0!3m2!1sja!2sjp!4v1702984900487!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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