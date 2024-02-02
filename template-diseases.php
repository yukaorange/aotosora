<?php
/*
Template Name: Diseases
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
          <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/aotosora-diseases-mv-sp.webp' media='(max-width: 780px)' class="lazy" />
          <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/aotosora/aotosora-diseases-mv.webp" alt="">
        </picture>
      </div>
    </div>
  </div>
  <!-- diseases  -->
  <section class="section diseases-diseases">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>対象疾患</h2>
    </div>
    <div class="diseases-diseases__body">
      <div class="list-diseases">
        <h3 class="list-diseases__lead _serif">一般病児保育室</h3>
        <ul class="list-diseases__list">
          <?php $list = [
            [
              "text" => "上気道炎（急性）",
              "span" => "span1"
            ],
            [
              "text" => "中耳炎",
              "span" => "span1"
            ],
            [
              "text" => "手足口病",
              "span" => "span1"
            ],
            [
              "text" => "感染性胃腸炎<br>※嘔吐して２４時間経過",
              "span" => "span2"
            ],
            [
              "text" => "咽頭炎（急性）",
              "span" => "span1"
            ],
            [
              "text" => "リンゴ炎",
              "span" => "span1"
            ],
            [
              "text" => "突発性発疹",
              "span" => "span1"
            ],
            [
              "text" => "気管支喘息",
              "span" => "span1"
            ],
            [
              "text" => "気管支炎（急性）",
              "span" => "span1"

            ],
            [
              "text" => "ヘルパンギーナ",
              "span" => "span1"
            ],
          ];
          foreach ($list as $item) :
            $text = $item['text'];
            $span = $item['span'];
          ?>
            <li class="list-diseases__item list-diseases__item--<?php echo $span; ?> _serif">
              <?php echo $text; ?>
            </li>
          <?php
          endforeach; ?>
        </ul>
      </div>
      <div class="list-diseases">
        <h3 class="list-diseases__lead _serif">隔離室</h3>
        <ul class="list-diseases__list">
          <?php $list = [
            [
              "text" => "インフルエンザA、B",
              "span" => "span1"
            ],
            [
              "text" => "ノロウイルス",
              "span" => "span1"
            ],
            [
              "text" => "ロタウイルス",
              "span" => "span1"
            ],
            [
              "text" => "感染性胃腸炎、嘔吐下痢<br>※２４時間以内に嘔吐あり",
              "span" => "span2"
            ],
            [
              "text" => "アデノウイルス",
              "span" => "span1"
            ],
            [
              "text" => "おたふく",
              "span" => "span1"
            ],
            [
              "text" => "水疱瘡",
              "span" => "span1"
            ],
            [
              "text" => "ヒトメタニューモウイルス",
              "span" => "span1"
            ],
            [
              "text" => "RSウイルス",
              "span" => "span1"

            ],
            [
              "text" => "下痢症",
              "span" => "span1"
            ],
            [
              "text" => "溶連菌<br>​※内服してから２４時間以内",
              "span" => "span2"
            ],
          ];
          foreach ($list as $item) :
            $text = $item['text'];
            $span = $item['span'];
          ?>
            <li class="list-diseases__item list-diseases__item--<?php echo $span; ?> _serif">
              <?php echo $text; ?>
            </li>
          <?php
          endforeach; ?>
        </ul>
      </div>
      <div class="list-diseases">
        <h3 class="list-diseases__lead _serif">お預かりできない病気</h3>
        <ul class="list-diseases__list list-diseases__list--col2">
          <?php $list = [
            [
              "text" => "はやり目",
              "span" => "span1"
            ],
            [
              "text" => "​流行性角膜炎<br>
              ※アデノウイルスによるもの",
              "span" => "span2"
            ],
            [
              "text" => "しらみ",
              "span" => "span1"
            ],
            [
              "text" => "新型コロナウイルス",
              "span" => "span2"
            ],
          ];
          foreach ($list as $item) :
            $text = $item['text'];
            $span = $item['span'];
          ?>
            <li class="list-diseases__item list-diseases__item--<?php echo $span; ?> _serif">
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