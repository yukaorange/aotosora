<?php
/*
Template Name: 森のさんぽ道
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
            リズムよくつづく<br class="_sp">五角形の窓がシンボル
          </div>
          <div class="content-announce__heading-row2 _serif">
            緑豊かな環境で<br class="_sp">園児の心に癒しを与える
          </div>
        </h2>
      </div>
      <div class="content-announce__body">
        <p class="content-announce__text">
          園舎内の樹木から季節の移り変わりや風を感じたり、土・風・光・人・緑が融合する環境で保育方針でもある「学ぶ」楽しさが子どもの表情も光かがやかせていきます。子どもの可能性は保育者の想像以上に高いことから学習カリキュラムをとりいれ挑戦し、出来た喜びを共感し、保育・教育に力を入れています。
        </p>
      </div>
    </div>
  </section>
  <!-- images -->
  <section class="section gardens-gallery">
    <div class="panel-images">
      <?php $images = [
        [
          "pc" => "morinosanpomiti/morinosanpomiti-01.webp",
          "sp" => "morinosanpomiti/morinosanpomiti-01-sp.webp"
        ],

        [
          "pc" => "morinosanpomiti/morinosanpomiti-02.webp",
          "sp" => "morinosanpomiti/morinosanpomiti-02-sp.webp"
        ],
        [
          "pc" => "morinosanpomiti/morinosanpomiti-03.webp",
          "sp" => "morinosanpomiti/morinosanpomiti-03-sp.webp"
        ],
        [
          "pc" => "morinosanpomiti/morinosanpomiti-04.webp",
          "sp" => "morinosanpomiti/morinosanpomiti-04-sp.webp"
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
            "pc" => "morinosanpomiti/morinosanpomiti-01.webp",
            "sp" => "morinosanpomiti/morinosanpomiti-01-sp.webp"
          ],

          [
            "pc" => "morinosanpomiti/morinosanpomiti-02.webp",
            "sp" => "morinosanpomiti/morinosanpomiti-02-sp.webp"
          ],
          [
            "pc" => "morinosanpomiti/morinosanpomiti-03.webp",
            "sp" => "morinosanpomiti/morinosanpomiti-03-sp.webp"
          ],
          [
            "pc" => "morinosanpomiti/morinosanpomiti-04.webp",
            "sp" => "morinosanpomiti/morinosanpomiti-04-sp.webp"
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
            "desc" => "森のさんぽ道"
          ],
          [
            "term" => "種類",
            "desc" => "認可保育園"
          ],
          [
            "term" => "開設",
            "desc" => "2017年"
          ],
          [
            "term" => "所在地",
            "desc" => "〒870-0955<br>大分県大分市下郡南4丁目1番9号"
          ],
          [
            "term" => "TEL",
            "desc" => "097-560-3013"
          ],
          [
            "term" => "FAX",
            "desc" => "097-560-2123"
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.68494290879!2d131.63021171139312!3d33.22235496098345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35469f1a46eef94d%3A0x877c25f488743a66!2z44CSODcwLTA5NTUg5aSn5YiG55yM5aSn5YiG5biC5LiL6YOh5Y2X77yU5LiB55uu77yR4oiS77yZ!5e0!3m2!1sja!2sjp!4v1702984949899!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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