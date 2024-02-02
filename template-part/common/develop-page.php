<div class="container">
  <!-- <picture>
    <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top-service.webp' media='(max-width: 780px)' class="lazy" />
    <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/.webp" alt="">
  </picture>
  <div style="width:1000px; height:1000px; background-image: url('<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top-performance.webp');"></div> -->
</div>

<div class="">
  <div class="">
    <div class="common-pagemv">
      <div class="header-level1">
        <h1 class="header-level1__heading _en" data-splitting>
          Introduction
        </h1>
      </div>
      <div class="common-pagemv__inner">
        <div class="common-pagemv__mainview">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/introduction/introduction-mv-sp.webp' media='(max-width: 780px)' />
            <img width="640" height="440" id="loading" data-src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/introduction/introduction-mv.webp" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>

  <div class="spacer"></div>

  <div class="common-pageheader common-pageheader--figure">
    <h1 class="common-pageheader__title common-pageheader__title--yamabiko _en">
      <picture>
        <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-yamabiko-sp.webp' media='(max-width: 780px)' class="lazy" />
        <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-yamabiko.webp" alt="">
      </picture>
    </h1>
    <div class="common-pageheader__sub">
      大分県別府市
    </div>
  </div>

  <div class="spacer"></div>

  <a href="" class="button-more">
    <span class="button-more__text _en">
      Information
    </span>
    <span class="arrow arrow--red">
      <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
        <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
      </svg>
    </span>
  </a>

  <div class="spacer"></div>

  <div class="content-connection">
    <div class="content-connection__thumbnail">
      <picture>
        <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-aotosora-sp.webp' media='(max-width: 780px)' />
        <img loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/connection/connection-aotosora.webp" alt="病児保育 室青とそら">
      </picture>
    </div>
    <div class="content-connection__inner">
      <h3 class="content-connection__lead">
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-aotosora-sp.webp' media='(max-width: 780px)' />
          <img loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/logo-aotosora.webp" alt="病児保育 室青とそら">
        </picture>
      </h3>
      <div class="content-connection__body">
        <p class="content-connection__text _serif">
          「子どもの体調が良くない」でも仕事は休めない。どうしよう…。<br>
          子育ての中で尽きないこの悩み。そんな悩みを解決する施設。それが病児保育室「青とそら」です。<br>
          対象児は大分県内に在住する生後６カ月から小学校６年生と幅広く受け入れを行っています。<br>
          小児科医、指導医と連携し、TOMORROW COMPANYの病児専任の保育士・看護師のもと保育と看護を充実させています。
        </p>
        <a href="" class="button-more">
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

  <div class="spacer"></div>

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
        'link' => 'tesnoki',
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
      <div class="card-introduction">
        <div class="card-introduction__figure">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img_sp); ?>' media='(max-width: 780px)' />
            <img loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/top/<?php echo esc_html($img); ?>" alt="<?php echo  esc_html($title); ?>">
          </picture>
        </div>
        <div class="card-introduction__inner">
          <div class="card-introduction__header">
            <h4 class="card-introduction__heading <?php echo esc_html($title_class); ?>">
              <img width="240" height="80" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/logo/<?php echo esc_html($title_logo); ?>" alt="<?php echo  esc_html($title); ?>">
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
            <a href="<?php echo esc_html($movie_link); ?>" class="button-more">
              <span class="button-more__text _en">
                Movie
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
    <?php endforeach; ?>
  </div>

  <div class="spacer"></div>

  <div class="header-level3">
    <h3 class="header-level3__heading _serif" data-splitting>
      Closet
    </h3>
  </div>

  <div class="spacer"></div>


  <div class="cards-gallery">
    <?php $cards = [
      [
        'pc' => 'gallery-item-01.webp',
        'sp' => 'gallery-item-01-sp.webp'
      ],
      [
        'pc' => 'gallery-item-02.webp',
        'sp' => 'gallery-item-02-sp.webp'
      ],
      [
        'pc' => 'gallery-item-03.webp',
        'sp' => 'gallery-item-03-sp.webp'
      ],
      [
        'pc' => 'gallery-item-04.webp',
        'sp' => 'gallery-item-04-sp.webp'
      ],
    ];
    foreach ($cards as $card) :
      $pc = $card['pc'];
      $sp = $card['sp'];
    ?>
      <div class="card-gallery">
        <div class="card-gallery__figure">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/gallery/<?php echo esc_html($sp); ?>' media='(max-width: 780px)' />
            <img loading="lazy" width="640" height="440" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/gallery/<?php echo esc_html($pc); ?>" alt="">
          </picture>
        </div>
      </div>

    <?php endforeach; ?>
  </div>

  <div class="spacer"></div>


  <div class="content-profile">
    <div class="content-profile__header">
      <p class="content-profile__lead _serif">TOMORROW COMPANYはよりよい<br>保育環境をつくっていきます。</p>
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
        私たちTOMORROW COMPANYは２０００年創業以来<br class="_pc">
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

  <div class="spacer"></div>

  <div class="header-level2 header-level2--jp">
    <h2 class="header-level2__heading _serif">園概要</h2>
  </div>

  <div class="spacer"></div>

  <dl class="list-summary">

    <?php
    $summary = [
      [
        "term" => "法人名",
        "desc" => "株式会社 TOMORROW COMPANY"
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
        "term" => "事務所",
        "desc" => "大分県別府市石垣東２丁目５－１２"
      ],
      [
        "term" => "TEL",
        "desc" => "0977-80-7575"
      ],
      [
        "term" => "代表者",
        "desc" => "岡本 達朗"
      ]
    ];
    foreach ($summary as $item) :
      $term = $item['term'];
      $desc = $item['desc'];

    ?>
      <div class="item-summary">
        <div class="item-summary__inner">
          <dt class="item-summary__term _serif"><?php echo esc_html($term); ?></dt>
          <dd class="item-summary__desc _serif"><?php echo esc_html($desc); ?></dd>
        </div>
      </div>
    <?php endforeach; ?>

  </dl>

  <div class="spacer"></div>

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
        "text" => "先生の話をしっかりと聞く習慣を身に付ける。そのために、正面を向いて保育士の話が聞ける環境を作っています。<br class='_pc'>
