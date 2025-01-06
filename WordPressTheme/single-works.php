<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-project.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-project-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">実績紹介</div>
            <div class="title__en">PROJECT</div>
          </h2>
          <p class="sub-fv__text">これまでの当社の実績をご覧いただけます。</p>
        </div>
      </div>
    </div>

    <!-- works-contents セクション (実績詳細内容) -->
    <section class="works-contents l-works-contents">
      <div class="works-contents__inner inner">
        <div class="works-contents__wrap">
          <div class="works-contents__top">
            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="works-contents__list-link">業務実績一覧に戻る　→</a>
          </div>
          <div class="works-contents__contents-wrap">
            <h1 class="works-contents__title"><?php the_title(); ?></h1>
            <div class="works-contents__categories">
              <div class="works-contents__category">アセットマネジメント</div>
              <div class="works-contents__category">不動産コンサルティング</div>
            </div>
            <div class="works-contents__content">
              <?php the_content(); ?>

              <!-- 画像パターン① (画像 横1枚) -->
              <div class="works-contents__images-area images01">
                <div class="images01__contents">
                  <div class="images01__contents-item contents01">
                    <div class="contents01__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img01.webp" alt=""></div>
                    <p class="contents01__text">屋上ペントハウス外観　after</p>
                  </div>
                </div>
              </div>

              <!-- 画像パターン② (画像 横2枚) -->
              <div class="works-contents__images-area images02">
                <div class="images02__contents">
                  <div class="images02__contents-item contents02">
                    <div class="contents02__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img02.webp" alt=""></div>
                    <p class="contents02__text">屋上ペントハウス外観　after</p>
                  </div>
                  <div class="images02__contents-item contents02">
                    <div class="contents02__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img03.webp" alt=""></div>
                    <p class="contents02__text">屋上ペントハウス外観　after</p>
                  </div>
                </div>
              </div>

              <!-- 画像パターン③ (画像 縦1枚、横2枚) -->
              <div class="works-contents__images-area images03">
                <div class="images03__contents">
                  <div class="images03__contents-item contents03">
                    <div class="contents03__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img04.webp" alt=""></div>
                    <p class="contents03__text">屋上ペントハウス外観　after</p>
                  </div>
                  <div class="images03__contents-item contents03">
                    <div class="contents03__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img03.webp" alt=""></div>
                    <p class="contents03__text">屋上ペントハウス外観　after</p>
                  </div>
                  <div class="images03__contents-item contents03">
                    <div class="contents03__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img03.webp" alt=""></div>
                    <p class="contents03__text">屋上ペントハウス外観　after</p>
                  </div>
                </div>
              </div>

              <!-- 詳細情報 (表 & タイトル) -->
              <div class="works-contents__info info02">
                <div class="info02__title">詳細情報</div>
                <table class="info02__table table">
                  <thead class="table__head">
                    <tr>
                      <th class="table__header">項目</th>
                      <th class="table__header-body">内容</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table__row">
                      <td class="table__cell-head">所在・種別</td>
                      <td class="table__cell-body">木場ビル</td>
                    </tr>
                    <tr class="table__row">
                      <td class="table__cell-head">規模</td>
                      <td class="table__cell-body">築24年の7階建て都内オフィスビル兼住居（最上階元オーナー部屋）</td>
                    </tr>
                    <tr class="table__row">
                      <td class="table__cell-head">業務内容（提案内容）</td>
                      <td class="table__cell-body">住居部分をスタジオ利用向けのオフィスとして用途変更し、リースアップ</td>
                    </tr>
                    <tr class="table__row">
                      <td class="table__cell-head">業務実施内容</td>
                      <td class="table__cell-body">
                        ・物件の周辺環境及びテナントの需要について調査を実施しました。<br
                        >・撮影用のスペースとして、デザイン性を重視した改装を実施しました。<br
                        >・コストを最小限に抑えた改装工事を実施しました。<br
                        >・工事内容確認、費用負担の調整、原状回復内容の取り決め、全体スケジュール調整などのマネジメントを実施しました。<br
                        >・本物件の将来性を理解された投資家や銀行からの資金調達の調整を実施しました。
                      </td>
                    </tr>
                    <tr class="table__row">
                      <td class="table__cell-head">効果・結果</td>
                      <td class="table__cell-body">想定通り撮影スタジオとしてのテナント誘致に成功し、収益力が大幅にアップしたオフィスビルへと変貌致しました。</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="works-contents__btn-wrap">
              <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="works-contents__btn btn2">
                <div class="btn2__text">実績一覧に戻る</div>
                <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <div class="cta l-cta">
      <div class="cta__inner inner">
        <div class="cta__wrap">
          <p class="cta__text">不動産の売却をご検討の方は、<br class="u-mobile">こちらからご相談下さい。</p>
          <div class="cta__btn-wrap">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="cta__btn btn2">
              <div class="btn2__text">お問い合わせ</div>
              <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
            </a>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>
