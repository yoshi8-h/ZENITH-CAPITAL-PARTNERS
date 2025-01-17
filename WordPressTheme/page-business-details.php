<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-solution.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-solution-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">事業案内</div>
            <div class="title__en">SOLUTION</div>
          </h2>
          <p class="sub-fv__text">当社の事業内容をご確認いただけます。</p>
        </div>
      </div>
    </div>

    <!-- タブ -->
    <div class="tabs u-desktop l-tabs js-fadeInUp-trigger">
      <button class="tabs__item tab is-selected" data-category="category1" role="tab" aria-controls="content-category1">アセットマネジメント</button>
      <button class="tabs__item tab" data-category="category2" role="tab" aria-controls="content-category2">不動産コンサルティング</button>
      <button class="tabs__item tab" data-category="category3" role="tab" aria-controls="content-category3">自己投資</button>
      <button class="tabs__item tab" data-category="category4" role="tab" aria-controls="content-category4">テナント事業</button>
    </div>

    <!-- asset セクション (アセットマネジメント) -->
    <section class="asset l-asset js-tab-content" data-category="category1">
      <div class="asset__inner inner">
        <div class="asset__title title02 js-fadeInUp-trigger">アセットマネジメント</div>
        <p class="asset__message js-fadeInUp-trigger">不動産の投資分析から、仕入れ、資金調達のアレンジ、資産価値最大化を実現する運営管理、出口戦略(売却)の立案まで、投資家の利益最大化のための一貫したサービスを提供します。</p>
        <div class="asset__contents">
          <div class="asset__contents__item content5 js-fadeInUp-trigger">
            <div class="asset__contents-bar"></div>
            <div class="content5__warp">
              <div class="content5__left">
                <div class="content5__left-wrap">
                  <div class="content5__title">
                    <div class="content5__title-number">01.</div>
                    <div class="content5__title-text">不動産取得時</div>
                  </div>
                  <p class="content5__text">
                    不動産の権利関係や周辺の取引事例の精査、将来的な市場動向を分析して、不動産の持つ潜在的な価値やリスクの見極め、中長期的な戦略を基に投資判断致します。<br
                    >案件の特性に応じたスキームを顧客に提案しローンのアレンジメントまで行います。
                  </p>
                </div>
              </div>
              <ul class="content5__list">
                <div class="content5__list-wrap">
                  <li class="content5__list-item list-item  list-item--2">取得不動産の事前調査、分析</li>
                  <li class="content5__list-item list-item  list-item--2">ストラクチャーの構成</li>
                  <li class="content5__list-item list-item  list-item--2">金融機関、信託銀行との調整</li>
                  <li class="content5__list-item list-item  list-item--2">プロパティマネジメント会社との調整</li>
                  <li class="content5__list-item list-item  list-item--2">不動産鑑定・エンジニアリングレポート作成等の調整</li>
                  <li class="content5__list-item list-item  list-item--2">保険会社との調整</li>
                  <li class="content5__list-item list-item  list-item--2">契約書の作成</li>
                </div>
              </ul>
            </div>
          </div>
          <div class="asset__contents__item content5 js-fadeInUp-trigger">
            <div class="asset__contents-bar"></div>
            <div class="content5__warp">
              <div class="content5__left">
                <div class="content5__left-wrap">
                  <div class="content5__title">
                    <div class="content5__title-number">02.</div>
                    <div class="content5__title-text">期中管理</div>
                  </div>
                  <p class="content5__text">
                    不動産取得時に立てた戦略を基に、プロパティマネジメント会社、ビルマネジメント会社、ホテル運営会社等の協力会社と綿密な連携を行い、不動産の価値の維持、向上に努めてまいります。収益拡大チャンスを適切に評価し、投資家の利益最大化を目指します。
                  </p>
                </div>
              </div>
              <ul class="content5__list">
                <div class="content5__list-wrap">
                  <li class="content5__list-item list-item  list-item--2">テナント賃料の適正化</li>
                  <li class="content5__list-item list-item  list-item--2">稼働率向上のためのリーシング</li>
                  <li class="content5__list-item list-item  list-item--2">管理費コスト等の適正化</li>
                  <li class="content5__list-item list-item  list-item--2">バリューアップ工事の検討</li>
                  <li class="content5__list-item list-item  list-item--2">プロパティマネージャーへの助言、監督</li>
                  <li class="content5__list-item list-item  list-item--2">ポートフォリオ管理</li>
                  <li class="content5__list-item list-item  list-item--2">事業計画の作成</li>
                  <li class="content5__list-item list-item  list-item--2">金融機関、信託銀行、会計事務所との調整</li>
                  <li class="content5__list-item list-item  list-item--2">投資家様への報告</li>
                </div>
              </ul>
            </div>
          </div>
          <div class="asset__contents__item content5 js-fadeInUp-trigger">
            <div class="content5__warp">
              <div class="content5__left">
                <div class="content5__left-wrap">
                  <div class="content5__title">
                    <div class="content5__title-number">03.</div>
                    <div class="content5__title-text">不動産売却時</div>
                  </div>
                  <p class="content5__text">
                    市場動向を的確に判断し不動産売却のタイミングを見極めます。外部第三者への売却、スキームの組み換えによるファンド間での売買、リートへの売買等、不動産取得時に立てた戦略に基づき売却致します。
                  </p>
                </div>
              </div>
              <ul class="content5__list">
                <div class="content5__list-wrap">
                  <li class="content5__list-item list-item  list-item--2">売却時期・売却方法の検討</li>
                  <li class="content5__list-item list-item  list-item--2">購入者の選定</li>
                  <li class="content5__list-item list-item  list-item--2">価格合意</li>
                  <li class="content5__list-item list-item  list-item--2">金融機関、信託銀行、会計事務所との調整</li>
                  <li class="content5__list-item list-item  list-item--2">契約書の作成</li>
                  <li class="content5__list-item list-item  list-item--2">投資家様への報告</li>
                </div>
              </ul>
            </div>
          </div>
        </div>
        <p class="asset__attention-text js-fadeInUp-triggerFirst">※個別案件ごとにお客様と調整のうえ、必要に応じて業務項目を追加・削除等いたします。</p>
      </div>
    </section>

    <!-- consulting セクション (不動産コンサルティング) -->
    <section class="consulting l-consulting js-tab-content" data-category="category2">
      <div class="consulting__inner inner">
        <div class="consulting__title title02 js-fadeInUp-trigger">不動産コンサルティング</div>
        <p class="consulting__message js-fadeInUp-trigger">事業承継に伴う事業用不動産の取り扱い、不動産の有効活用、複雑な権利関係の調整等不動産に関するお悩みの解決をサポートします。</p>
        <div class="consulting__content content6 js-fadeInUp-trigger">
          <div class="content6__title title03">事業承継</div>
          <p class="content6__text">
            昨今、中小企業における事業の承継対策が社会問題となっております。<br
            >事業承継の中で、事業用不動産の取り扱いが課題となるケースがありますが、経営者様や、弁護士、税理士等の他士業の方から当社あてに問い合わせを頂くことが増えてきました。<br
            >当社におきましては、これまで培ってきた経験を基に、事業用不動産の適正時価の把握、権利関係の把握や整理、有効活用の提案等で事業承継をサポートさせて頂きます。また、弁護士、税理士、司法書士、社会保険労務士等の他の専門家と連携しておりますので事業承継に関するお悩みをトータルにサポートさせて頂くことも可能です。
          </p>
        </div>
        <div class="consulting__main">
          <div class="consulting__main-title js-fadeInUp-trigger">【事業承継における不動産Ｍ＆Ａの活用例】</div>
          <div class="consulting__main-contents contents">
            <div class="contents__item js-fadeInUp-trigger">
              <div class="contents__item-wrap">
                <div class="contents__item-box is-left">
                  <div class="contents__item-title">A社（建設業）</div>
                  <div class="contents__item-body">
                    <div class="contents__item-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contents__item-icon-01.webp" alt="ビルのアイコン"></div>
                    <p class="contents__item-text">
                      （本業）建設事業<br
                      >年商：3億円　利益：１千万円<br><br
                      >（不動産）本社ビルの土地<br
                      >時価：２億円　簿価：１億円
                    </p>
                  </div>
                </div>
                <div class="contents__item-divider-arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contents__item-divider-arrow.webp" alt="↔︎"></div>
                <div class="contents__item-box is-right">
                  <div class="contents__item-title">B社</div>
                  <div class="contents__item-body">
                    <div class="contents__item-icon is-02"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contents__item-icon-02.webp" alt="ビルのアイコン"></div>
                    <div class="contents__item-body-right">
                      <ul class="contents__item-list">
                        <li class="contents__item-list-item list-item list-item--2">株価の評価根拠の大半が土地となる。</li>
                        <li class="contents__item-list-item list-item list-item--2">A社の本業の建設事業の利益から投資を回収するのに、約20年と長期間を要する。</li>
                      </ul>
                      <p class="contents__item-text-red">⇒ 買収を躊躇</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contents__divider-arrow js-fadeInUp-trigger"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contents__divider-arrow.webp" alt="↓"></div>
            <div class="contents__item js-fadeInUp-trigger">
              <div class="contents__item-wrap">
                <div class="contents__item-box is-left">
                  <div class="contents__item-title">A社（建設業）</div>
                  <div class="contents__item-body is-high">
                    <div class="contents__item-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contents__item-icon-01.webp" alt="ビルのアイコン"></div>
                    <p class="contents__item-text">
                      （本業）建設事業<br
                      >年商：3億円　利益：１千万円<br><br
                      >（不動産）本社ビルの土地<br
                      >時価：２億円　簿価：１億円
                    </p>
                  </div>
                </div>
                <div class="contents__item-boxes">
                  <div class="contents__item-boxes-item box">
                    <div class="box__arrow">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/box__arrow-01.webp" alt="→">
                      <div class="box__arrow-text">建設事業を<br>事業譲渡</div>
                    </div>
                    <div class="box__arrow-sp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/box__arrow-01-sp.webp" alt="→">
                      <div class="box__arrow-text-sp">建設事業を<br>事業譲渡</div>
                    </div>
                    <div class="box__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contents__item-icon-03.webp" alt="ビルのアイコン"></div>
                    <div class="box__body">
                      <div class="box__title">B社</div>
                      <ul class="box__list">
                        <li class="box__list-item list-item list-item--2">建築事業を買収したい。</li>
                      </ul>
                    </div>
                  </div>
                  <div class="contents__item-boxes-item box box--bottom">
                    <div class="box__arrow">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/box__arrow-02.webp" alt="→">
                      <div class="box__arrow-text">A社の<br>株式を譲渡</div>
                    </div>
                    <div class="box__arrow-sp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/box__arrow-02-sp.webp" alt="→">
                      <div class="box__arrow-text-sp">A社の<br>株式を譲渡</div>
                    </div>
                    <div class="box__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contents__item-icon-04.webp" alt="ビルのアイコン"></div>
                    <div class="box__body">
                      <div class="box__title">C社</div>
                      <ul class="box__list">
                        <li class="box__list-item list-item list-item--2">A社の土地がほしい。</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contents__item-role">
                <div class="contents__role-title"><span class="contents__role-title-text">当社の役割</span></div>
                <div class="contents__role-body">
                  <ul class="contents__role-list">
                    <li class="contents__role-list-item list-item list-item--red">税理士等他の専門家と連携し事業譲渡のスキーム策定、実行</li>
                    <li class="contents__role-list-item list-item list-item--red">A社の土地の権利関係の整理及び適正価格の評価</li>
                    <li class="contents__role-list-item list-item list-item--red">C社に対する土地の有効活用</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ul class="consulting__list-01 js-fadeInUp-trigger">
          <li class="consulting__list-01-item list-item list-item--2">単純に土地を売却した場合は、譲渡益1億円に対して約30%の法人税がA社に課される。</li>
          <li class="consulting__list-01-item list-item list-item--2">土地を売却し終えた会社を清算する場合、残余財産のうち払込資本を超える部分は、株主個人に最大55%の所得税・住民税が課される。</li>
        </ul>
        <div class="consulting__list-02-wrap js-fadeInUp-trigger">
          <div class="consulting__list-02-title">【  不動産M＆Aを活用した場合の節税メリット  】</div>
          <ul class="consulting__list-02">
            <li class="consulting__list-02-item list-item list-item--red-2">単純に土地を売却した場合は、株主個人の税負担が株式譲渡益の約20%の税金で済む。</li>
          </ul>
        </div>
        <div class="consulting__content content6 js-fadeInUp-trigger">
          <div class="content6__title title03">有効活用の提案</div>
          <p class="content6__text">
            総合的な観点から不動産のポテンシャルを分析することにより、その不動産の持つ本来の価値を見出し、有効活用の提案や契約内容の見直し等、保有不動産の資産価値最大化をサポートします。
          </p>
        </div>
        <div class="consulting__content content6 js-fadeInUp-trigger">
          <div class="content6__title title03">権利関係の調整</div>
          <p class="content6__text">
            不動産には人間関係が複雑に絡み合い当事者同士では解決できない問題が多く存在します。借地権者様に対する底地を買い取った上での隣接所有者への売買の提案、底地権者と交渉し借地権と底地をあわせての売買の提案等、専門的な観点から最適な解決方法を提案します。
          </p>
        </div>
      </div>
    </section>

    <!-- investment セクション (自己投資) -->
    <section class="investment l-investment js-tab-content" data-category="category3">
      <div class="investment__inner inner">
        <div class="investment__title title02 js-fadeInUp-trigger">自己投資</div>
        <p class="investment__message js-fadeInUp-trigger">
          様々な問題を抱え、本来の価値が発揮されず有効活用されていない不動産に自己勘定で投資する事業です。問題を解決し、収益力を高めることで安定的な運用を目指します。
        </p>
        <div class="investment__contents">
          <div class="investment__content content6 js-fadeInUp-trigger">
            <div class="content6__title title03">自らも積極的に投資</div>
            <p class="content6__text">
              自社単独、または他社との共同投資を通じて、直接的な不動産投資を行っております。これまでに培ってきた経験と知見を自社でも活用しながら、業務領域の拡大に取り組んでおります。
            </p>
          </div>
          <div class="investment__content content6 js-fadeInUp-trigger">
            <div class="content6__title title03">積極的なリスクテイク</div>
            <p class="content6__text">
              市場には、優良物件だけでなく、建物の遵法性に問題があるものや、入居テナントの属性によって売却や金融機関からの資金調達が困難な不動産も多数存在します。<br
              >当社は、適切な調査や対策によって問題解決が可能なものについては、積極的にリスクを引き受けることで、不動産投資の機会を拡大しております。
            </p>
          </div>
          <div class="investment__content content6 js-fadeInUp-trigger">
            <div class="content6__title title03">最終的には顧客サービスへと還元</div>
            <p class="content6__text">
              自己投資を通じて得られた問題解決の経験は、アセットマネジメント・不動産コンサルティングの事業で活用し、最終的には地主や投資家の立場をより理解したサービスへと還元します。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- tenant セクション (テナント事業) -->
    <section class="tenant l-tenant js-tab-content" data-category="category4">
      <div class="tenant__inner inner">
        <div class="tenant__title title02 js-fadeInUp-trigger">テナント事業</div>
        <p class="tenant__message js-fadeInUp-trigger">
          不動産の有効活用、リーシング戦略の一環として、オーナーから不動産を借上げ、自らテナントとして事業運営し不動産の価値最大化を目指します。
        </p>
        <div class="tenant__contents-title title03 js-fadeInUp-trigger">自社運営テナントの紹介</div>
        <div class="tenant__contents">
          <div class="tenant__content content7 js-fadeInUp-trigger">
            <div class="content7__wrap">
              <div class="content7__title title04">ほねつぎ市川はりきゅう接骨院</div>
              <div class="content7__body">
                <div class="content7__body-top">
                  <div class="content7__images images">
                    <div class="images__left"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__left-01.webp" alt="受付"></div>
                    <div class="images__right">
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right01-01.webp" alt="施術風景1"></div>
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right01-02.webp" alt="施術風景2"></div>
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right01-03.webp" alt="施術風景3"></div>
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right01-04.webp" alt="専門器具"></div>
                    </div>
                  </div>
                  <p class="content7__message">
                    千葉県の市川駅から3km離れた住宅街に所在するコンビニエンスストア跡地を再利用して、「はりきゅう接骨院」として事業展開しております。<br
                    >肩こり、腰痛でお悩みの方は年々増えており、多くの地域住民の方々にご来院頂いております。<br
                    >当院では、柔道整復師や鍼灸師といった国家資格保有者が、体に関する運動的なアプローチを駆使して患者様の治療に取り組んでおります。体の健康と美容は密接に関係していることがわかっております。<br
                    >当院では美容鍼や韓国の富裕層のみが通うエグゼティブサロンのメソッドを導入しており、健康から美容までトータルなお悩みを解決できる治療院に進化を続けております。<br
                    >空室で悩むオーナー様への問題解決のみならず、健康、美容増進というかたちで地域に貢献しております。
                  </p>
                </div>
                <div class="content7__body-info info">
                  <div class="info__title">店舗情報</div>
                  <ul class="info__list">
                    <li class="info__list-item">住所　：　〒272-0835　千葉県市川市中国分2丁目16-11</li>
                    <li class="info__list-item">電話番号　：　047-375-0077</li>
                    <li class="info__list-item">営業時間　：　9:00～12:30　　15:00～20:00</li>
                    <li class="info__list-item"><a href="https://www.honetsugi-group.com/honetsugi/kanto/chiba/%E3%81%BB%E3%81%AD%E3%81%A4%E3%81%8E%E5%B8%82%E5%B7%9D%E3%81%AF%E3%82%8A%E3%81%8D%E3%82%85%E3%81%86%E6%8E%A5%E9%AA%A8%E9%99%A2-2/" target="_blank" class="info__list-item-link">ほねつぎ市川はりきゅう接骨院　公式サイト</a></li>
                    <li class="info__list-item-sp">住所：〒272-0835 千葉県市川市中国分2丁目16-11</li>
                    <li class="info__list-item-sp">電話番号：047-375-0077</li>
                    <li class="info__list-item-sp">営業時間：9:00～12:30　15:00～20:00</li>
                    <li class="info__list-item-sp"><a href="https://www.honetsugi-group.com/honetsugi/kanto/chiba/%E3%81%BB%E3%81%AD%E3%81%A4%E3%81%8E%E5%B8%82%E5%B7%9D%E3%81%AF%E3%82%8A%E3%81%8D%E3%82%85%E3%81%86%E6%8E%A5%E9%AA%A8%E9%99%A2-2/" target="_blank" class="info__list-item-link">ほねつぎ市川はりきゅう接骨院　公式サイト</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tenant__content content7 js-fadeInUp-trigger">
            <div class="content7__wrap">
              <div class="content7__title title04">タイトーFステーション 盛岡南店</div>
              <div class="content7__body">
                <div class="content7__body-top">
                  <div class="content7__images images">
                    <div class="images__left"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__left-02.webp" alt="店前の写真"></div>
                    <div class="images__right">
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right02-01.webp" alt="ゲームセンター内1"></div>
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right02-02.webp" alt="ゲームセンター内2"></div>
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right02-03.webp" alt="ゲームセンター内3"></div>
                      <div class="images__right-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/images__right02-04.webp" alt="ゲームセンター内4"></div>
                    </div>
                  </div>
                  <p class="content7__message">
                    岩手県盛岡市に所在する土地約900坪を借り上げサブリース事業を展開しております。<br
                    >盛岡南インターより国道4号線を北上、津志田交差点から車で5分。平日は、周辺のお客様が多く、土日祝日になるとご家族連れ、カップルでのお客様で、店内が賑わっております。<br
                    >土地の有効活用にお悩みの地主様の問題解決のみならず、地域の活性化にも貢献しております。
                  </p>
                </div>
                <div class="content7__body-info info">
                  <div class="info__title">店舗情報</div>
                  <ul class="info__list">
                    <li class="info__list-item">営業時間　：　10:00～24:30　年中無休</li>
                    <li class="info__list-item"><a href="https://www.taito.co.jp/store/00002107" target="_blank" class="info__list-item-link">タイトーFステーション盛岡南店　公式サイト</a></li>
                    <li class="info__list-item-sp">営業時間：10:00～24:30　年中無休</li>
                    <li class="info__list-item-sp"><a href="https://www.taito.co.jp/store/00002107" target="_blank" class="info__list-item-link">タイトーFステーション盛岡南店　公式サイト</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
