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
      </div>
    </div>


  </main>

<?php get_footer(); ?>
