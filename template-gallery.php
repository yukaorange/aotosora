<?php
/*
Template Name: ギャラリー
*/
get_header(); ?>
<main class="main">
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
  <!-- closet -->
  <section class="section gallery-closet">
    <div class="header-level3">
      <h2 class="header-level3__heading _serif js-reveal" data-splitting>
        Closet
      </h2>
    </div>
    <div class="cards-gallery">
      <?php $cards = [
        [
          'pc' => 'gallery-item-01.webp',
          'sp' => 'gallery-item-01-sp.webp',
          'modal' => 'modal-1'
        ],
        [
          'pc' => 'gallery-item-02.webp',
          'sp' => 'gallery-item-02-sp.webp',
          'modal' => 'modal-2'
        ],
        [
          'pc' => 'gallery-item-03.webp',
          'sp' => 'gallery-item-03-sp.webp',
          'modal' => 'modal-3'
        ],
        [
          'pc' => 'gallery-item-04.webp',
          'sp' => 'gallery-item-04-sp.webp',
          'modal' => 'modal-4'
        ],
        [
          'pc' => 'gallery-item-05.webp',
          'sp' => 'gallery-item-05-sp.webp',
          'modal' => 'modal-5'
        ],
        [
          'pc' => 'gallery-item-06.webp',
          'sp' => 'gallery-item-06-sp.webp',
          'modal' => 'modal-6'
        ],
        [
          'pc' => 'gallery-item-07.webp',
          'sp' => 'gallery-item-07-sp.webp',
          'modal' => 'modal-7'
        ],
        [
          'pc' => 'gallery-item-08.webp',
          'sp' => 'gallery-item-08-sp.webp',
          'modal' => 'modal-8'
        ],
        [
          'pc' => 'gallery-item-09.webp',
          'sp' => 'gallery-item-09-sp.webp',
          'modal' => 'modal-9'
        ],
        [
          'pc' => 'gallery-item-10.webp',
          'sp' => 'gallery-item-10-sp.webp',
          'modal' => 'modal-10'
        ],
        [
          'pc' => 'gallery-item-11.webp',
          'sp' => 'gallery-item-11-sp.webp',
          'modal' => 'modal-11'
        ],
        [
          'pc' => 'gallery-item-12.webp',
          'sp' => 'gallery-item-12-sp.webp',
          'modal' => 'modal-12'
        ],
        [
          'pc' => 'gallery-item-13.webp',
          'sp' => 'gallery-item-13-sp.webp',
          'modal' => 'modal-13'
        ],
        [
          'pc' => 'gallery-item-14.webp',
          'sp' => 'gallery-item-14-sp.webp',
          'modal' => 'modal-14'
        ],
      ];
      foreach ($cards as $card) :
        $pc = $card['pc'];
        $sp = $card['sp'];
        $modal = $card['modal'];
      ?>
        <div class="card-gallery js-fadein" data-micromodal-trigger="<?php echo esc_html($modal) ?>">
          <div class="card-gallery__figure">
            <picture>
              <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/gallery/<?php echo esc_html($sp); ?>' media='(max-width: 780px)' />
              <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/gallery/<?php echo esc_html($pc); ?>" alt="">
            </picture>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="modals-gallery js-modal">
      <?php $modals = [
        [
          'pc' => 'gallery-item-01.webp',
          'sp' => 'gallery-item-01-sp.webp',
          'modal' => 'modal-1'
        ],
        [
          'pc' => 'gallery-item-02.webp',
          'sp' => 'gallery-item-02-sp.webp',
          'modal' => 'modal-2'
        ],
        [
          'pc' => 'gallery-item-03.webp',
          'sp' => 'gallery-item-03-sp.webp',
          'modal' => 'modal-3'
        ],
        [
          'pc' => 'gallery-item-04.webp',
          'sp' => 'gallery-item-04-sp.webp',
          'modal' => 'modal-4'
        ],
        [
          'pc' => 'gallery-item-05.webp',
          'sp' => 'gallery-item-05-sp.webp',
          'modal' => 'modal-5'
        ],
        [
          'pc' => 'gallery-item-06.webp',
          'sp' => 'gallery-item-06-sp.webp',
          'modal' => 'modal-6'
        ],
        [
          'pc' => 'gallery-item-07.webp',
          'sp' => 'gallery-item-07-sp.webp',
          'modal' => 'modal-7'
        ],
        [
          'pc' => 'gallery-item-08.webp',
          'sp' => 'gallery-item-08-sp.webp',
          'modal' => 'modal-8'
        ],
        [
          'pc' => 'gallery-item-09.webp',
          'sp' => 'gallery-item-09-sp.webp',
          'modal' => 'modal-9'
        ],
        [
          'pc' => 'gallery-item-10.webp',
          'sp' => 'gallery-item-10-sp.webp',
          'modal' => 'modal-10'
        ],
        [
          'pc' => 'gallery-item-11.webp',
          'sp' => 'gallery-item-11-sp.webp',
          'modal' => 'modal-11'
        ],
        [
          'pc' => 'gallery-item-12.webp',
          'sp' => 'gallery-item-12-sp.webp',
          'modal' => 'modal-12'
        ],
        [
          'pc' => 'gallery-item-13.webp',
          'sp' => 'gallery-item-13-sp.webp',
          'modal' => 'modal-13'
        ],
        [
          'pc' => 'gallery-item-14.webp',
          'sp' => 'gallery-item-14-sp.webp',
          'modal' => 'modal-14'
        ],
      ];
      foreach ($modals as $modal) :
        $pc = $modal['pc'];
        $sp = $modal['sp'];
        $modal = $modal['modal'];
      ?>
        <div class="modal micromodal-slide" id="<?php echo esc_html($modal); ?>" aria-hidden="true">
          <!-- 背景のオーバーレイ -->
          <div class="modal-overlay" tabindex="-1" data-micromodal-close>
            <div class="modal-container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
              <!-- モーダルのコンテンツ -->
              <div class="modal-content" id="modal-content">
                <button class="modal-close _en" aria-label="Close modal" data-micromodal-close>
                  close
                </button>
                <div class="modal-gallery__figure">
                  <picture>
                    <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/gallery/<?php echo esc_html($sp); ?>' media='(max-width: 780px)' />
                    <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/gallery/<?php echo esc_html($pc); ?>" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>