jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる


});


/* -------------------------------------------------------------------------------- */
/* 現在選択されているページ(currentページ)の、header内のグローバルメニュー項目の文字色を変更 (『.is-current』クラスを付与) */
document.addEventListener("DOMContentLoaded", function () {
  const currentUrl = window.location.href;
  const menuLinks = document.querySelectorAll(".header__nav-item a");

  menuLinks.forEach(link => {
      if (link.href === currentUrl) {
          link.classList.add("is-current");
      }
  });
});

/* -------------------------------------------------------------------------------- */
/* headerの下にborder-bottomを追加 (少しでもスクロールした場合に) */
document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.header');

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
const pageTop = document.querySelector(".js-top-btn");

window.addEventListener("scroll", function () {
  if (80 < window.scrollY) {  // 80px
    pageTop.classList.add("is-show");
  } else {
    pageTop.classList.remove("is-show");
  }
});

/* -------------------------------------------------------------------------------- */
/* スムーススクロール */
// 「#」だけのリンク (TOPに戻るボタン)の時は、headerの高さを考慮せず、ページ先頭へ遷移するように。
// 別ページに遷移して、かつそのページの指定のリンク先に遷移する場合は、headerの高さを考慮して遷移
// 他ページ(全く別のサイト)に遷移する際は、処理をスキップ
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".header"); // ヘッダー要素
  const headerHeight = header ? header.offsetHeight : 0; // ヘッダー高さを取得

  const adjustScrollForHash = () => {
    const hash = window.location.hash; // 現在のURLのハッシュ部分を取得
    if (hash) {
      const targetElement = document.querySelector(hash); // ハッシュから要素を取得
      if (targetElement) {
        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;

        // スムーススクロールで位置を調整
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      }
    }
  };

  // 初期ロード時にURLハッシュを確認してスクロール位置を調整
  adjustScrollForHash();

  // ページ内リンクのクリックイベントを設定
  const anchorLinks = document.querySelectorAll('a[href^="#"], a[href*="#"]');
  anchorLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      const href = link.getAttribute("href");

      // 他のページに遷移する場合の対策
      if (href.includes("#") && href.startsWith(location.origin)) {
        return; // 他のページへのリンクはここでは処理しない
      }

      // 現在のページ内のリンクを処理
      if (href.startsWith("#")) {
        e.preventDefault(); // デフォルト動作を無効化

        const targetId = href.slice(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
          const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;

          // スムーススクロール
          window.scrollTo({
            top: targetPosition,
            behavior: "smooth",
          });
        } else if (href === "#") {
          // TOPに戻るリンク
          e.preventDefault(); // デフォルト動作を無効化
          window.scrollTo({
            top: 0,
            behavior: "smooth",
          });
        }
      }
    });
  });

  // ページ遷移後にハッシュ位置を調整
  window.addEventListener("load", () => {
    adjustScrollForHash();
  });
});

