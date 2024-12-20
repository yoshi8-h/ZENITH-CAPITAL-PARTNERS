<?php get_header(); ?>

  <main class="main">
    <!-- fv -->
    <div class="fv">
      <div class="fv__inner">
        <video class="fv__video" poster="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-video-alternative-img.webp" webkit-playsinline playsinline muted autoplay loop>
            <!--
                poster：動画ファイルが利用できない環境で代替表示される画像
                webkit-playsinline：iOS 9までのSafari用インライン再生指定
                playsinline：iOS 10以降のSafari用インライン再生指定
                muted：音声をミュートさせる
                autoplay：動画を自動再生させる
                loop：動画をループさせる
                controls：コントロールバーを表示する
            -->
          <source src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-video-dammy.mp4" type="video/mp4">
          <p class="fv__video-alternative-text">動画を再生できるブラウザ環境ではありません。</p>
        </video>
        <p class="fv__text">
          人と人の繋がりを大切にして、<br
          >不動産価値の持続的な成長を<br class="u-mobile">実現するソリューションをご提供します。
        </p>
      </div>
    </div>

    <!-- top-text セクション -->
    <section class="top-text l-top-text">
      <div class="top-text__inner inner">
        <h2 class="top-text__title">人と不動産の「うつくしい」関係<br class="u-mobile">を具現化する<br class="u-mobile">「不動産ソリューションカンパニー」</h2>
        <p class="top-text__text">
          「ゼニス・キャピタル・パートナーズ株式会社」は、<br class="u-mobile">不動産投資理論と実践に基づく経験、<br
          >そして人と人の繋がりを大切にして、不動産価値の持続的な成長を実現するソリューションを<br class="u-mobile">ご提供いたします。
        </p>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
