<?php get_header(); ?>
<main class="main">
  <div class="top-fv">
    <div class="top-fv__headline js-topAnim" data-splitting>
      <span class="top-fv__headlineRow top-fv__headlineRow--row1 _serif js-topAnim__headline">人・物・自然</span>
      <span class="top-fv__headlineRow top-fv__headlineRow--row2 _serif js-topAnim__headline">保育は環境です。</span>
    </div>
    <div class="top-fv__slideshow js-slideShowMask">
      <?php
      $slides = [
        [
          "image" => "top-mv-01",
          "number" => "1"
        ],
        [
          "image" => "top-mv-02",
          "number" => "2"
        ],
        [
          "image" => "top-mv-03",
          "number" => "3"
        ],
        [
          "image" => "top-mv-04",
          "number" => "4"
        ],
        [
          "image" => "top-mv-05",
          "number" => "4"
        ],
      ];
      foreach ($slides as $slide) :
        $image = $slide["image"];
        $number = $slide["number"];
      ?>
        <div class="top-fv__slide js-slide slide<?php echo esc_html($number); ?>">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($image); ?>-sp.webp' media='(max-width: 780px)' class="lazy" />
            <img id="loading" decoding="auto" width="640" height="440" data-src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($image); ?>.webp" alt="">
          </picture>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <section class="top-factory">
    <div class="header-level2">
      <h2 class="header-level2__heading _en js-reveal" data-reveal>
        Factory
      </h2>
    </div>
    <div class="top-factory__body">
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
            'link' => 'tesunoki'
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
            'link' => 'connection#aotosora'
          ],
          [
            'title' => '委託病院内保育事業',
            'sub' => 'Hospital nursery school',
            'img' => 'top-itaku.webp',
            'img_sp' => 'top-itaku-sp.webp',
            'title_logo' => '委託病院内保育事業',
            'title_class' => 'itaku',
            'link' => 'connection#entrust'
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
          <div class="card-factory js-fadein">
            <div class="card-factory__figure">
              <picture>
                <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img_sp); ?>' media='(max-width: 780px)' />
                <img loading="lazy" decoding="auto" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img); ?>" alt="<?php echo  esc_html($title); ?>">
              </picture>
            </div>
            <div class="card-factory__body">
              <div class="card-factory__sub _en"><?php echo  esc_html($sub); ?></div>
              <div class="card-factory__title">
                <?php if ($title_logo != "委託病院内保育事業") {; ?>
                  <h3 class="card-factory__lead <?php echo  esc_html($title_class); ?>">
                    <img loading="lazy" width="240" height="80" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/<?php echo esc_html($title_logo); ?>" alt="<?php echo  esc_html($title); ?>">
                  </h3>
                <?php } else { ?>
                  <h3 class="card-factory__heading _kaisei"><?php echo  esc_html($title_logo); ?></h2>
                  <?php }; ?>
              </div>
            </div>
            <a href="<?php echo esc_url(home_url($link)); ?>" class="card-factory__link"></a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="top-concept">
    <a href="<?php echo esc_url(home_url("concept")); ?>" class="panel-concept">
      <div class="panel-concept__inner">
        <div class="panel-concept__lead _en js-reveal" data-reveal>
          Concept
        </div>
        <div class="panel-concept__title">
          <span class="_serif js-reveal" data-reveal>TOMORROW COMPANYの保育方針</span>
          <span class="arrow arrow--red js-fadein">
            <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
              <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
            </svg>
          </span>
        </div>
      </div>
    </a>
  </section>

  <section class="top-movie">
    <div class="header-level2">
      <h2 class="header-level2__heading _en js-reveal" data-reveal>
        Movie.Read
      </h2>
    </div>
    <div class="top-movie__body">
      <ul class="list-movie">
        <li class="item-movie">
          <a target="_blank" href="<?php echo esc_url(get_template_directory_uri()); ?>/book" class="item-movie__inner">
            <div class="item-movie__icon">
              <img loading="lazy" decoding="auto" class="icon-picture" width="158" height="105" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/top-brandbook.webp" alt="brandbookへのリンクアイコン">
            </div>
            <div class="item-movie__body">
              <p class="item-movie__text _serif js-reveal" data-reveal>BRAND BOOKが発行されました</p>
              <span class="arrow arrow--black">
                <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                  <path d="M10.5 4.0625L0.5 0.5625L2.72222 4.0625L0.5 7.5625L10.5 4.0625Z" fill="#333333" />
                </svg>
              </span>
            </div>
          </a>
        </li>
        <?php $youtubes = [
          ["link" => "https://www.youtube.com/watch?v=lV-UJm_BnJA", "text" => "ALL MOVIE
          "],
          ["link" => "https://www.youtube.com/watch?v=lsVe6nlJqXQ", "text" => "法人紹介 MOVIE
          "],
          ["link" => "https://www.youtube.com/watch?v=KR3JWt3Ges4", "text" => "保育紹介 MOVIE
          "],
          ["link" => "https://www.youtube.com/watch?v=93TgethFH4A", "text" => "給食紹介 MOVIE
          "],
          ["link" => "https://www.youtube.com/watch?v=yauydWYg-v0", "text" => "施設紹介 MOVIE
          "],
          ["link" => "https://www.youtube.com/watch?v=M_IDB2pDxC0
          ", "text" => "リクルート MOVIE
          "],
        ];

        foreach ($youtubes as $youtube) :
          $link = $youtube["link"];
          $text = $youtube["text"]; ?>
          <li class="item-movie">
            <a target="_blank" href="<?php echo $link; ?>" class="item-movie__inner">
              <div class="item-movie__icon">
                <img loading="lazy" decoding="auto" class="icon-youtube" width="88" height="62" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/icon/icon-youtube.webp" alt="youtubeへのリンク">
              </div>
              <div class="item-movie__body">
                <p class="item-movie__text _serif js-reveal" data-reveal><?php echo $text; ?></p>
                <span class="arrow arrow--black">
                  <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                    <path d="M10.5 4.0625L0.5 0.5625L2.72222 4.0625L0.5 7.5625L10.5 4.0625Z" fill="#333333" />
                  </svg>
                </span>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

</main>
<?php get_footer(); ?>