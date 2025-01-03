<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-company.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-company-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">会社案内</div>
            <div class="title__en">COMPANY</div>
          </h2>
          <p class="sub-fv__text">当社の会社情報をご覧いただけます。</p>
        </div>
      </div>
    </div>

    <!-- アンカーリンク群 -->
    <div class="anchors l-anchors">
      <div class="anchors__inner inner">
        <div class="anchors__wrap">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>#top-message" class="anchors__item">トップメッセージ</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>#philosophy" class="anchors__item">企業理念</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>#overview" class="anchors__item">会社概要</a>
          <!-- <a href="<?php echo esc_url(get_permalink(get_page_by_path('company-member'))); ?>" class="anchors__item">主要メンバー紹介</a> -->
        </div>
      </div>
    </div>

    <!-- member セクション (主要メンバー紹介) -->
    <section class="member l-member">
      <div class="member__inner inner">
        <div class="member__title title02">主要メンバー紹介</div>
        <div class="member__contents">
          <!-- 社長 -->
          <div class="member__president president">
            <div class="president__top">
              <div class="president__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/president-img.webp" alt="平田社長の写真"></div>
              <div class="president__body">
                <div class="president__name">代表取締役社長　平田 徹也</div>
                <div class="president__license">
                  <div class="president__license-title">保有資格 ： </div>
                  <div class="president__license-items">不動産鑑定士・宅地建物取引士</div>
                </div>
              </div>
            </div>
            <table class="president__career-table table02">
              <thead class="table02__head">
                <tr>
                  <th class="table02__header">項目</th>
                  <th class="table02__header-body">内容</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table02__row">
                  <td class="table02__cell-head">1996年</td>
                  <td class="table02__cell-body">(財)日本不動産研究所に入所し、不動産の鑑定評価及びコンサルティング業務に従事する。</td>
                </tr>
                <tr class="table02__row">
                  <td class="table02__cell-head">2001年</td>
                  <td class="table02__cell-body">(株)ザイマックス(平成2年株式会社リクルートより分社独立)に入社し、主とし外資系投資家に対するプロパティマネジメントの受託営業、受託物件の売却業務、コンサルティング業務等を担当する。</td>
                </tr>
                <tr class="table02__row">
                  <td class="table02__cell-head">2002年</td>
                  <td class="table02__cell-body">(株)マックスリアルティー(三井住友銀行および(株)ザイマックスの共同出資会社)へ設立メンバーとして出向し、セラーサイドにおいて、売却スキームの提案、競争入札の企画・実行、プロパティマネジメント業務のフレーム構築業務を担当する。</td>
                </tr>
                <tr class="table02__row">
                  <td class="table02__cell-head">2004年</td>
                  <td class="table02__cell-body">バブコック・アンド・ブラウン(株)に入社し、私募ファンドにて取得した物件のアセットマネジメント業務及び売却業務全般を担当する。その後、2005年に日本の不動産に特化した初のLPT(上場不動産信託)である「バブコック・アンド・ブラウン・ジャパン・プロパティ・トラスト(BJT)」のシドニー証券取引所への上場に際して、主にアセットマネジメント業務を担当する。</td>
                </tr>
                <tr class="table02__row">
                  <td class="table02__cell-head">2006年</td>
                  <td class="table02__cell-body">当社設立後、現在に至る。</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- 主要メンバー (社長以外) -->
          <div class="member__members">
            <div class="member__member main-member">
              <div class="main-member__info">
                <div class="main-member__title">
                  <div class="main-member__role">取締役</div>
                  <div class="main-member__name">高橋　孝治</div>
                </div>
                <div class="main-member__license">
                  <div class="main-member__license-title">保有資格 ： </div>
                  <div class="main-member__license-items">宅地建物 取引士・社会保険労務士</div>
                </div>
              </div>
              <table class="main-member__table table02">
                <thead class="table02__head">
                  <tr>
                    <th class="table02__header">項目</th>
                    <th class="table02__header-body">内容</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table02__row">
                    <td class="table02__cell-head">1997年</td>
                    <td class="table02__cell-body">大手金融会社に入社。傘下の不動産会社の責任者としてグループ会社が保有する不動産の管理、資産の流動化業務を手掛ける。</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2007年</td>
                    <td class="table02__cell-body">アセントマネジメント会社に入社。不動産ファンドの組成、期中の管理業務を担当する。</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2013年8月</td>
                    <td class="table02__cell-body">
                      (株)大京傘下の不動産コンサルティング会社へ入社しアセットマネジメント業務を担当する。<br
                      >(株)大京本社へ出向。海外事業部門で海外の不動産ビジネスの環境調査、海外現地の協力会社の開拓業務を担当する。
                    </td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2014年</td>
                    <td class="table02__cell-body">当社入社後、現在に至る。</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="member__member main-member">
              <div class="main-member__info">
                <div class="main-member__title">
                  <div class="main-member__role">取締役</div>
                  <div class="main-member__name">平林　静香</div>
                </div>
                <!-- <div class="main-member__license">
                  <div class="main-member__license-title">保有資格 ： </div>
                  <div class="main-member__license-items">宅地建物 取引士・社会保険労務士</div>
                </div> -->
              </div>
              <table class="main-member__table table02">
                <thead class="table02__head">
                  <tr>
                    <th class="table02__header">項目</th>
                    <th class="table02__header-body">内容</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table02__row">
                    <td class="table02__cell-head">1991年</td>
                    <td class="table02__cell-body">外資系銀行　東京支店に入行し経理を担当する。</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">1996年</td>
                    <td class="table02__cell-body">外資系銀行　東京支店に入行し外為業務、総務を担当する。</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2003年</td>
                    <td class="table02__cell-body">大手外資系証券会社　東京支店に入社し総務を担当する。</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2008年</td>
                    <td class="table02__cell-body">当社入社後、現在に至る。</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="member__member main-member">
              <div class="main-member__info">
                <div class="main-member__title">
                  <div class="main-member__role">取締役</div>
                  <div class="main-member__name">渡辺　雄</div>
                </div>
                <div class="main-member__license">
                  <div class="main-member__license-title">保有資格 ： </div>
                  <div class="main-member__license-items">不動産鑑定士・宅地建物取引士</div>
                </div>
              </div>
              <table class="main-member__table table02">
                <thead class="table02__head">
                  <tr>
                    <th class="table02__header">項目</th>
                    <th class="table02__header-body">内容</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table02__row">
                    <td class="table02__cell-head">1997年</td>
                    <td class="table02__cell-body">(財)日本不動産研究所に入所し、不動産の鑑定評価及びコンサルティング業務に従事する。</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2003年</td>
                    <td class="table02__cell-body">AIGグローバルリアルエステイトジャパンコーポレーションに入社し、日本におけるAIGグループ(アリコ /AIGスター生命 /AIGエジソン生命)及び私募ファンド(AIGジャパンファンド)のための投資用不動産に係るアクイジション業務を担当する。</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2004年</td>
                    <td class="table02__cell-body">
                      バブコック・アンド・ブラウン（株）に入社し、ドイツ投資銀行の物件取得に関するアドバイザリー業務及び私募ファンドにて取得した物件のアクイジション業務を担当する。<br
                      >その後、2005年に日本の不動産に特化した初のLPT(上場不動産信託)である「バブコック・アンド・ブラウン・ジャパン・プロパティ・トラスト(BJT)」のシドニー証券取引所への上場に際して、主にアクイジション業務を担当する。
                    </td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2007年</td>
                    <td class="table02__cell-body">当社入社後、現在に至る。</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
