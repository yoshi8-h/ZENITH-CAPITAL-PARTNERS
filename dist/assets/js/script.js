"use strict";

jQuery(function ($) {// この中であればWordpressでも「$」が使用可能になる
});

/* -------------------------------------------------------------------------------- */
/* headerの下にborder-bottomを追加 (少しでもスクロールした場合に) */
document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('.header');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 0) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
});

/* -------------------------------------------------------------------------------- */
/* トップへ戻るボタン */
// 画面を少し(今回は80px)スクロールした時に表示(通常は非表示)
var pageTop = document.querySelector(".js-top-btn");
window.addEventListener("scroll", function () {
  if (80 < window.scrollY) {
    // 80px
    pageTop.classList.add("is-show");
  } else {
    pageTop.classList.remove("is-show");
  }
});

/* -------------------------------------------------------------------------------- */
/* ハンバーガーメニュー(ドロワーメニュー) */
// クリックされた時に『is-clicked』クラスを付け外ししてボタンを変形・ドロワーメニューを表示/非表示
// 「html,body」に『is-fixed』クラスを付け外ししてドロワーが開いてる時はスクロールを無効に
// ドロワーメニュー外にオーバーレイを表示して背景を暗くする。(別途HTMLを追加済み)
document.querySelector('.js-header__btn').addEventListener('click', function (e) {
  e.preventDefault();

  // 要素を取得
  var headerBtn = document.querySelector('.js-header__btn'); // ハンバーガーメニューのボタン
  var drawerMenu = document.querySelector('.js-drawer-menu'); // ドロワーメニュー
  var drawerOverlay = document.querySelector('.js-drawer-overlay'); // 背景オーバーレイ

  // 各クラスのトグル処理
  headerBtn.classList.toggle('is-clicked'); // ボタンの状態をトグル
  drawerMenu.classList.toggle('is-clicked'); // ドロワーメニューの開閉をトグル
  drawerOverlay.classList.toggle('is-active'); // 背景オーバーレイの表示/非表示をトグル
  document.documentElement.classList.toggle('is-fixed'); // htmlタグのスクロール固定
  document.body.classList.toggle('is-fixed'); // bodyタグのスクロール固定
});

/* -------------------------------------------------------------------------------- */
/* アコーディオン (ドロワーメニュー内) */
jQuery(".js-accordion").on("click", function (e) {
  e.preventDefault();
  if (jQuery(this).parent().hasClass("is-open")) {
    jQuery(this).parent().removeClass("is-open");
    jQuery(this).next().slideUp();
  } else {
    jQuery(this).parent().addClass("is-open");
    jQuery(this).next().slideDown();
  }
});