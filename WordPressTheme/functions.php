<?php

/* CSSやJSの読み込み */
function my_theme_enqueue_assets()
{
  // Google Fontsの読み込み
  wp_enqueue_style('google-fonts-preconnect', 'https://fonts.googleapis.com', array(), null);
  wp_enqueue_style('google-fonts-preconnect2', 'https://fonts.gstatic.com', array(), null);
  wp_style_add_data('google-fonts-preconnect2', 'crossorigin', 'anonymous');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Murecho:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);

  // CSSファイルの読み込み
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
  // テーマ内のCSSファイル（filemtime()によるキャッシュバスティング）
  wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');

  // JavaScriptファイルの読み込み（defer付き）
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);
  wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap'), null, true);
  wp_enqueue_script('gsap-scrollto', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js', array('gsap'), null, true);
  wp_enqueue_script('gsap-custom-ease', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js', array('gsap'), null, true);

  // jQueryの読み込み
  wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);
  wp_script_add_data('jquery-cdn', 'integrity', 'sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=');
  wp_script_add_data('jquery-cdn', 'crossorigin', 'anonymous');

  // SwiperのJavaScriptファイルの読み込み
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

  // テーマ内のJavaScriptファイル（filemtime()によるキャッシュバスティング）
  wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery-cdn'), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');


/* ================================================================ */
/* WordPressの標準機能を拡張 */
function my_setup() {
  add_theme_support('post-thumbnails');  // アイキャッチ画像
  add_theme_support('automatic-feed-links');  // RSSフィード
  add_theme_support('title-tag');  // タイトルタグをWordPress側から出力
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));  // HTML5形式でタグを出力してくれる
}
add_action("after_setup_theme", "my_setup");



