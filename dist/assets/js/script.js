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

/* -------------------------------------------------------------------------------- */
/* タブ切り替え (事業案内ページ) */
// クリックされたタブ(選択されているタブ)に『.is-selected』クラスを付与して選択中のタブのスタイルのみ変更。
// クリックされたタブ(選択されているタブ)の『data-category』属性の値と同じ『data-category』属性の値を持つコンテンツのみ表示。
// サブメニューなどのリンクからタブに飛んだ時に、そのタブが選択状態にされた形で『事業紹介ページ(タブ切り替えページ)』に遷移する。
document.addEventListener('DOMContentLoaded', function () {
  var tabButtons = document.querySelectorAll('.tab');
  var tabContents = document.querySelectorAll('.js-tab-content');

  // URLからクエリパラメータ（category）を取得
  var params = new URLSearchParams(window.location.search);
  var categoryFromUrl = params.get('category');
  var activeCategory = categoryFromUrl; // URLのcategoryを優先
  var initialTab;
  if (!activeCategory) {
    // URLにcategoryパラメータがない場合は最初のタブをデフォルトで表示
    initialTab = tabButtons[0];
    activeCategory = initialTab.getAttribute('data-category');
  } else {
    // URLにcategoryパラメータがある場合、そのcategoryに対応するタブを探す
    initialTab = Array.from(tabButtons).find(function (tab) {
      return tab.getAttribute('data-category') === activeCategory;
    });
    if (!initialTab) {
      // 不正なcategoryの場合はデフォルトで最初のタブを表示
      initialTab = tabButtons[0];
      activeCategory = initialTab.getAttribute('data-category');
    }
  }

  // --- 初期タブの選択をURLパラメータに基づいて行う ---
  tabButtons.forEach(function (tab) {
    // URLパラメータと一致するタブにのみ 'is-selected' クラスを付与
    if (tab.getAttribute('data-category') === activeCategory) {
      tab.classList.add('is-selected');
    } else {
      tab.classList.remove('is-selected'); // 他のタブは選択を解除
    }
  });

  // 対応するコンテンツの表示設定
  tabContents.forEach(function (content) {
    if (content.getAttribute('data-category') === activeCategory) {
      content.classList.add('active'); // 対応するコンテンツを表示
    } else {
      content.classList.remove('active'); // 他のコンテンツは非表示
    }
  });

  // タブクリック時の処理
  tabButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var category = this.getAttribute('data-category');

      // すべてのタブから選択クラスを削除
      tabButtons.forEach(function (btn) {
        return btn.classList.remove('is-selected');
      });

      // クリックされたタブに選択クラスを追加
      this.classList.add('is-selected');

      // すべてのコンテンツを非表示にする
      tabContents.forEach(function (content) {
        return content.classList.remove('active');
      });

      // 対応するカテゴリーのコンテンツを表示
      document.querySelectorAll(".js-tab-content[data-category=\"".concat(category, "\"]")).forEach(function (content) {
        content.classList.add('active');
      });
    });
  });
});

/* ================================================================================ */
/*  アニメーション  */
// ※jQueryなどの制御の記述は、GSAPの記述より前に書く必要あり。
/* ================================================================================ */

/* １つの要素をフワッと下から出現 */
// ページ先頭にある場合のみ、発火位置を調整するためのクラス『is-top-element』も同時に付与するかどうかで、scrollTriggerの発火位置(start)を調整できるようにしている。
// →ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
document.addEventListener('DOMContentLoaded', function () {
  var fadeInUps = document.querySelectorAll(".js-fadeInUp"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUps.forEach(function (item) {
    var isTopElement = item.classList.contains("is-top-element"); // クラスも同時に持っているか判定

    gsap.fromTo(item, {
      y: 20,
      autoAlpha: 0
    }, {
      y: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: isTopElement ? 'top 50%' : 'top 70%' // 『is-top-element』クラスも同時に付与されている要素のみ、発火位置を下め(50%)に調整。→ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});

/* １つの要素をフワッと上から下に出現 */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInUps = document.querySelectorAll(".js-fadeInDown"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUps.forEach(function (item) {
    gsap.fromTo(item, {
      y: -30,
      autoAlpha: 0
    }, {
      y: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: 'top 70%'
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});

/* １つの要素をフワッと左から右に出現 */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInRights = document.querySelectorAll(".js-fadeInRight"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInRights.forEach(function (item) {
    gsap.fromTo(item, {
      x: -30,
      autoAlpha: 0
    }, {
      x: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: 'top 70%',
        // markers:{
        //   startColor: "green",
        // },
        end: 'top 20%',
        // アニメーション終了タイミングを設定
        toggleActions: 'play none none none' // アニメーションの挙動制御
      }
    });
  });
});

/* １つの要素をフワッと右から左に出現 */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInLefts = document.querySelectorAll(".js-fadeInLeft"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInLefts.forEach(function (item) {
    gsap.fromTo(item, {
      x: 30,
      autoAlpha: 0
    }, {
      x: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: 'top 70%'
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});