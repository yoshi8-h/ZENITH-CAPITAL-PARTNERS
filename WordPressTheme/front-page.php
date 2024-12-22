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
      <div class="top-text__bg u-desktop"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-text-bg-arrow.webp" alt=""></div>
      <div class="top-text__bg-sp u-mobile"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-text-bg-arrow-sp.webp" alt=""></div>
      <div class="top-text__inner inner">
        <h2 class="top-text__title">人と不動産の「うつくしい」関係を具現化する<br class="u-mobile">「不動産ソリューションカンパニー」</h2>
        <p class="top-text__text">
          「ゼニス・キャピタル・パートナーズ株式会社」は、<br class="u-mobile">不動産投資理論と実践に基づく経験、<br
          >そして人と人の繋がりを大切にして、不動産価値の持続的な成長を実現するソリューションを<br class="u-mobile">ご提供いたします。
        </p>
      </div>
    </section>

    <!-- management-policy セクション -->
    <section class="management-policy l-management-policy">
      <div class="management-policy__inner inner">
        <h2 class="management-policy__title section-title">
          <div class="section-title__ja">当社の不動産運用方針</div>
          <div class="section-title__en">MANAGEMENT POLICY</div>
        </h2>
        <div class="management-policy__contents">
          <div class="management-policy__content">
          <div class="management-policy__content-title-sp u-mobile">理論と実践に基づいたソリューションを提供します。</div>
            <div class="management-policy__content-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-img01.webp" alt=""></div>
            <div class="management-policy__content-body">
              <div class="management-policy__content-title u-desktop">理論と実践に基づいたソリューションを提供します。</div>
              <p class="management-policy__content-text">不動産鑑定士業をバックグラウンドに持つ当社は、理論的な根拠と実証的なデータを駆使して不動産の価値最大化を目指します。</p>
              <a href="" class="management-policy__content-btn btn1">
                <span class="btn1__text">MORE</span>
                <span class="btn1__arrow">></span>
              </a>
              <div class="management-policy__content-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-icon01.webp" alt=""></div>
            </div>
          </div>
          <div class="management-policy__content">
          <div class="management-policy__content-title-sp u-mobile">信頼関係を大切にします。</div>
            <div class="management-policy__content-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-img02.webp" alt=""></div>
            <div class="management-policy__content-body">
              <div class="management-policy__content-title u-desktop">信頼関係を大切にします。</div>
              <p class="management-policy__content-text">地主・投資家・金融機関とは、成功事例を積み重ねることで信頼関係を、不動産をご利用されるユーザー様とは、快適な環境を提供することで信頼関係を構築します。</p>
              <a href="" class="management-policy__content-btn btn1">
                <span class="btn1__text">MORE</span>
                <span class="btn1__arrow">></span>
              </a>
              <div class="management-policy__content-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-icon02.webp" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- solution セクション -->
    <section class="solution l-solution">
      <div class="solution__inner inner">
        <h2 class="solution__title section-title">
          <div class="section-title__ja">事業案内</div>
          <div class="section-title__en">SOLUTION</div>
        </h2>
        <p class="solution__text">当社の事業内容をご確認いただけます。</p>
        <div class="solution__contents">
          <div class="solution__contents-item content">
            <a href="" class="content__link">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content01.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">不動産の投資分析から、仕入れ、資金調達のアレンジ、資産価値最大化を実現する運営管理、出口戦略（売却）の立案まで、投資家や利益最大化のための一貫したサービスを提供します。</p>
                <div class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </div>
              </div>
            </a>
            <div class="content__title">アセットマネジメント</div>
          </div>
          <div class="solution__contents-item content">
            <a href="" class="content__link">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content02.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">事業承継に伴う事業用不動産の取り扱い、不動産の有効活用、複雑な権利関係の調整等不動産に関するお悩みの解決をサポートします。</p>
                <div class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </div>
              </div>
            </a>
            <div class="content__title">不動産コンサルティング</div>
          </div>
          <div class="solution__contents-item content">
            <a href="" class="content__link">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content03.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">
                  建物の遵法性や入居テナントの問題等の要因で本来の価値が発揮されていない不動産に自己勘定で投資する事業です。<br
                  >価値を改善することで不動産の収益力を高め安定的な収益を確保することを目指します。
                </p>
                <div class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </div>
              </div>
            </a>
            <div class="content__title">自己投資</div>
          </div>
          <div class="solution__contents-item content">
            <a href="" class="content__link">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content03.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">不動産の有効活用、リーシング戦略の一環として、オーナーから不動産を借上げ、自らテナントとして事業運営し不動産の価値最大化を目指します。</p>
                <div class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </div>
              </div>
            </a>
            <div class="content__title">テナント事業</div>
          </div>
        </div>
        <div class="solution__btn-wrap">
          <a href="" class="solution__btn btn2">
            <div class="btn2__text">事業案内</div>
            <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
