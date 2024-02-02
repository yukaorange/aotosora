<?php
/*
Template Name: イントロダクション
*/
get_header(); ?>
<main class="main">
  <!-- mainview -->
  <div class="common-pagemv">
    <div class="header-level1">
      <h1 class="header-level1__heading _en" data-splitting>
        <?php echo esc_html(my_page_title()); ?>
      </h1>
    </div>
    <div class="common-pagemv__inner">
      <div class="common-pagemv__mainview">
        <picture>
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html(my_page_mainview_sp()); ?>' media='(max-width: 780px)' />
          <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html(my_page_mainview()); ?>" alt="">
        </picture>
      </div>
    </div>
  </div>
  <!-- introduction -->
  <section class="section introduction-introduction">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>保育施設紹介</h2>
    </div>
    <div class="cards-introduction">
      <?php
      $factories = [
        [
          'title' => 'やまびこ保育園',
          'sub' => 'Nursery school',
          'img' => 'top-yamabiko.webp',
          'img_sp' => 'top-yamabiko-sp.webp',
          'title_logo' => 'logo-yamabiko.webp',
          'title_class' => 'yamabiko',
          'link' => 'yamabiko',
          'movie_link' => '',
          'address' => '〒870-0122<br>大分県別府市石垣西3丁目7番地30号',
          'tel' => '0977-25-3939'
        ],
        [
          'title' => 'PUU A PUU',
          'sub' => 'Nursery school',
          'img' => 'top-nurserypuuapuu.webp',
          'img_sp' => 'top-nurserypuuapuu-sp.webp',
          'title_logo' => 'logo-nurserypuuapuu.webp',
          'title_class' => 'nurserypuuapuu',
          'link' => 'nurserypuuapuu',
          'movie_link' => '',
          'address' => '〒874-0910<br>大分県別府市石垣西7丁目2123番地',
          'tel' => '0977-27-3939'
        ],
        [
          'title' => 'PUU A PUU etera',
          'sub' => 'Nursery school',
          'img' => 'top-nurserypuuapuuetela.webp',
          'img_sp' => 'top-nurserypuuapuuetela-sp.webp',
          'title_logo' => 'logo-nurserypuuapuuetela.webp',
          'title_class' => 'nurserypuuapuuetela',
          'link' => 'nurserypuuapuuetela',
          'movie_link' => '',
          'address' => '〒874-0919<br>大分県別府市石垣東2丁目5-12',
          'tel' => '0977-80-7575'
        ],
        [
          'title' => '森のさんぽみち',
          'sub' => 'Nursery school',
          'img' => 'top-morinosanpomiti.webp',
          'img_sp' => 'top-morinosanpomiti-sp.webp',
          'title_logo' => 'logo-morinosanpomiti.webp',
          'title_class' => 'morinosanpomiti',
          'link' => 'morinosanpomiti',
          'movie_link' => '',
          'address' => '〒870-0955<br>大分県大分市下郡南4丁目1番9号',
          'tel' => '097-560-3013'
        ],
        [
          'title' => 'テスの木',
          'sub' => 'Nursery school',
          'img' => 'top-tesunoki.webp',
          'img_sp' => 'top-tesunoki-sp.webp',
          'title_logo' => 'logo-tesnoki.webp',
          'title_class' => 'tesnoki',
          'link' => 'tesunoki',
          'movie_link' => '',
          'address' => '〒870-0954<br>大分県大分市下郡中央3丁目8番10号',
          'tel' => '097-567-2080'
        ],
        [
          'title' => 'NURSERY ROPE',
          'sub' => 'Nursery school',
          'img' => 'top-nurseryrope.webp',
          'img_sp' => 'top-nurseryrope-sp.webp',
          'title_logo' => 'logo-nurseryrope.webp',
          'title_class' => 'nurseryrope',
          'link' => 'nurseryrope',
          'movie_link' => '',
          'address' => '〒874-0954<br>大分県大分市下郡中央3丁目8番24号',
          'tel' => '097-560-5088'
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
        $movie_link = $factory['movie_link'];
        $address = $factory['address'];
        $tel = $factory['tel'];
      ?>
        <div class="card-introduction js-fadein">
          <div class="card-introduction__figure">
            <picture>
              <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img_sp); ?>' media='(max-width: 780px)' />
              <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img); ?>" alt="<?php echo  esc_html($title); ?>">
            </picture>
          </div>
          <div class="card-introduction__inner">
            <div class="card-introduction__header">
              <h4 class="card-introduction__heading <?php echo esc_html($title_class); ?>">
                <img decoding="auto" loading="lazy" width="240" height="80" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/<?php echo esc_html($title_logo); ?>" alt="<?php echo  esc_html($title); ?>">
              </h4>
            </div>
            <div class="card-introduction__body">
              <address class="address">
                <div class="address__inner">
                  <div class="address__term">住所</div>
                  <div class="address__desc"><?php echo $address; ?></div>
                  <div class="address__term">TEL</div>
                  <a href="tel:<?php echo esc_html($tel); ?>" class="address__desc"><?php echo esc_html($tel); ?></a>
                </div>
              </address>
              <a href="<?php echo esc_url(home_url($link)); ?>" class="button-more">
                <span class="button-more__text _en">
                  Information
                </span>
                <span class="arrow arrow--red">
                  <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                    <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                  </svg>
                </span>
              </a>
              <!-- <a href="<?php echo esc_html($movie_link); ?>" class="button-more">
                <span class="button-more__text _en">
                  Movie
                </span>
                <span class="arrow arrow--red">
                  <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                    <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                  </svg>
                </span>
              </a> -->
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>