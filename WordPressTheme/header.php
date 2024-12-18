<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <?php wp_head(); ?>
</head>
<body>
  <!-- header -->
  <header class="header">
    <div class="header__inner inner">
      <h1 class="header__title">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="ZENITH CAPITAL PARTNERS"></a>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__title-text">ゼニス・キャピタル・パートナーズ株式会社</a>
      </h1>
      <nav class="header__nav">
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="header__link">事業案内</a>
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="header__link">実績紹介</a>
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="header__link">会社案内</a>
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="header__link">ニュース</a>
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="header__link">採用情報</a>
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="header__link-contact">お問い合わせ</a>
      </nav>
      <button class="header__btn js-header__btn">
        <span class="header__bar"></span>
        <span class="header__bar"></span>
        <span class="header__bar"></span>
      </button>
    </div>
  </header>

  <!-- ドロワーメニュー -->
  <div class="drawer-menu js-drawer-menu">
    <div class="drawer-menu__wrap">
      <div class="drawer-menu__left">
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">キャンペーン</p>
          </a>
          <div class="drawer-link__details">
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
                  echo '<a href="' . esc_url(get_term_link($term)) . '" class="drawer-link__detail">' . esc_html($term->name) . '</a>';
                }
              }
            ?>
          </div>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">私たちについて</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">ダイビング情報</p>
          </a>
          <div class="drawer-link__details">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category1" class="drawer-link__detail">ライセンス講習</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category3" class="drawer-link__detail">体験ダイビング</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category2" class="drawer-link__detail">ファンダイビング</a>
          </div>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">ブログ</p>
          </a>
        </div>
      </div>
      <div class="drawer-menu__right">
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">お客様の声</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">料金一覧</p>
          </a>
          <div class="drawer-link__details">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__license" class="drawer-link__detail">ライセンス講習</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__experience" class="drawer-link__detail">体験ダイビング</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__fun" class="drawer-link__detail">ファンダイビング</a>
          </div>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">よくある質問</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">プライバシー<br>ポリシー</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">利用規約</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">お問い合わせ</p>
          </a>
        </div>
      </div>
    </div>
  </div>
