<?php
/*
Template Name: 関連事業
*/
get_header(); ?>
<main class="main">
  <div class="common-pageheader">
    <h1 class="common-pageheader__title _en" data-splitting> <?php echo esc_html(my_page_title()); ?></h1>
  </div>
  <section id="aotosora" class="section connection-aotosora">
    <div class="content-connection">
      <div class="content-connection__thumbnail">
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-aotosora-sp.webp' media='(max-width: 780px)' />
          <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-aotosora.webp" alt="病児保育 室青とそら">
        </picture>
      </div>
      <div class="content-connection__inner">
        <h3 class="content-connection__lead content-connection__lead--aotosora">
          <picture>
            <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-aotosora-sp.webp' media='(max-width: 780px)' />
            <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-aotosora.webp" alt="病児保育 室青とそら">
          </picture>
        </h3>
        <div class="content-connection__body">
          <p class="content-connection__text _serif">
            「子どもの体調が良くない」でも仕事は休めない。どうしよう…。<br>
            子育ての中で尽きないこの悩み。そんな悩みを解決する施設。それが病児保育室「青とそら」です。<br>
            対象児は大分県内に在住する生後６カ月から小学校６年生と幅広く受け入れを行っています。<br>
            小児科医、指導医と連携し、TOMORROW COMPANYの病児専任の保育士・看護師のもと保育と看護を充実させています。
          </p>
          <div class="content-connection__buttons">
            <a target="_blank" href="https://www.aoto-sora.com/" class="button-more">
              <span class="button-more__text _en">
                Information
              </span>
              <span class="arrow arrow--red">
                <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                  <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="temporarychildcare" class="section connection-temporarychildcare">
    <div class="content-connection">
      <div class="content-connection__thumbnail">
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-temporarychildcare-sp.webp' media='(max-width: 780px)' />
          <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-temporarychildcare.webp" alt="一時預かり事業">
        </picture>
      </div>
      <div class="content-connection__inner">
        <h3 class="content-connection__lead content-connection__lead--temporarychildcare _kaisei">
          <span>一時預かり事業</span><span>（大分市・別府市）</span>
        </h3>
        <div class="content-connection__body">
          <p class="content-connection__text _serif">
            一時預かり保育とは、保護者等の仕事や病病、入院等により一時的に家庭での保育が困難となる場合や、リフレッシュしたいときなど、
            保護者の育児不安の解消を図り、負担をを軽成するためにお子さまをお預かりさせていただきます。
          </p>
          <div class="content-connection__buttons content-connection__buttons--">
            <a href="<?php echo esc_url(home_url("nurserypuuapuuetela")); ?>" class="button-more">
              <span class="button-more__text _serif">
                PUU A PUU etela（別府市）
              </span>
              <span class="arrow arrow--red">
                <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                  <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                </svg>
              </span>
            </a>
            <a href="<?php echo esc_url(home_url("morinosanpomiti")); ?>" class="button-more">
              <span class="button-more__text _serif">
                森のさんぽ道（大分市）
              </span>
              <span class="arrow arrow--red">
                <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                  <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                </svg>
              </span>
            </a>
            <a href="<?php echo esc_url(home_url("")); ?>" class="button-more">
              <span class="button-more__text _serif">
                利用について
              </span>
              <span class="arrow arrow--red">
                <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                  <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="entrust" class="section connection-entrust">
    <div class="content-connection">
      <div class="content-connection__thumbnail">
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-itaku-sp.webp' media='(max-width: 780px)' />
          <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-itaku.webp" alt="委託病院内保育事業">
        </picture>
      </div>
      <div class="content-connection__inner">
        <h3 class="content-connection__lead content-connection__lead--entrust _kaisei">
          委託病院内保育事業
        </h3>
        <div class="content-connection__body">
          <p class="content-connection__text _serif">
            TOMORROW COMPANYは病院内保育園の委託事業を行っております。<br>
            子育て世代の就労者への福利厚生として病院企業様にとって大きなメリットをもたらすことができます。<br>
            勤務先に「院内保育園」があれば安心して出産後職場復帰できる。またはスピーディーに復帰できるなど求職者、新規採用者に向けても大きなインパクト・イメージアップに効果的です。<br>
            よりよい職場環境の実現にお役に立ちたいと考えております。
          </p>
          <div class="content-connection__buttons">
            <a href="<?php echo esc_url(home_url("contractedhospital")); ?>" class="button-more">
              <span class="button-more__text _serif">
                導入先
              </span>
              <span class="arrow arrow--red">
                <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                  <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                </svg>
              </span>
            </a>
            <a href="<?php echo esc_url(home_url("flow")); ?>" class="button-more">
              <span class="button-more__text _serif">
                導入について
              </span>
              <span class="arrow arrow--red">
                <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                  <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>