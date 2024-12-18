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
    <div class="header__inner">
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
      <!-- <button class="header__btn js-header__btn">
        <span class="header__bar"></span>
        <span class="header__bar"></span>
        <span class="header__bar"></span>
      </button> -->
    </div>
  </header>

  <!-- ドロワーメニュー -->

