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
          <a href="" class="anchors__item">トップメッセージ</a>
          <a href="" class="anchors__item">企業理念</a>
          <a href="" class="anchors__item">会社概要</a>
          <a href="" class="anchors__item">主要メンバー紹介</a>
        </div>
      </div>
    </div>

    <!-- top-message セクション (トップメッセージ) -->
    <section class="top-message l-top-message">
      <div class="top-message__inner inner">
        <div class="top-message__title title02">トップメッセージ</div>
        <div class="top-message__contents">
          <div class="top-message__img-area">
            <div class="top-message__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-message-president.webp" alt="平田社長の写真"></div>
            <p class="top-message__img-text">
              不動産ソリューションのプロフェッショナルとして、<br
              >人と不動産のうつくしい関係を追及し続ける。
            </p>
          </div>
          <div class="top-message__messages">
            <p class="top-message__message">
              私が生まれ育った田舎では、どこにいても山や森の濃い土や草木の匂いがしていた記憶があります。当時の実家のまわりには高い建物も少なく、たくさんの自然に囲まれてシンプルだけど豊かな暮らしを気に入っていました。一方で、故郷を離れて上京してからは、コンクリートやアスファルトに囲まれた生活が当たり前になり、最初の頃は合性や機能性ばかりが優先された場所に窮屈さや戸惑いを感じていました。<br
              >しかし、都市にもその土地に根差す歴史や風習の名残り、そしてそれらに惹かれて暮らす人たちの生活模様を見るにつけ、都市生活にも魅力を感じるようになりました。
            </p>
            <p class="top-message__message">
              私は「都市」と「地方」のどちらの生活も経験してきたのですが、都市には都市の楽しさや面白さがあり、地方には地方ならではの面白さを発見したりしています。<br
              >以前は、どちらの方がいいのかと考えたりもしたのですが、どちらの方がいいと結論付けるのではなく、このハイブリッドな感覚に慣れて楽しむ方が幸せだと考えるようになりました。土地には私たちが生まれるもっともっと昔からそれぞれに役割があり、その役割を果たしてきた結果として今の形があるのだと思います。<br
              >それぞれの土地の持つ記憶に私たちがうまく溶け込み、馴染み、そして慣れていくこと。これこそが、人と不動産のうつくしい関係と言えるのではないでしょうか。
            </p>
            <p class="top-message__message">
              これだけ様々な記憶を受け継ぐ土地には、個別性が強いがゆえに、人々との間で問題が起こることも多々あります。<br
              >私たちは、これまで培ってきた理論的な知識と経験を活かして、できるだけ分かりやすく解決方法を説明できるように心掛け、最終的にそこに暮らし、そこに集う人々と不動産のうつくしい関係を追求し続けたいと思います。<br
              >私たちは地道にこのようなプロセスを辿ることにより不動産価値の持続的な成長を目指します。
            </p>
          </div>
          <div class="top-message__president-name"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/president-name.webp" alt="代表取締役社長　平田徹也"></div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
