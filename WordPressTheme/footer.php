  <!-- TOPへ戻るボタン -->
  <a href="#" class="top-btn js-top-btn">
    <div class="top-btn__wrap">
      <div class="top-btn__arrow">
        <svg class="top-btn__arrow-sp" xmlns="http://www.w3.org/2000/svg" width="8" height="30" viewBox="0 0 8 30" fill="none">
          <path d="M7 29L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <svg class="top-btn__arrow-pc" xmlns="http://www.w3.org/2000/svg" width="8" height="42" viewBox="0 0 8 42" fill="none">
          <path d="M7 41L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </a>

  <!-- footer -->
  <footer class="footer l-footer <?php echo is_404() ? 'l-footer--404' : ''; ?>">
    <div class="footer__inner inner">
      <div class="footer__top">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="CodeUps"></a>
        <div class="footer__sns-wrap">
          <a href="https://www.facebook.com/" target="_blank" class="footer__sns"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-logo.png" alt="facebookのロゴ"></a>
          <a href="https://www.instagram.com/" target="_blank" class="footer__sns"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-logo.png" alt="instagramのロゴ"></a>
        </div>
      </div>
      <div class="footer__menu">
        <div class="footer__left">
          <div class="footer__block-pc">
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">キャンペーン</p>
              </a>
              <div class="footer-link__details">
                <?php
                //　カスタム投稿タイプ『campaign』にカテゴリ(タクソノミー)が追加される度に、そのタクソノミーの一覧ページへのリンクが生成されるようにする。
                  // カスタムタクソノミーのカテゴリを取得
                  $terms = get_terms(array(
                    'taxonomy' => 'campaign_category',
                    'hide_empty' => false,
                  ));

                  // 取得したカテゴリが存在する場合、リンクを生成
                  if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                      // 各カテゴリのリンクを出力
                      echo '<a href="' . esc_url(get_term_link($term)) . '" class="footer-link__detail">' . esc_html($term->name) . '</a>';
                    }
                  }
                ?>
              </div>
            </div>
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">私たちについて</p>
              </a>
            </div>
          </div>
          <div class="footer__block-pc">
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">ダイビング情報</p>
              </a>
              <div class="footer-link__details">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category1" class="footer-link__detail">ライセンス講習</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category3" class="footer-link__detail">体験ダイビング</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category2" class="footer-link__detail">ファンダイビング</a>
              </div>
            </div>
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">ブログ</p>
              </a>
            </div>
          </div>
        </div>
        <div class="footer__right">
          <div class="footer__block-pc">
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">お客様の声</p>
              </a>
            </div>
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">料金一覧</p>
              </a>
              <div class="footer-link__details">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__license" class="footer-link__detail">ライセンス講習</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__experience" class="footer-link__detail">体験ダイビング</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__fun" class="footer-link__detail">ファンダイビング</a>
              </div>
            </div>
          </div>
          <div class="footer__block-pc">
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">よくある質問</p>
              </a>
            </div>
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">プライバシー<br>ポリシー</p>
              </a>
            </div>
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">利用規約</p>
              </a>
            </div>
            <div class="footer__link footer-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="footer-link__main">
                <div class="footer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
                <p class="footer-link__text">お問い合わせ</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <small class="footer__copyright">Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
