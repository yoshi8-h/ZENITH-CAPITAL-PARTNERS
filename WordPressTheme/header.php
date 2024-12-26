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
        <div class="header__nav-item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="header__link">事業案内</a>
          <!-- サブメニュー (事業案内) -->
          <div class="header__sub-menu sub-menu is-business">
            <div class="sub-menu__items">
              <a href="" class="sub-menu__item">当社の不動産運用方針</a>
              <a href="" class="sub-menu__item">アセットマネジメント</a>
              <a href="" class="sub-menu__item">不動産コンサルティング</a>
              <a href="" class="sub-menu__item">自己投資</a>
              <a href="" class="sub-menu__item">テナント事業</a>
            </div>
          </div>
        </div>
        <div class="header__nav-item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="header__link">実績紹介</a>
        </div>
        <div class="header__nav-item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>" class="header__link">会社案内</a>
          <!-- サブメニュー (会社案内) -->
          <div class="header__sub-menu sub-menu is-company">
            <div class="sub-menu__items">
              <a href="" class="sub-menu__item">トップメッセージ</a>
              <a href="" class="sub-menu__item">企業理念</a>
              <a href="" class="sub-menu__item">会社概要</a>
              <a href="" class="sub-menu__item">主要メンバー紹介</a>
            </div>
          </div>
        </div>
        <div class="header__nav-item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>" class="header__link">ニュース</a>
        </div>
        <div class="header__nav-item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="header__link">採用情報</a>
        </div>
        <div class="header__nav-item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="header__link-contact">お問い合わせ</a>
        </div>
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
      <div class="drawer-menu__nav nav">
        <div class="nav__item toggle">
          <button type="button" class="toggle__head js-accordion">
            <span class="toggle__head-text">事業案内</span>
            <span class="toggle__open-btn"></span>
          </button>
          <div class="toggle__body">
            <div class="toggle__nav">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">当社の不動産運用方針</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">アセットマネジメント</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">不動産コンサルティング</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">自己投資</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">主要メンバー紹介</a>
            </div>
          </div>
        </div>
        <div class="nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="nav__link">実績紹介</a>
        </div>
        <div class="nav__item toggle">
          <button type="button" class="toggle__head js-accordion">
            <span class="toggle__head-text">会社案内</span>
            <span class="toggle__open-btn"></span>
          </button>
          <div class="toggle__body">
            <div class="toggle__nav">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">トップメッセージ</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">企業理念</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">会社概要</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="toggle__nav-link">主要メンバー紹介</a>
            </div>
          </div>
        </div>
        <div class="nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>" class="nav__link">ニュース</a>
        </div>
        <div class="nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="nav__link">採用情報</a>
        </div>
        <div class="nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="nav__link">お問い合わせ</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ドロワーメニュー表示時の『背景オーバーレイ』 -->
  <div class="js-drawer-overlay"></div>
