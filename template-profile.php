<?php
/*
Template Name: 会社概要
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
  <!-- profile -->
  <section class="section profile-profile">
    <div class="content-profile js-reveal" data-splitting>
      <div class="content-profile__header">
        <p class="content-profile__lead _serif"><span>TOMORROW COMPANYはよりよい</span><span>保育環境をつくっていきます。</span></p>
        <div class="content-profile__heading _serif">
          <span class="content-profile__quote-left">『</span>
          <div class="content-profile__wrapper-heading">
            <span class="content-profile__inner-heading">すべては子ども達の<br class="_sp"></span>
            <span class=" content-profile__inner-heading">笑顔のために</span>
          </div>
          <span class="content-profile__quote-right">』</span>
        </div>
      </div>
      <div class="content-profile__body">
        <p class="content-profile__text _serif">
          私たちTOMORROW&nbsp;COMPANYは２０００年創業以来<br class="_pc">
          大分県内の保育事業を営み地域社会に支えられ子ども達と共に歩んで参りました。<br class="_pc">
          「すべては子ども達の笑顔のために」をスローガンに保育を進め<br class="_pc">
          これまで数多くの子ども達、保護者の方々との出会いを通じて<br class="_pc">
          多くの感動をいただきました。これからも一層、保育への想いと<br class="_pc">
          知識、姿勢を高めもち地域社会に貢献していきたいと考えております。
        </p>
        <p class="content-profile__text _serif">
          TOMORROW COMPANYの強みは県内数多くの保育拠点を持ち<br class="_pc">
          認可保育園・院内保育園・病院内保育室の施設運営をしネットワークがあること。<br class="_pc">
          その中で培われてきた保育への知見と経験です。
        </p>
        <p class="content-profile__text _serif">
          さらに人へのこだわり。<br class="_pc">
          保育士である前に社会人として立派になっていく。<br class="_pc">
          つまり人間性の向上こそ、大切なお子さまをお預かりさせて頂くうえで<br class="_pc">
          これからの保育士に求められるのではないでしょうか
        </p>

      </div>
    </div>
  </section>
  <!-- overview -->
  <section class=" section profile-overview">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>会社概要</h2>
    </div>
    <dl class="list-summary">

      <?php
      $summary = [
        [
          "term" => "法人名",
          "desc" => "株式会社 TOMORROW COMPANY"
        ],
        [
          "term" => "設立",
          "desc" => "2000年　9月"
        ],
        [
          "term" => "本部",
          "desc" => "大分県別府市石垣西３丁目７番３０号"
        ],
        [
          "term" => "TEL",
          "desc" => "0977-25-3939"
        ],
        [
          "term" => "代表者",
          "desc" => "岡本 達朗"
        ],
        [
          "term" => "事業内容",
          "desc" => "<span>認可保育園運営事業</span><span>病院保育運営事業</span><span>委託病院内保育事業</span><span>ピアノ教室・学習教育事業</span>"
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

  </section>
</main>
<?php get_footer(); ?>