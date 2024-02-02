<?php
/*
Template Name: 保育方針
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
          <img loading="lazy" decoding="auto" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/<?php echo esc_html(my_page_mainview()); ?>" alt="">
        </picture>
      </div>
    </div>
  </div>
  <section class="section concept-concept">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>保育方針</h2>
    </div>
    <div class="cards-concept">
      <?php
      $policy = [
        [
          "thumbnail" => "concept-approach-01.webp",
          "thumbnail_sp" => "concept-approach-01-sp.webp",
          "step" => "01",
          "lead" => "基本的生活習慣を身に付ける",
          "text" => "まず入園したての０・１・２歳児さんは、ゆっくりとした環境の中、基本的生活習慣を身に付けていくことからスタートしていきます。例えば、着脱・排泄・睡眠など、人間として生きていくことに欠かせないこの習慣は、毎日の生活の中で繰り返し行うことで機能訓練にもなります。また保育者は見守ることも大事にして、段階ごとの発達を促し、自分で出来たことの達成感や喜びから自立心が育っていくような保育環境が理想だと思います。"
        ],
        [
          "thumbnail" => "concept-approach-02.webp",
          "thumbnail_sp" => "concept-approach-02-sp.webp",
          "step" => "02",
          "lead" => "目が向く方向に心が向く",
          "text" => "先生の話をしっかりと聞く習慣を身に付ける。そのために、正面を向いて保育士の話が聞ける環境を作っています。<br class='_pc'>子どもには目の向く方向に「心」が向いています。真正面に保育士が見えるように座れば、自然な姿勢で集中して話しを聞くことが出来ます。<br class='_pc'>TOMORROW COMPANY各園では、就学前５歳児よりこのような環境作りをしています。"
        ],
        [
          "thumbnail" => "concept-approach-03.webp",
          "thumbnail_sp" => "concept-approach-03-sp.webp",
          "step" => "03",
          "lead" => "学力・体力・心力を育てる",
          "text" => "３歳児から始まる「読み・書き・計算・音楽・体育」は3つの力を育てます。<br class='_pc'>まず学力ですが、３歳児からスタートするオリジナルの学習帳を使用し、興味を持ってもらうことからはじめ、４～５歳児になると「ひらがな」「カタカナ」「足し算」「引き算」子ども達はみんなゲーム感覚で夢中になって取り組んでいきます。<br class='_pc'>「音楽」では、鍵盤ハーモニカを取り入れ、気づけば楽譜なしで演奏できるまで音楽を楽しんでもらいます。<br class='_pc'>「体力」は毎朝「かけっこ」を取り入れ一日がスタートしていき、その他、跳び箱。跳び箱は目標を持ちやすく達成感、満足感は̏やればできる˝その自信につながります。<br class='_pc'>子ども達のやる気を引き出し、出来たことの喜びを体感して、挑戦する気持ちを育てていきたいと思います。"
        ],
        [
          "thumbnail" => "concept-approach-04.webp",
          "thumbnail_sp" => "concept-approach-04-sp.webp",
          "step" => "04",
          "lead" => "食は生きる力を育てます",
          "text" => "栄養計算されたメニューに対してプロである栄養士、調理師がつくるこだわりの美味しい給食で子ども達の本来持っているバランスの良い体に整え、やる気・忍耐力・集中力・体力などを引き出します。<br class='_pc'>キッチン内は、カフェスタイル。完成度の高い給食を提供するためにも、キッチンの環境はとても大切です。保育も給食もバランスの取れた中身が重要です。食べ物の「力」を子ども達に届けられるよう、日々心掛けています。"
        ]
      ];
      foreach ($policy as $item) :
        $thumbnail = $item['thumbnail'];
        $thumbnail_sp = $item['thumbnail_sp'];
        $step = $item['step'];
        $lead = $item['lead'];
        $text = $item['text'];
      ?>
        <div class="card-concept js-fadein">
          <div class="card-concept__thumbnail">
            <picture>
              <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/concept/<?php echo esc_html($thumbnail_sp); ?>' media='(max-width: 780px)' />
              <img loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/concept/<?php echo esc_html($thumbnail); ?>" alt="" decoding="auto">
            </picture>
          </div>
          <div class="card-concept__inner">
            <div class="card-concept__header">
              <div class="card-concept__step _kaisei">アプローチ<span class="card-concept__number _kaisei"><?php echo esc_html($step); ?></span></div>
              <div class="card-concept__lead _serif"><?php echo esc_html($lead); ?></div>
            </div>
            <div class="card-concept__body">
              <p class="card-concept__text"><?php echo $text; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>