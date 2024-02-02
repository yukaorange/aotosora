<?php
/*
Template Name: 導入について
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
  <!-- announce -->
  <section class="section flow-announce">
    <div class="content-announce js-reveal" data-splitting>
      <div class="content-announce__header">
        <h2 class="content-announce__heading">
          <div class="content-announce__heading-row1 _serif">
            出産後も仕事を続けられる
          </div>
          <div class="content-announce__heading-row2 _serif">
            スピーディーな職場復帰
          </div>
          <div class="content-announce__heading-row3 _serif">
            そんな環境をつくりたい
          </div>
        </h2>
      </div>
      <div class="content-announce__body">
        <p class="content-announce__text _serif">
          トゥモローカンパニーは病院内・企業内保育園の委託運営をし、子育て世代の就労の安定・促進は就労者・病院・企業様にとって大きなメリットをもたらすことができます。勤務先に「専用保育園」があることで、安心して出産後、職場復帰できる。またはスピーディーに復帰できるなど求職者、新規採用者に向けても大きなインパクト・イメージアップに効果的です。病院・企業様にとって、よりよい職場環境の実現にお役に立ちたい考えております。
        </p>
      </div>
    </div>
  </section>
  <!-- merit -->
  <section class="section flow-merit">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>運営委託のメリット</h2>
    </div>
    <div class="flow-merit__thumbnail">
      <picture>
        <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/flow/flow-merit-sp.webp' media='(max-width: 780px)' />
        <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/flow/flow-merit.webp" alt="">
      </picture>
    </div>
    <div class="flow-merit__body">
      <div class="content-flow">
        <div class="content-flow__header">
          <h3 class="content-flow__heading _serif">
            新規導入の場合
          </h3>
        </div>
        <div class="content-flow__body">
          <ul class="list-flow">
            <?php
            $introduces = [
              [
                "step" => "01",
                "lead" => "採用力の強化人材の確保",
                "text" => "福利厚生の充実は求人力アップに大きな関係性があります。新卒・中途を問わず、入社を希望する人材への大きなアピールポイントになります。"
              ],
              [
                "step" => "02",
                "lead" => "女性職員の離職率低下",
                "text" => "「退職理由」の一番の原因は出産後の子育ての両立です。院内・企業内に安心して働ける職場こそが人材の流れを低下させ、離職を防ぐ第一の手段です"
              ],
              [
                "step" => "03",
                "lead" => "スピーディーな職場復帰",
                "text" => "職場内に保育園があることで子どもの預け先がみつからないことを理由に職場復帰が遅れることが解消されます"
              ],
              [
                "step" => "04",
                "lead" => "認可基準の保育内容を提供",
                "text" => "弊社直接の認可保育園のノウハウを活かし保育基準・保育プログラムでの運営をいたします。"
              ],
            ];
            foreach ($introduces as $introduce) :
              $step = $introduce['step'];
              $lead = $introduce['lead'];
              $text = $introduce['text'];
            ?>
              <li class="item-flow">
                <div class="item-flow__header">
                  <div class="item-flow__lead _serif">
                    <?php echo esc_html($lead); ?>
                  </div>
                  <span class="item-flow__step _en">
                    <?php echo esc_html($step); ?>
                  </span>
                </div>
                <div class="item-flow__body">
                  <p class="item-flow__text _serif">
                    <?php echo esc_html($text); ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="content-flow">
        <div class="content-flow__header">
          <h3 class="content-flow__heading _serif">
            自主運営から委託運営への切替の場合
          </h3>
        </div>
        <div class="content-flow__body">
          <ul class="list-flow">
            <?php
            $costs = [
              [
                "step" => "01",
                "lead" => "コスト大幅カット",
                "text" => "人件費の柔軟性・園児数が変動することを考え、人件費も固定費から変動費へ必要におおじた保育士数に調整でき、大幅なコストカットが実現できます。"
              ],
              [
                "step" => "02",
                "lead" => "労務管理業務の削減",
                "text" => "保育士の採用が労務管理など弊社雇用となるため、負担は一切なくなります。"
              ],
            ];
            foreach ($costs as $cost) :
              $step = $cost['step'];
              $lead = $cost['lead'];
              $text = $cost['text'];
            ?>
              <li class="item-flow">
                <div class="item-flow__header">
                  <div class="item-flow__lead _serif">
                    <?php echo esc_html($lead); ?>
                  </div>
                  <span class="item-flow__step _en">
                    <?php echo esc_html($step); ?>
                  </span>
                </div>
                <div class="item-flow__body">
                  <p class="item-flow__text _serif">
                    <?php echo esc_html($text); ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <!-- system -->
  <section class="section flow-system">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>運営委託のシステム</h2>
    </div>
    <div class="flow-system__body">
      <div class="flow-system__figure">
        <div class="flow-system__image">
          <img decoding="auto" loading="lazy" width="898" height="561" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/flow/flow-figure.webp" alt="">
        </div>
        <div class="flow-system__figureScroller">
          <div class="flow-system__figureArrow" data-text="→"></div>
        </div>
      </div>
      <ul class="list-annotation">
        <li class="item-annotation">
          <div class="item-annotation__num _serif">※3</div>
          <div class="item-annotation__text _serif">
            運営委託費は変動費となります。（子ども園児数によって毎月、保育士の人数を変動させることにより自営運営より大幅なコストカットにつながります。）
          </div>
        </li>
        <li class="item-annotation">
          <div class="item-annotation__num _serif">※4</div>
          <div class="item-annotation__text _serif">
            保育料は病院・企業様が料金を自由に設定して頂き、病院・企業様の収入として処理していただきますので、運営委託費の大半をリカバリーできるシステムとなります。
          </div>
        </li>
        <li class="item-annotation">
          <div class="item-annotation__num _serif">※5</div>
          <div class="item-annotation__text _serif">
            行政、国からの補助を受けることができます。
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- flow -->
  <section class="section flow-flow">
    <div class="header-level2 header-level2--jp">
      <h2 class="header-level2__heading _serif js-reveal" data-splitting>開設の流れ</h2>
    </div>
    <p class="flow-flow__message _serif js-reveal" data-splitting>
      ㈱トゥモローカンパニーでは、病院内・企業内保育園のコンサルティングから開設にいたるまでトータルな提案をいたします。「女性の社会での活躍推進」が必要な時代の中、仕事と育児の両立支援、そして経営の一番大切な「人財」の確保戦略として、病院内・企業内の保育園を設置をする企業が増えています。
      保育園を作りたい・・・・。　　作るから開園までの流れは次のようになります。
    </p>
    <div class="flow-flow__thumbnail">
      <picture>
        <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/flow/flow-flow-sp.webp' media='(max-width: 780px)' />
        <img decoding="auto" loading="lazy" width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/flow/flow-flow.webp" alt="">
      </picture>
    </div>
    <div class="flow-flow__body">
      <div class="content-flow">
        <div class="content-flow__header">
          <h3 class="content-flow__heading _serif">
            開設までの流れ
          </h3>
        </div>
        <div class="content-flow__body">
          <ul class="list-flow">
            <?php
            $flows = [
              [
                "step" => "01",
                "lead" => "問い合わせ",
                "text" => "TEL・メールにてお問い合わせください。"
              ],
              [
                "step" => "02",
                "lead" => "ヒアリング",
                "text" => "十分なヒアリングをさせて頂き、設置の目的・イメージを確認させて頂きます。"
              ],
              [
                "step" => "03",
                "lead" => "お見積もりと最適なプランのご提案",
                "text" => "ヒアリングをさせて頂いた内容を反映させ、委託運営費を明確にご提示させて頂きます。"
              ],
              [
                "step" => "04",
                "lead" => "ご契約",
                "text" => "保育施設の概要・保育要項の決定後、契約となります。"
              ],
              [
                "step" => "05",
                "lead" => "詳細打ち合わせ",
                "text" => "その他、開園の向けトータル的にバックアップさせて頂きます。"
              ],
              [
                "step" => "06",
                "lead" => "保護者説明会",
                "text" => "保護者の方々への入所説明会を開催し、保育方針・保育目標・セキュリティ等のご説明をさせて頂きます。"
              ],
              [
                "step" => "07",
                "lead" => "開設スタート",
                "text" => "開設後も本部より定期訪問し、よりよい園を目指します。"
              ],
            ];
            foreach ($flows as $flow) :
              $step = $flow['step'];
              $lead = $flow['lead'];
              $text = $flow['text'];
            ?>
              <li class="item-flow">
                <div class="item-flow__header">
                  <div class="item-flow__lead _serif">
                    <?php echo esc_html($lead); ?>
                  </div>
                  <span class="item-flow__step _en">
                    <?php echo esc_html($step); ?>
                  </span>
                </div>
                <div class="item-flow__body">
                  <p class="item-flow__text _serif">
                    <?php echo esc_html($text); ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

  </section>



</main>
<?php get_footer(); ?>