<?php
/*
Template Name: やまびこ保育園(大分県別府市)
*/
get_header(); ?>
<main class="main">
  <div class="common-pagemv common-pagemv--aotosora">
    <div class="common-pagemv__header">
      <h1 class="common-pagemv__title common-pagemv__title--aotosora _en">
        <div class="common-pagemv__titleRow common-pagemv__titleRow--aotosora1">
          <img decoding="auto" loading="lazy" width="640" height="40" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-byoujihoiku.webp" alt="">
        </div>
        <div class="common-pagemv__titleRow common-pagemv__titleRow--aotosora2">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-aotosora-sp.webp' media='(max-width: 780px)' />
            <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-aotosora.webp" alt="">
          </picture>
        </div>
      </h1>
    </div>
    <div class="common-pagemv__inner">
      <div class="common-pagemv__mainview">
        <picture>
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/aotosora-mv-sp.webp' media='(max-width: 780px)' class="lazy" />
          <img id="loading" width="640" height="440" data-src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/aotosora-mv.webp" alt="">
        </picture>
      </div>
    </div>
  </div>
  <!-- about -->
  <section class="section aotosora-about">
    <div class="content-about js-reveal" data-splitting>
      <div class="content-about__header">
        <h2 class="content-about__heading _serif">
          病児保育とは？
        </h2>
      </div>
      <div class="content-about__body">
        <p class="content-about__text _serif">
          病児とは、風邪などの「入院するほど重篤でなないものの、保育園・学校などを休まなければならない子ども」のこと。
          病児保育は、そのような病児・病後児が安全に1日を過ごして、保護者のみなさんにとっても、安心してご利用いただけるサービスです。
        </p>
      </div>
    </div>
  </section>
  <!-- links -->
  <section class="section aotosora-links">
    <div class="cards-links">
      <?php $links = [
        [
          "image-pc" => "aotosora-about-btn",
          "image-sp" => "aotosora-about-btn-sp",
          "title" => "About",
          "text" => "利用要項",
          "link" => "about"
        ],
        [
          "image-pc" => "aotosora-diseases-btn",
          "image-sp" => "aotosora-diseases-btn-sp",
          "title" => "Diseases",
          "text" => "対象疾患",
          "link" => "diseases"
        ],
      ];
      foreach ($links as $link) :
        $image_pc = $link['image-pc'];
        $image_sp = $link['image-sp'];
        $title = $link['title'];
        $text = $link['text'];
        $link = $link['link'];
      ?>
        <div class="card-links">
          <a href="<?php echo esc_url(home_url($link)); ?>" class="card-links__link"></a>
          <figure class="card-links__thumb">
            <picture>
              <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/<?php echo $image_sp; ?>.webp' media='(max-width: 780px)' class="lazy" />
              <img id="loading" width="640" height="440" data-src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/<?php echo $image_pc; ?>.webp" alt="">
            </picture>
          </figure>
          <p class="card-links__lead _en">
            <?php echo $title; ?>
          </p>
          <p class="card-links__text _serif">
            <?php echo $text; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <!-- reservation -->
  <section class="section aotosora-reservation">
    <a href="#" target="_blank" class="panel-reservation panel-reservation--reservation">
      <div class="panel-reservation__inner">
        <div class="panel-reservation__thumb">
          <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/aotosora-reservation-qrcode.webp" alt="あずかるこちゃんへのアクセスQRコード">
        </div>
        <div class="panel-reservation__header">
          <div class="panel-reservation__lead _en js-reveal" data-reveal>
            Resetvation
          </div>
          <div class="panel-reservation__text _serif js-reveal" data-reveal>
            青とそらご利用の前に<br>
            あずかるこちゃんにアクセス<br class="_sp">します
            <span class="panel-reservation__arrow">
              <svg viewBox="0 0 12 9" fill="none">
                <path d="M10.7839 3.97461L0.769531 0.474609L2.99495 3.97461L0.769531 7.47461L10.7839 3.97461Z" fill="#9B4C4C" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </a>
  </section>

</main>
<?php get_footer(); ?>