/* -------------------------------------------------------------------------------- */
/* ハンバーガーメニュー(ドロワーメニュー) */
// クリックされた時に『is-clicked』クラスを付け外ししてボタンを変形・ドロワーメニューを表示/非表示
// 「html,body」に『is-fixed』クラスを付け外ししてドロワーが開いてる時はスクロールを無効に
// ドロワーメニュー外にオーバーレイを表示して背景を暗くする。(別途HTMLを追加済み)
document.querySelector('.js-header__btn').addEventListener('click', function (e) {
  e.preventDefault();

  // 要素を取得
  const headerBtn = document.querySelector('.js-header__btn'); // ハンバーガーメニューのボタン
  const drawerMenu = document.querySelector('.js-drawer-menu'); // ドロワーメニュー
  const drawerOverlay = document.querySelector('.js-drawer-overlay'); // 背景オーバーレイ

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
/* オーバーレイのSP時の動作を制御 (TOPページの事業案内) */
// オーバーレイを、SP時はhoverで表示ではなく、クリックした場合に表示させ、もう一度クリックすると元に戻る仕様に。
document.addEventListener("DOMContentLoaded", () => {
  const contentElements = document.querySelectorAll(".content__button");

  contentElements.forEach((content) => {
    const overlay = content.querySelector(".content__overlay");

    // 初期状態
    let isOverlayActive = false;

    // contentのクリック時
    content.addEventListener("click", () => {
      if (!isOverlayActive) {
        content.classList.add("is-active"); // オーバーレイを表示するクラスを付与
        isOverlayActive = true;
      }
    });

    // オーバーレイのクリック時
    overlay.addEventListener("click", (event) => {
      event.stopPropagation(); // 親要素のクリックイベントを無効化
      content.classList.remove("is-active"); // オーバーレイを隠す
      isOverlayActive = false;
    });
  });
});

/* -------------------------------------------------------------------------------- */
/* オーバーレイのSP時の動作を制御 (TOPページの実績 & 実績一覧ページ) */
// オーバーレイを、SP時はhoverで表示ではなく、クリックした場合に表示させ、もう一度クリックすると元に戻る仕様に。
document.addEventListener("DOMContentLoaded", () => {
  const content2Elements = document.querySelectorAll(".content2");

  content2Elements.forEach((content2) => {
    const overlay = content2.querySelector(".content2__overlay");

    // 初期状態
    let isOverlayActive = false;

    // content2のクリック時
    content2.addEventListener("click", () => {
      if (!isOverlayActive) {
        content2.classList.add("is-active"); // オーバーレイを表示するクラスを付与
        isOverlayActive = true;
      }
    });

    // オーバーレイのクリック時
    overlay.addEventListener("click", (event) => {
      event.stopPropagation(); // 親要素のクリックイベントを無効化
      content2.classList.remove("is-active"); // オーバーレイを隠す
      isOverlayActive = false;
    });
  });
});

/* -------------------------------------------------------------------------------- */
/* タブ切り替え (事業案内ページ) */
// クリックされたタブ(選択されているタブ)に『.is-selected』クラスを付与して選択中のタブのスタイルのみ変更。
// クリックされたタブ(選択されているタブ)の『data-category』属性の値と同じ『data-category』属性の値を持つコンテンツのみ表示。
// サブメニューなどのリンクからタブに飛んだ時に、そのタブが選択状態にされた形で『事業紹介ページ(タブ切り替えページ)』に遷移する。
document.addEventListener('DOMContentLoaded', function() {
  const tabButtons = document.querySelectorAll('.tab');
  const tabContents = document.querySelectorAll('.js-tab-content');

  // URLからクエリパラメータ（category）を取得
  const params = new URLSearchParams(window.location.search);
  const categoryFromUrl = params.get('category');

  let activeCategory = categoryFromUrl; // URLのcategoryを優先
  let initialTab;

  if (!activeCategory) {
    // URLにcategoryパラメータがない場合は最初のタブをデフォルトで表示
    initialTab = tabButtons[0];
    activeCategory = initialTab.getAttribute('data-category');
  } else {
    // URLにcategoryパラメータがある場合、そのcategoryに対応するタブを探す
    initialTab = Array.from(tabButtons).find(tab => tab.getAttribute('data-category') === activeCategory);
    if (!initialTab) {
      // 不正なcategoryの場合はデフォルトで最初のタブを表示
      initialTab = tabButtons[0];
      activeCategory = initialTab.getAttribute('data-category');
    }
  }

  // --- 初期タブの選択をURLパラメータに基づいて行う ---
  tabButtons.forEach(tab => {
    // URLパラメータと一致するタブにのみ 'is-selected' クラスを付与
    if (tab.getAttribute('data-category') === activeCategory) {
      tab.classList.add('is-selected');
    } else {
      tab.classList.remove('is-selected');  // 他のタブは選択を解除
    }
  });

  // 対応するコンテンツの表示設定
  tabContents.forEach(content => {
    if (content.getAttribute('data-category') === activeCategory) {
      content.classList.add('active');  // 対応するコンテンツを表示
    } else {
      content.classList.remove('active');  // 他のコンテンツは非表示
    }
  });

  // タブクリック時の処理
  tabButtons.forEach(button => {
    button.addEventListener('click', function() {
      const category = this.getAttribute('data-category');

      // すべてのタブから選択クラスを削除
      tabButtons.forEach(btn => btn.classList.remove('is-selected'));

      // クリックされたタブに選択クラスを追加
      this.classList.add('is-selected');

      // すべてのコンテンツを非表示にする
      tabContents.forEach(content => content.classList.remove('active'));

      // 対応するカテゴリーのコンテンツを表示
      document.querySelectorAll(`.js-tab-content[data-category="${category}"]`).forEach(content => {
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
document.addEventListener('DOMContentLoaded', function() {
  const fadeInUps = document.querySelectorAll(".js-fadeInUp");  // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUps.forEach(item => {
    let isTopElement = item.classList.contains("is-top-element");  // クラスも同時に持っているか判定

    gsap.fromTo(item, {y:20, autoAlpha:0}, {y:0, autoAlpha:1, scrollTrigger:{
        trigger: item,
        start: isTopElement ? 'top 50%' : 'top 70%',  // 『is-top-element』クラスも同時に付与されている要素のみ、発火位置を下め(50%)に調整。→ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });

});

/* １つの要素をフワッと上から下に出現 */
document.addEventListener('DOMContentLoaded', function() {
  const fadeInUps = document.querySelectorAll(".js-fadeInDown");  // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUps.forEach(item => {
    gsap.fromTo(item, {y:-30, autoAlpha:0}, {y:0, autoAlpha:1, scrollTrigger:{
        trigger: item,
        start: 'top 70%',
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });

});

/* １つの要素をフワッと左から右に出現 */
document.addEventListener('DOMContentLoaded', function() {
  const fadeInRights = document.querySelectorAll(".js-fadeInRight");  // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInRights.forEach(item => {
    gsap.fromTo(item, {x:-30, autoAlpha:0}, {x:0, autoAlpha:1, scrollTrigger:{
        trigger: item,
        start: 'top 70%',
        // markers:{
        //   startColor: "green",
        // },
        end: 'top 20%',   // アニメーション終了タイミングを設定
        toggleActions: 'play none none none', // アニメーションの挙動制御
      }
    });
  });

});


/* １つの要素をフワッと右から左に出現 */
document.addEventListener('DOMContentLoaded', function() {
  const fadeInLefts = document.querySelectorAll(".js-fadeInLeft");  // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInLefts.forEach(item => {
    gsap.fromTo(item, {x:30, autoAlpha:0}, {x:0, autoAlpha:1, scrollTrigger:{
        trigger: item,
        start: 'top 70%',
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });

});




document.addEventListener('DOMContentLoaded', function() {
  const fadeInUps = document.querySelectorAll(".js-fadeInUpFirst");  // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUps.forEach(item => {
    gsap.fromTo(item, {y:20, autoAlpha:0}, {y:0, autoAlpha:1, scrollTrigger:{
        trigger: item,
        start:'top 90%',  // 『is-top-element』クラスも同時に付与されている要素のみ、発火位置を下め(50%)に調整。→ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });

});


