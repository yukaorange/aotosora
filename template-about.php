<?php
/*
Template Name: About
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
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/aotosora-about-mv-sp.webp' media='(max-width: 780px)' class="lazy" />
          <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/aotosora-about-mv.webp" alt="">
        </picture>
      </div>
    </div>
  </div>
  <!-- about -->
  <section class="section about-about">
    <div class="content-about js-reveal" data-splitting>
      <div class="content-announce js-reveal" data-splitting>
        <div class="content-announce__header">
          <h2 class="content-announce__heading">
            <div class="content-announce__heading-row1 _serif">
              病気のお子様が
            </div>
            <div class="content-announce__heading-row2 _serif">
              快適な環境とケアの中で
            </div>
            <div class="content-announce__heading-row3 _serif">
              安心して1日過ごせるように
            </div>
          </h2>
        </div>
        <div class="content-announce__body">
          <p class="content-announce__text">
            ​​「子どもが急に熱をだしてしまった......でも仕事は休めない」「熱はさがったけど.....保育園に預けるのは少し心配。」そんな時一時的にお預かりするのが、病児保育室「青とそら」です。<br>
            青とそらでは、病気で保育園や学校に行けない、急な用事で熱のある子どもを一緒に連れて行けない等、病気のお子様が快適な環境とケアの中で安心して1日過ごせるように、専任保育士、看護師のもと保育・看護を行っています。
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- usage -->
  <section class=" section about-usage">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>利用要項</h2>
    </div>
    <dl class="list-summary">
      <?php
      $summary = [
        [
          "term" => "対象",
          "desc" => "大分県内在住の0歳児（6ヶ月）〜小学6年生まで"
        ],
        [
          "term" => "利用時間",
          "desc" => "<span>平日：午前8時〜午後6時（隔離室は午後5時まで）</span><span>土曜日：午前8時〜午後1時</span><span>※日曜日・祝日・年末年始はお休みです。</span>"
        ],
        [
          "term" => "定員",
          "desc" => "3名～12名"
        ],
        [
          "term" => "利用料金",
          "desc" => "<span>1日：1,500円</span><span>半日（5時間以内）：800円</span>"
        ],
        [
          "term" => "給食おやつ",
          "desc" => "<span>給食（おやつ付）：500円</span>
          <span>※アレルギーのある場合は提供はありません。<br>
          持参ください。</span>"
        ],
        [
          "term" => "その他",
          "desc" => "<span>生活保護世帯、市県民税・所得税非課税世帯の場合、補助がでますのでお知らせください。</span><span>利用の際は、証明書が必要となります。</span>"
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
  <!-- map -->
  <section class="section about-map">
    <div class="header-level2">
      <h2 class="header-level2__heading header-level2__heading--map _en js-reveal" data-splitting>MAP</h2>
    </div>
    <div class="about-map__map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.5569239348447!2d131.634475211393!3d33.22571026080991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35469f03721adf21%3A0x77fbf66fab3b7ad8!2z44CSODcwLTA5NTQg5aSn5YiG55yM5aSn5YiG5biC5LiL6YOh5Lit5aSu77yT5LiB55uu77yY4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1702984985964!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <!--howto -->
  <section class="section about-howto">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>利用方法</h2>
    </div>
    <div class="about-howto__body">
      <div class="contents-step">
        <?php $step = [
          [
            "num" => "01",
            "lead" => "利用前に「青とそら」に利用登録",
            "step" => [
              [
                "step_num" => "01",
                "step_content" => "<span>あずかるこちゃんにアクセスしてアカウントを作成する</span><a href='https://azkl.jp/' class='content-step__text--small'>https://azkl.jp/</a>"
              ],
              [
                "step_num" => "02",
                "step_content" => "病児保育室「青とそら」に利用登録"
              ],
            ]
          ],
          [
            "num" => "02",
            "lead" => "利用したい時に「青とそら」に予約申込み",
            "step" => [
              [
                "step_num" => "01",
                "step_content" => "<span>インターネットであずかるこちゃんから「青とそら」を予約申込</span><span class='content-step__text--small'>※利用の前日10時から当日15時まで予約可能。但し、当日9時以降に予約の場合は給食の提供ができません。
                </span>"
              ],
              [
                "step_num" => "02",
                "step_content" => "<span>病院受診をし『病児保育利用申請書』を取得</span>"
              ],
              [
                "step_num" => "03",
                "step_content" => "<span>「青とそら」に入室</span>"
              ],
            ]
          ],
        ];
        foreach ($step as $item) :
          $num = $item['num'];
          $lead = $item['lead'];
        ?>
          <div class="content-step">
            <div class="content-step__header">
              <div class="content-step__number _en">
                <span>STEP</span>
                <span class="content-step__num">
                  <?php echo $num; ?>
                </span>
              </div>
              <div class="content-step__lead _serif">
                <?php echo $lead; ?>
              </div>
            </div>
            <div class="content-step__body">
              <?php
              foreach ($item['step'] as $step) :
                $step_num = $step['step_num'];
                $step_content = $step['step_content']; ?>
                <div class="content-step__step">
                  <div class="content-step__stepNum _en">
                    <?php echo $step_num; ?>
                  </div>
                  <div class="content-step__stepContent _serif">
                    <?php echo $step_content; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- download -->
  <section class="section about-download">
    <div class="about-download__header">
      <h2 class="about-download__heading _serif">『病児保育利用申請書』<br class="_sp">（初めての場合のみ必要）</h2>
    </div>
    <div class="about-download__body">
      <a download="病児・病後児保育記録" href="<?php echo get_template_directory_uri() ?>/pdf/childcare-records.pdf" class="button-more">
        <span class="button-more__text _serif">
          病児・病後児保育記録
        </span>
        <span class="arrow arrow--red">
          <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
            <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
          </svg>
        </span>
      </a>
      <a download="病児保育利用申請書" href="<?php echo get_template_directory_uri() ?>/pdf/application-form.pdf
      " class="button-more">
        <span class="button-more__text _serif">
          病児保育利用　申請書
        </span>
        <span class="arrow arrow--red">
          <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
            <path class="arrow__path" d="M10.073 3.75L0.0585938 0.25L2.28401 3.75L0.0585938 7.25L10.073 3.75Z" fill="#9B4C4C" />
          </svg>
        </span>
      </a>
    </div>
  </section>
  <!-- prepare  -->
  <section class="section about-prepare">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>当日ご用意いただくもの</h2>
    </div>
    <div class="about-prepare__body">
      <div class="list-prepare">
        <h3 class="list-prepare__lead _serif">必須</h3>
        <ul class="list-prepare__list">
          <?php $list = [
            [
              "text" => "病児保育利用申請書"
            ],
            [
              "text" => "医師連絡票"
            ],
            [
              "text" => "内服薬"
            ],
            [
              "text" => "お薬手帳"
            ],
            [
              "text" => "水筒"
            ],
            [
              "text" => "着替え（２～3枚）"
            ],
            [
              "text" => "フェイスタオル1枚"
            ],
            [
              "text" => "ハンドタオル2枚"
            ],
            [
              "text" => "ビニール袋（汚れ物入れ）"
            ],
            [
              "text" => "掛け布団（タオルケット等）"
            ],
          ];
          foreach ($list as $item) :
            $text = $item['text'];
          ?>
            <li class="list-prepare__item _serif">
              <?php echo $text; ?>
            </li>
          <?php
          endforeach; ?>
        </ul>
      </div>
      <div class="list-prepare">
        <h3 class="list-prepare__lead _serif">必要に応じて</h3>
        <ul class="list-prepare__list">
          <?php $list = [
            [
              "text" => "ミルク、哺乳瓶"
            ],
            [
              "text" => "エプロン（食事用）"
            ],
            [
              "text" => "オムツ（６～10枚）"
            ],
            [
              "text" => "おしりふき"
            ],
          ];
          foreach ($list as $item) :
            $text = $item['text'];
          ?>
            <li class="list-prepare__item _serif">
              <?php echo $text; ?>
            </li>
          <?php
          endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>