<?php
/*
Template Name: 採用情報
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
  <!-- philosophy -->
  <section class="section recruit-philosophy">
    <div class="content-philosophy js-reveal" data-splitting>
      <div class="content-philosophy__header">
        <h2 class="content-philosophy__heading _serif">
          TOMORROW <br class="_sp">Philosophy
        </h2>
      </div>
      <div class="content-philosophy__body">
        <p class="content-philosophy__text _serif">
          私たちはこのような人を求めています。<br>
          保育という仕事は決して楽なものではありませんが、<br class="_pc">
          「子ども達の笑顔にかこまれ人間としても成長したい。」<br class="_pc">
          そのような人生観・価値観を共有できる人を求めています。
        </p>
        <p class="content-philosophy__text _serif">
          ぜひ、TOMORROW COMPANYに入りたい方のみ採用検討します。
        </p>
        <p class="content-philosophy__text _serif">
          元気がよく明るい方を求めています。<br class="_pc">
          人の話しを聞く時は相手の目を見て真剣に誠実方を求めています。<br class="_pc">
          日常、何気ない時も子ども達のことや保育のことを<br class="_pc">
          自然に無意識のうちに考えている人を求めています。<br class="_pc">
          美しいものを美しいと感じられる人を求めています。
        </p>
        <p class="content-philosophy__text _serif">
          保育という仕事は素晴らしい。やりがいのある仕事です。<br class="_pc">
          上記の価値観を共感できる、あなたをお待ちしています。
        </p>
        <p class="content-philosophy__text _serif">
          株式会社 TOMORROW COMPANY <br>
          代表取締役 岡本 達朗
        </p>
      </div>
    </div>
  </section>
  <!-- movie -->
  <section class="section recruit-movie">
    <a href="#" target="_blank" class="panel-movie panel-movie--recruit">
      <div class="panel-movie__inner">
        <div class="panel-movie__header">
          <div class="panel-movie__lead _en js-reveal" data-reveal>
            Movie
          </div>
          <div class="panel-movie__sub _en js-reveal" data-reveal>
            A Day of TOMORROW COMPANY
          </div>
        </div>
        <div class="panel-movie__button js-fadein">
          <div class="button-default">
          </div>
        </div>
      </div>
    </a>
  </section>
  <!-- summary -->
  <section class="section recruit-summary">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>採用データ</h2>
    </div>
    <div class="recruit-summary__body">
      <dl class="list-summary">
        <div class="item-summary">
          <div class="item-summary__inner">
            <dt class="item-summary__term _serif">職種</dt>
            <dd class="item-summary__desc _serif">保育士 幼稚園教諭一種または二種</dd>
          </div>
        </div>
        <div class="item-summary">
          <div class="item-summary__inner">
            <dt class="item-summary__term _serif">給与</dt>
            <dd class="item-summary__desc _serif">
              <ul class="list-content">
                <li class="item-content">
                  <div class="item-content__header">大分市認可保育園勤務の場合</div>
                  <div class="item-content__body">
                    <div class="item-content__term">短大 専門卒</div>
                    <div class="item-content__desc">209,000円～252,000円</div>
                    <div class="item-content__term">４年制大学卒</div>
                    <div class="item-content__desc">212,000円～255,000円</div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-content__header">別府市認可保育園勤務の場合</div>
                  <div class="item-content__body">
                    <div class="item-content__term">短大 専門卒</div>
                    <div class="item-content__desc">204,000円～247,000円</div>
                    <div class="item-content__term">４年制大学卒</div>
                    <div class="item-content__desc">207,000円～250,000円</div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-content__header">別府市認可保育園勤務の場合</div>
                  <div class="item-content__body">
                    <p class="item-content__text">
                      上記の金額は新卒時の給与です。<br>
                      経験、能力を考慮した上で規定により決定します。
                    </p>
                  </div>
                </li>
              </ul>
            </dd>
          </div>
        </div>
        <div class="item-summary">
          <div class="item-summary__inner">
            <dt class="item-summary__term _serif">昇給</dt>
            <dd class="item-summary__desc _serif">年1回（毎年4月　3,000円～10,000円）</dd>
          </div>
        </div>
        <div class="item-summary">
          <div class="item-summary__inner">
            <dt class="item-summary__term _serif">賞与</dt>
            <dd class="item-summary__desc _serif">年3回（8月・12月・3月）約4カ月/年</dd>
          </div>
        </div>
        <div class="item-summary">
          <div class="item-summary__inner">
            <dt class="item-summary__term _serif">時間</dt>
            <dd class="item-summary__desc _serif">
              <div class="item-summary__text">
                7:00～19:00
              </div>
              <div class="item-summary__text">
                （ローテーション勤務で実労8時間）
              </div>
            </dd>
          </div>
        </div>
        <div class="item-summary">
          <div class="item-summary__inner">
            <dt class="item-summary__term _serif">社会保険</dt>
            <dd class="item-summary__desc _serif">健康保険・厚生・雇用保険</dd>
          </div>
        </div>
        <div class="item-summary">
          <div class="item-summary__inner">
            <dt class="item-summary__term _serif">福利厚生</dt>
            <dd class="item-summary__desc _serif">
              <div class="item-summary__text">
                ・有給休暇<br>
                （入職日に年12日間 最大20日間）
              </div>
              <div class="item-summary__text">
                ・退職金制度
              </div>
              <div class="item-summary__text">
                ・産休育休制度
              </div>
              <div class="item-summary__text">
                ・育児短時間勤務制度
              </div>
              <div class="item-summary__text">
                ・誕生月特別休日制度
              </div>
            </dd>
          </div>
        </div>
      </dl>
    </div>
  </section>

</main>
<?php get_footer(); ?>