子どもには目の向く方向に「心」が向いています。真正面に保育士が見えるように座れば、自然な姿勢で集中して話しを聞くことが出来ます。<br class='_pc'>
TOMORROW COMPANY各園では、就学前５歳児よりこのような環境作りをしています。"
      ],
      [
        "thumbnail" => "concept-approach-03.webp",
        "thumbnail_sp" => "concept-approach-03-sp.webp",
        "step" => "03",
        "lead" => "学力・体力・心力を育てる",
        "text" => "３歳児から始まる「読み・書き・計算・音楽・体育」は3つの力を育てます。<br class='_pc'>
まず学力ですが、３歳児からスタートするオリジナルの学習帳を使用し、興味を持ってもらうことからはじめ、４～５歳児になると「ひらがな」「カタカナ」「足し算」「引き算」子ども達はみんなゲーム感覚で夢中になって取り組んでいきます。<br class='_pc'>
「音楽」では、鍵盤ハーモニカを取り入れ、気づけば楽譜なしで演奏できるまで音楽を楽しんでもらいます。<br class='_pc'>
「体力」は毎朝「かけっこ」を取り入れ一日がスタートしていき、その他、跳び箱。跳び箱は目標を持ちやすく達成感、満足感は̏やればできる˝その自信につながります。<br class='_pc'>
子ども達のやる気を引き出し、出来たことの喜びを体感して、挑戦する気持ちを育てていきたいと思います。"
      ],
      [
        "thumbnail" => "concept-approach-04.webp",
        "thumbnail_sp" => "concept-approach-04-sp.webp",
        "step" => "04",
        "lead" => "食は生きる力を育てます",
        "text" => "栄養計算されたメニューに対してプロである栄養士、調理師がつくるこだわりの美味しい給食で子ども達の本来持っているバランスの良い体に整え、やる気・忍耐力・集中力・体力などを引き出します。<br class='_pc'>
キッチン内は、カフェスタイル。完成度の高い給食を提供するためにも、キッチンの環境はとても大切です。保育も給食もバランスの取れた中身が重要です。食べ物の「力」を子ども達に届けられるよう、日々心掛けています。"
      ]
    ];
    foreach ($policy as $item) :
      $thumbnail = $item['thumbnail'];
      $thumbnail_sp = $item['thumbnail_sp'];
      $step = $item['step'];
      $lead = $item['lead'];
      $text = $item['text'];
    ?>
      <div class="card-concept">
        <div class="card-concept__thumbnail">
          <picture>
            <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/concept/<?php echo esc_html($thumbnail_sp); ?>' media='(max-width: 780px)' />
            <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/concept/<?php echo esc_html($thumbnail); ?>" alt="">
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

  <div class="spacer"></div>

  <div class="content-philosophy">
    <div class="content-philosophy__header">
      <h2 class="content-philosophy__heading _en js-reveal" data-splitting>
        TOMORROW Philosophy
      </h2>
    </div>
    <div class="content-philosophy__body js-fadein">
      <p class="content-philosophy__text _serif">
        私たちはこのような人を求めています。<br>
        保育という仕事は決して楽なものではありませんが、<br>
        「子ども達の笑顔にかこまれ人間としても成長したい。」<br>
        そのような人生観・価値観を共有できる人を求めています。
      </p>
      <p class="content-philosophy__text _serif">
        ぜひ、TOMORROW COMPANYに入りたい方のみ採用検討します。
      </p>
      <p class="content-philosophy__text _serif">
        元気がよく明るい方を求めています。<br>
        人の話しを聞く時は相手の目を見て真剣に誠実方を求めています。<br>
        日常、何気ない時も子ども達のことや保育のことを<br>
        自然に無意識のうちに考えている人を求めています。<br>
        美しいものを美しいと感じられる人を求めています。
      </p>
      <p class="content-philosophy__text _serif">
        保育という仕事は素晴らしい。やりがいのある仕事です。<br>
        上記の価値観を共感できる、あなたをお待ちしています。
      </p>
      <p class="content-philosophy__text _serif">
        株式会社 TOMORROW COMPANY <br>
        代表取締役 岡本 達朗
      </p>
    </div>
  </div>


  <div class="spacer"></div>

  <a href="#" target="_blank" class="panel-movie">
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


  <div class="spacer"></div>

  <div class="panel-images">
    <?php $images = [
      [
        "pc" => "yamabiko/yamabiko-01.webp",
        "sp" => "yamabiko/yamabiko-01-sp.webp"
      ],

      [
        "pc" => "yamabiko/yamabiko-02.webp",
        "sp" => "yamabiko/yamabiko-02-sp.webp"
      ],
      [
        "pc" => "yamabiko/yamabiko-03.webp",
        "sp" => "yamabiko/yamabiko-03-sp.webp"
      ],
      [
        "pc" => "yamabiko/yamabiko-04.webp",
        "sp" => "yamabiko/yamabiko-04-sp.webp"
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

  <div class="spacer"></div>



  <div class="content-announce">
    <div class="content-announce__header">
      <h2 class="content-announce__heading">
        <div class="content-announce__heading-row1 _serif">
          自然豊かな環境で
        </div>
        <div class="content-announce__heading-row2 _serif">
          広々とした保育室 園庭が魅力的
        </div>
      </h2>
    </div>
    <div class="content-announce__body">
      <p class="content-announce__text">
        広々とした園舎、園庭を有するTOMORROW COMPANYの第一号園。ここからはじまった保育を原点に保育の質の向上への取りくみを各グループ園に発信しています。別府市石垣という最高の立地、そして自然にも恵まれ 四季によって変化する自然が最高の教材となるなど多くの学びと成長の機会を子ども達に提供しています。
      </p>
    </div>
  </div>



</div>