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
            <div class="title__ja">採用情報</div>
            <div class="title__en">RECRUIT</div>
          </h2>
          <p class="sub-fv__text">当社の採用情報をご確認いただけます。</p>
        </div>
      </div>
    </div>

    <!-- business セクション -->
    <section class="business l-business">
      <div class="business__inner inner">
        <div class="business__title title02">事業案内</div>
        <div class="business__contents">
          <div class="business__contents-item content4">
            <div class="content4__wrap">
              <div class="content4__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content4__img-01.webp" alt=""></div>
              <div class="content4__body">
                <div class="content4__title">アセットマネジメント</div>
                <p class="content4__text">
                  不動産の投資分析から、仕入れ、資金調達のアレンジ、資産価値最大化を実現する運営管理、出口戦略（売却）の立案まで、投資家の利益最大化のための一貫したサービスを提供します。
                </p>
                <a href="" class="content4__btn btn1">
                  <span class="btn1__text">MORE</span>
                  <span class="btn1__arrow">></span>
                </a>
              </div>
            </div>
          </div>
          <div class="business__contents-item content4 content4--reverse">
            <div class="content4__wrap">
              <div class="content4__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content4__img-02.webp" alt=""></div>
              <div class="content4__body">
                <div class="content4__title">不動産コンサルティング</div>
                <p class="content4__text">
                  事業承継に伴う事業用不動産の取り扱い、不動産の有効活用、複雑な権利関係の調整等不動産に関するお悩みの解決をサポートします。
                </p>
                <a href="" class="content4__btn btn1">
                  <span class="btn1__text">MORE</span>
                  <span class="btn1__arrow">></span>
                </a>
              </div>
            </div>
          </div>
          <div class="business__contents-item content4">
            <div class="content4__wrap">
              <div class="content4__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content4__img-03.webp" alt=""></div>
              <div class="content4__body">
                <div class="content4__title">自己投資</div>
                <p class="content4__text">
                  建物の遵法性や入居テナントの問題等の要因で本来の価値が発揮されていない不動産に自己勘定で投資する事業です。価値を改善することで不動産の収益力を高め安定的な収益を確保することを目指します。
                </p>
                <a href="" class="content4__btn btn1">
                  <span class="btn1__text">MORE</span>
                  <span class="btn1__arrow">></span>
                </a>
              </div>
            </div>
          </div>
          <div class="business__contents-item content4 content4--reverse">
            <div class="content4__wrap">
              <div class="content4__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content4__img-04.webp" alt=""></div>
              <div class="content4__body">
                <div class="content4__title">テナント事業</div>
                <p class="content4__text">
                  不動産の有効活用、リーシング戦略の一環として、オーナーから不動産を借上げ、自らテナントとして事業運営し不動産の価値最大化を目指します。
                </p>
                <a href="" class="content4__btn btn1">
                  <span class="btn1__text">MORE</span>
                  <span class="btn1__arrow">></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
