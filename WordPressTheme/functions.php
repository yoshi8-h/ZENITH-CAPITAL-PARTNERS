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


/* ================================================================ */
/* プラグイン『Contact Form 7』の自動整形機能を無効化 */
// 『Contact Form 7』を使ってフォームを実装すると、自動整形機能が勝手に働き、勝手に変な所に<p>タグや<br>タグが入り、CSSに影響を及ぼすので、それを無効化するための記述。
function wpcf7_autop_return_false() {
  return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');


/* ================================================================ */
/* 管理画面の、固定ページの『コードエディター』でコードを修正できるようにする際の、画像パスを相対的に表示するためのショートコードを作成 */
// [path] ショートコードを定義
function replace_path_shortcode() {
  // 現在のテーマフォルダのURLを返す
  return get_theme_file_uri();
}
add_shortcode('path', 'replace_path_shortcode');




// 上記で定義した [path] のショートコードは、普通の<img>タグの『src』属性では上手くいくが、<picture>タグの『srcset』属性には適用されないため、以下の記述をする事で、srcset属性内にもショートコードを適用可能に。
add_filter('wp_kses_allowed_html', function ($tags) {
  // pictureタグとsourceタグのsrcset属性を許可する
  $tags['source']['srcset'] = true;
  return $tags;
});

add_filter('the_content', function ($content) {
  // ショートコードを展開する
  return do_shortcode($content);
}, 11);


/* ================================================================ */
/* 管理画面の、固定ページの『コードエディター』に記述したコードを、WordPress側で勝手に自動整形しないようにする記述 */
// これを記述しないと、勝手に<a>タグの前に<p>タグが挿入されてしまったりするため。
// 固定ページの場合のみ、自動形成を無効化。(でないと、投稿などに影響が出てしまう可能性があるため。)
add_filter('the_content', function ($content) {
  // 固定ページでのみ自動整形を無効化
  if (is_page()) {
      // wpautopを無効化してそのまま出力
      remove_filter('the_content', 'wpautop');
      remove_filter('the_content', 'shortcode_unautop');
      return $content;
  }

  // 投稿やその他の投稿タイプでは通常どおり自動整形を適用
  return wpautop($content);
}, 1); // フィルタ優先度を1に設定（最優先で実行）


/* ================================================================ */
/* 管理画面の、固定ページの『コードエディター』に記述した<a>タグのリンク先コードを、ショートコードで汎用的に出力できるようにする記述 */
// 管理画面の、固定ページの『コードエディター』にPHPを記述すると、挙動がおかしくなるため。(aタグにCSSが適用されない)
// ショートコードで指定するなどしないと汎用性がないため。
// ショートコード内で『slug』を指定できるようにして、汎用的なコードに。
// ※ [重要] 以下の①のようにコードエディターに記述することで、②のようなコードが出力される。
// ①href="[link slug='business-details']"
// ②ref="https://example.com/business-details"
function generate_page_link_shortcode($atts) {
  // ショートコードの属性を取得し、デフォルト値を設定
  $atts = shortcode_atts(
      array(
          'slug' => '', // ページのスラッグ（デフォルトは空）
      ),
      $atts
  );

  // スラッグが指定されていない場合は空文字を返す
  if (empty($atts['slug'])) {
      return '';
  }

  // 指定されたスラッグに対応するページのリンクを取得
  $page = get_page_by_path($atts['slug']);
  if (!$page) {
      return ''; // ページが見つからなければ空文字を返す
  }

  // ページのパーマリンクを取得
  $link = esc_url(get_permalink($page->ID));

  // 完成したリンクを返す
  return $link;
}
add_shortcode('link', 'generate_page_link_shortcode');







// 管理バーを非表示に (今だけ)
add_filter('show_admin_bar', '__return_false');



