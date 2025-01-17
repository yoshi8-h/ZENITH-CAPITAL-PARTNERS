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
    <div class="anchors anchors--no-sp l-anchors">
      <div class="anchors__inner inner">
        <div class="anchors__wrap js-fadeInUp">
          <a href="#top-message" class="anchors__item">トップメッセージ</a>
          <a href="#philosophy" class="anchors__item">企業理念</a>
          <a href="#overview" class="anchors__item">会社概要</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company-member'))); ?>" class="anchors__item">主要メンバー紹介</a>
        </div>
      </div>
    </div>

    <!-- top-message セクション (トップメッセージ) -->
    <section id="top-message" class="top-message l-top-message">
      <div class="top-message__inner inner">
        <div class="top-message__title title02 js-fadeInUp">トップメッセージ</div>
        <div class="top-message__contents">
          <div class="top-message__img-area js-fadeInUp">
            <picture class="top-message__img">
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-message-president.png">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-message-president-sp.webp" alt="平田社長の写真">
            </picture>
            <p class="top-message__img-text">
              不動産ソリューションのプロフェッショナルとして、<br class="u-desktop"
              >人と不動産のうつくしい関係を追及し続ける。
            </p>
          </div>
          <div class="top-message__messages js-fadeInUp">
            <p class="top-message__message">
              私が生まれ育った田舎では、どこにいても山や森の濃い土や草木の匂いがしていた記憶があります。当時の実家のまわりには高い建物も少なく、たくさんの自然に囲まれてシンプルだけど豊かな暮らしを気に入っていました。一方で、故郷を離れて上京してからは、コンクリートやアスファルトに囲まれた生活が当たり前になり、最初の頃は合性や機能性ばかりが優先された場所に窮屈さや戸惑いを感じていました。<br
              >しかし、都市にもその土地に根差す歴史や風習の名残りがあり、それらに惹かれて集う人々の生活様式を受け入れつつ、時の経過とともに変化を続ける都市生活にも魅力を感じるようになりました。
            </p>
            <p class="top-message__message">
              私は「都市」と「地方」のどちらの生活も経験してきたのですが、都市には都市の楽しさや面白さがあり、地方には地方ならではの面白さを発見したりしています。<br
              >どちらの方がいいのかと考えたりもしたのですが、どちらの方がいいと決めつけるのではなく、このハイブリッドな感覚に慣れて楽しむ方が幸せだと考えるようになりました。土地には私たちが生まれる遥か昔からそれぞれに役割があり、その役割を果たしてきた結果として今の形があるのだと思います。<br
              >それぞれの土地の持つ記憶を大切にしながら、その土地に新たな人々が集うことで作り出される変化に私たちがうまく溶け込み、馴染み、そして慣れていくこと。これこそが、人と不動産のうつくしい関係と言えるのではないでしょうか。
            </p>
            <p class="top-message__message">
              これだけ様々な記憶を受け継ぎ、さらに、時の経過とともに取り巻く環境が変化し続ける土地には、個別性が強いがゆえに、人々との間で問題が起こることや、その場所にふさわしくないものになっていくことが多々あります。<br
              >私たちは、これまで培ってきた理論と実践に基づく経験を活かして、分かりやすく解決方法を説明できるように心掛け、そこに暮らし、そこに集う人々と不動産のうつくしい関係を追求し次の世代へ引き継いでいきたいと思います。
            </p>
          </div>
          <div class="top-message__president-name js-fadeInUp"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/president-name.webp" alt="代表取締役社長　平田徹也"></div>
        </div>
      </div>
    </section>

    <!-- philosophy セクション (企業理念) -->
    <section id="philosophy" class="philosophy l-philosophy">
      <div class="philosophy__inner inner">
        <div class="philosophy__title title02 js-fadeInUp">企業理念</div>
        <div class="philosophy__wrap">
          <div class="philosophy__contents-title js-fadeInUp">人と不動産の「うつくしい」関係<br class="u-mobile">を具現化する「不動産ソリューションカンパニー」</div>
          <div class="philosophy__contents">
            <div class="philosophy__contents-item content8">
              <div class="content8__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/philosophy-img01.webp" alt=""></div>
              <div class="content8__body js-fadeInLeft">
                <div class="content8__title">その土地の＜記憶＞がいつまでも受け継げられていること。</div>
                <p class="content8__text">
                  不動産は、その土地にふさわしいものでなければいけない、と私たちは考えています。最近では日本全国で同じような不動産を多く見かけますが、その土地にとってふさわしい不動産とは、それぞれの土地固有の匂いや空気感、そして歴史など、土地の「記憶」を大切にしながら作られたものです。<br
                  >このような不動産は、その地域にとって大切なものとなり、そこに暮らし集う人たちから愛され続けます。<br
                  >そして、このような人々と不動産のうつくしい関係が、その地域に根差す文化を育んでいくのだと思うのです。
                </p>
              </div>
            </div>
            <div class="philosophy__contents-item content8 content8--reverse js-fadeInUp">
              <div class="content8__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/philosophy-img02.webp" alt=""></div>
              <div class="content8__body js-fadeInRight">
                <div class="content8__title">そこに暮らし、集う人たちの＜経験価値＞がその不動産の価値となる。</div>
                <p class="content8__text">
                  人々と不動産のうつくしい関係は、時の経過とともに変化していきます。様々な経験や価値観を持った人々が、新しい経験を求めて、その場所に集い暮らすようになるからです。固有の「記憶」を持つ土地には世代を重ねながら新し＜経験価値＞が積み重ねられ、この積み重ねによってその場所の価値は更に増幅していきます。<br
                  >一方で、多種多様な＜経験価値＞が積み重ねられた土地で「自分らしくいられる」ためには、その場所に集う人々との間の信頼関係が大切です。<br
                  >集う人々の信頼関係を大切にして、その場所ならではの＜経験価値＞をデザインし、次の世代に引き継いでいくことが求められているのです。
                </p>
              </div>
            </div>
            <div class="philosophy__contents-item content8 content8--low js-fadeInUp">
              <div class="content8__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/philosophy-img03.webp" alt=""></div>
              <div class="content8__body js-fadeInLeft">
                <div class="content8__title">
                  理論と実践に裏打ちされた豊富な経験が、人と不動産の＜持続的な関係性＝うつくしい関係＞を可能にする。
              </div>
                <p class="content8__text">
                  不動産は人々の社会生活や日々の営みを支え、多様な経験や価値観を持った人々の集まりの場である以上、想定外のトラブルが生じたり、また、時の経過とともに、その土地にふさわしくないものになっていくことがあります。これらは不動産の価値に多大な影響を及ぼします。<br
                  >人と不動産の＜持続的な関係性＞を実現するためには、様々な立場の方との信頼関係に基づいたプロフェッショナルとしての解決策が求められます。<br
                  >わたしたちは不動産鑑定士や宅地建物取引士の資格をもった不動産のプロフェッショナルです。理論だけでなく自ら実践することで獲得した経験があります。<br
                  >不動産の持つリスクとポテンシャルを適正に評価しながら最適なリューションを提供し、人と不動産の＜持続的な関係性＝うつくしい関係＞の実現を支援します。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- overview セクション (会社概要) -->
    <section id="overview" class="overview l-overview">
      <div class="overview__inner inner">
        <div class="overview__title title02 js-fadeInUp">会社概要</div>
        <div class="overview__contents">
          <!-- 会社概要 (company-overview) -->
          <div class="overview__contents-item content9">
            <div class="content9__overview company-overview">
              <div class="company-overview__title title03 title03--2 js-fadeInUp">会社概要</div>
              <table class="company-overview__table table js-fadeInUp">
                <thead class="table__head">
                  <tr>
                    <th class="table__header">項目</th>
                    <th class="table__header-body">内容</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table__row">
                    <td class="table__cell-head">会社名</td>
                    <td class="table__cell-body">ゼニス・キャピタル・パートナーズ株式会社</td>
                  </tr>
                  <tr class="table__row">
                    <td class="table__cell-head">所在地</td>
                    <td class="table__cell-body">
                      東京都千代田区有楽町一丁目9番4号　蚕糸会館７階<br
                      >TEL:03-5222-4310　　　<br class="u-mobile">FAX:03-5222-3700
                    </td>
                  </tr>
                  <tr class="table__row">
                    <td class="table__cell-head">代表取締役社長</td>
                    <td class="table__cell-body">平田　徹也</td>
                  </tr>
                  <tr class="table__row">
                    <td class="table__cell-head">設立日</td>
                    <td class="table__cell-body">6,500万円</td>
                  </tr>
                  <tr class="table__row">
                    <td class="table__cell-head">業務内容</td>
                    <td class="table__cell-body">
                      ・アセットマネジメト<br
                      >・不動産コンサルティング<br
                      >・自己投資<br
                      >・テナント事業
                    </td>
                  </tr>
                  <tr class="table__row">
                    <td class="table__cell-head">免許</td>
                    <td class="table__cell-body">
                    ・宅地建物取引業（東京都知事（4）第90681号）<br
                    >・金融商品取引業（関東財務局長（金商）第1802号）<br
                    >　(第二種金融商品取引業、投資助言・代理業)
                    </td>
                  </tr>
                  <tr class="table__row">
                    <td class="table__cell-head">有資格者</td>
                    <td class="table__cell-body">
                      ・不動産鑑定士3名<br
                      >・宅地建物取引士5名<br
                      >・不動産証券化協会認定マスター2名<br
                      >・事業承継士1名<br
                      >・社会保険労務士1名
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- 沿革 (history) -->
          <div class="overview__contents-item content9">
            <div class="content9__history history">
              <div class="history__title title03 title03--2 js-fadeInUp">沿革</div>
              <table class="history__table table02 js-fadeInUp">
                <thead class="table02__head">
                  <tr>
                    <th class="table02__header">項目</th>
                    <th class="table02__header-body">内容</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2006年3月</td>
                    <td class="table02__cell-body">株式会社ゼニス・キャピタル・パートナーズ株式会社　設立</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2008年2月</td>
                    <td class="table02__cell-body">第二種金融商品取引業、投資助言・代理業の免許を取得</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2013年8月</td>
                    <td class="table02__cell-body">業務拡大に伴い港区新橋から千代田区有楽町へ事務所を移転</td>
                  </tr>
                  <tr class="table02__row">
                    <td class="table02__cell-head">2024年6月</td>
                    <td class="table02__cell-body">業務拡大に伴う組織再編のため株式会社LIMを設立し「ほねつぎ市川はりきゅう接骨院」事業を移管</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- アクセス (access) -->
          <div class="overview__contents-item content9">
            <div class="content9__access access">
              <div class="access__title title03 title03--2 js-fadeInUp">アクセス</div>
              <div class="access__body">
                <div class="access__map js-fadeInUp">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.0767484967796!2d139.75840027652384!3d35.67511217258926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf024155555%3A0xf8dba96f3e55b4fd!2z44K844OL44K5772l44Kt44Oj44OU44K_44Or772l44OR44O844OI44OK44O844K644ix!5e0!3m2!1sja!2sjp!4v1735877037010!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul class="access__list js-fadeInUp">
                  <li class="access__list-item list-item">ＪＲ線・地下鉄有楽町線　「有楽町」駅より徒歩2分</li>
                  <li class="access__list-item list-item">地下鉄日比谷線・千代田線・都営三田線　<br>「日比谷」駅より徒歩2分</li>
                  <li class="access__list-item list-item">地下鉄丸ノ内線　「銀座」駅より徒歩5分</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
