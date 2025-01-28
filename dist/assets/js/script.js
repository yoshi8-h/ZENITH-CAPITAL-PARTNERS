"use strict";

jQuery(function ($) {// この中であればWordpressでも「$」が使用可能になる
});

/* -------------------------------------------------------------------------------- */
/* 現在選択されているページ(currentページ)の、header内のグローバルメニュー項目の文字色を変更 (『.is-current』クラスを付与) */
// サブメニューのリンク(少しURLが違う)を選択した場合でも、そのサブメニューに対応するheader内のグローバルメニュー項目の文字色を変更 (『.is-current』クラスを付与)
document.addEventListener("DOMContentLoaded", function () {
  var currentUrl = window.location.href; // 現在のURLを取得
  var navItems = document.querySelectorAll(".header__nav-item"); // 各メニュー項目を取得

  navItems.forEach(function (item) {
    // 子リンクをすべて取得
    var subLinks = item.querySelectorAll("a");
    subLinks.forEach(function (link) {
      // 現在のURLと一致するリンクがある場合
      if (currentUrl.startsWith(link.href)) {
        // 親メニュー項目（.header__nav-item）の最初のリンクに .is-current を付与
        var parentLink = item.querySelector(".header__link");
        if (parentLink) {
          parentLink.classList.add("is-current");
        }
      }
    });
  });
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
/* スムーススクロール */
// 「#」だけのリンク (TOPに戻るボタン)の時は、headerの高さを考慮せず、ページ先頭へ遷移するように。
// 別ページに遷移して、かつそのページの指定のリンク先に遷移する場合は、headerの高さを考慮して遷移
// 他ページ(全く別のサイト)に遷移する際は、処理をスキップ
document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector(".header"); // ヘッダー要素
  var headerHeight = header ? header.offsetHeight : 0; // ヘッダー高さを取得

  var adjustScrollForHash = function adjustScrollForHash() {
    var hash = window.location.hash; // 現在のURLのハッシュ部分を取得
    if (hash) {
      var targetElement = document.querySelector(hash); // ハッシュから要素を取得
      if (targetElement) {
        var targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;

        // スムーススクロールで位置を調整
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth"
        });
      }
    }
  };

  // 初期ロード時にURLハッシュを確認してスクロール位置を調整
  adjustScrollForHash();

  // ページ内リンクのクリックイベントを設定
  var anchorLinks = document.querySelectorAll('a[href^="#"], a[href*="#"]');
  anchorLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      var href = link.getAttribute("href");

      // 現在のページ内のリンクを処理
      if (href.startsWith("#") || href.includes("/company/")) {
        e.preventDefault(); // デフォルト動作を無効化
        var targetId = null;
        if (href.startsWith("#")) {
          targetId = href.slice(1);
        } else {
          targetId = href.split("#")[1];
        }
        var targetElement = document.getElementById(targetId);
        if (targetElement) {
          var targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;

          // スムーススクロール
          window.scrollTo({
            top: targetPosition,
            behavior: "smooth"
          });
        } else if (href === "#") {
          // TOPに戻るリンク
          e.preventDefault(); // デフォルト動作を無効化
          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        } else {
          window.location.href = e.currentTarget.href; // デフォルト動作を再現『currentTarget』にする必要あり。
        }
      }
    });
  });

  // ページ遷移後にハッシュ位置を調整
  window.addEventListener("load", function () {
    adjustScrollForHash();
  });
});

/* -------------------------------------------------------------------------------- */
/* ハンバーガーメニュー(ドロワーメニュー) */
// クリックされた時に『is-clicked』クラスを付け外ししてボタンを変形・ドロワーメニューを表示/非表示
// 「html,body」に『is-fixed』クラスを付け外ししてドロワーが開いてる時はスクロールを無効に
// ドロワーメニュー外にオーバーレイを表示して背景を暗くする。(別途HTMLを追加済み)
// ドロワーメニュー内のリンクが押された時は、必ずドロワーメニューを閉じるように。

// document.querySelector('.js-header__btn').addEventListener('click', function (e) {
//   e.preventDefault();

//   // 要素を取得
//   const headerBtn = document.querySelector('.js-header__btn'); // ハンバーガーメニューのボタン
//   const drawerMenu = document.querySelector('.js-drawer-menu'); // ドロワーメニュー
//   const drawerOverlay = document.querySelector('.js-drawer-overlay'); // 背景オーバーレイ

//   // 各クラスのトグル処理
//   headerBtn.classList.toggle('is-clicked'); // ボタンの状態をトグル
//   drawerMenu.classList.toggle('is-clicked'); // ドロワーメニューの開閉をトグル
//   drawerOverlay.classList.toggle('is-active'); // 背景オーバーレイの表示/非表示をトグル
//   document.documentElement.classList.toggle('is-fixed'); // htmlタグのスクロール固定
//   document.body.classList.toggle('is-fixed'); // bodyタグのスクロール固定
// });

document.addEventListener("DOMContentLoaded", function () {
  var headerBtn = document.querySelector('.js-header__btn'); // ハンバーガーメニューボタン
  var drawerMenu = document.querySelector('.js-drawer-menu'); // ドロワーメニュー
  var drawerOverlay = document.querySelector('.js-drawer-overlay'); // 背景オーバーレイ
  var drawerLinks = document.querySelectorAll('.nav__link, .toggle__nav-link'); // ドロワーメニュー内のリンク

  // ドロワーメニューの開閉トグル処理
  headerBtn.addEventListener('click', function (e) {
    e.preventDefault();

    // 各クラスのトグル処理
    headerBtn.classList.toggle('is-clicked');
    drawerMenu.classList.toggle('is-clicked');
    drawerOverlay.classList.toggle('is-active');
    document.documentElement.classList.toggle('is-fixed');
    document.body.classList.toggle('is-fixed');
  });

  // ドロワーメニュー内のリンクをクリックした際の処理
  drawerLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      // メニューを閉じる処理
      headerBtn.classList.remove('is-clicked');
      drawerMenu.classList.remove('is-clicked');
      drawerOverlay.classList.remove('is-active');
      document.documentElement.classList.remove('is-fixed');
      document.body.classList.remove('is-fixed');
    });
  });
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
document.addEventListener("DOMContentLoaded", function () {
  var contentElements = document.querySelectorAll(".content__button");
  contentElements.forEach(function (content) {
    var overlay = content.querySelector(".content__overlay");

    // 初期状態
    var isOverlayActive = false;

    // contentのクリック時
    content.addEventListener("click", function () {
      if (!isOverlayActive) {
        content.classList.add("is-active"); // オーバーレイを表示するクラスを付与
        isOverlayActive = true;
      }
    });

    // オーバーレイのクリック時
    overlay.addEventListener("click", function (event) {
      event.stopPropagation(); // 親要素のクリックイベントを無効化
      content.classList.remove("is-active"); // オーバーレイを隠す
      isOverlayActive = false;
    });
  });
});

/* -------------------------------------------------------------------------------- */
/* オーバーレイのSP時の動作を制御 (TOPページの実績 & 実績一覧ページ) */
// オーバーレイを、SP時はhoverで表示ではなく、クリックした場合に表示させ、もう一度クリックすると元に戻る仕様に。
document.addEventListener("DOMContentLoaded", function () {
  var content2Elements = document.querySelectorAll(".content2");
  content2Elements.forEach(function (content2) {
    var overlay = content2.querySelector(".content2__overlay");

    // 初期状態
    var isOverlayActive = false;

    // content2のクリック時
    content2.addEventListener("click", function () {
      if (!isOverlayActive) {
        content2.classList.add("is-active"); // オーバーレイを表示するクラスを付与
        isOverlayActive = true;
      }
    });

    // オーバーレイのクリック時
    overlay.addEventListener("click", function (event) {
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
// タブを切り替えた際に、そのタブに対応するコンテンツが表示され、かつ、きちんとGSAPアニメーションも発火するように実装。(タブを<a>タグにするとアニメーションが発火するようにはできるが、タブを切り替えた際にページ遷移となり、コンテンツが表示される前に、一瞬コンテンツがdisplay:block;になるまでにタイムラグがあり、footerがチラッと最上部にくっついて表示されてしまうのを防ぐ記述！)
document.addEventListener('DOMContentLoaded', function () {
  var tabButtons = document.querySelectorAll('.tab'); // タブボタン
  var tabContents = document.querySelectorAll('.js-tab-content'); // タブコンテンツ

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
  function setInitialTab() {
    tabButtons.forEach(function (tab) {
      // URLパラメータと一致するタブにのみ 'is-selected' クラスを付与
      if (tab.getAttribute('data-category') === activeCategory) {
        tab.classList.add('is-selected');
      } else {
        tab.classList.remove('is-selected'); // 他のタブは選択を解除
      }
    });

    tabContents.forEach(function (content) {
      if (content.getAttribute('data-category') === activeCategory) {
        content.classList.add('active'); // 対応するコンテンツを表示
        triggerAnimation(content); // 初期状態でアニメーションを発火
      } else {
        content.classList.remove('active'); // 他のコンテンツは非表示
      }
    });
  }

  setInitialTab(); // 初期状態を設定

  // --- タブクリック時の処理 ---
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
        content.classList.remove('active');
      });

      // 対応するカテゴリーのコンテンツを表示し、アニメーションを発火
      var targetContents = document.querySelectorAll(".js-tab-content[data-category=\"".concat(category, "\"]"));
      targetContents.forEach(function (content) {
        content.classList.add('active'); // 表示
        triggerAnimation(content); // アニメーションを発火
      });
    });
  });

  // --- アニメーションをトリガーする関数 ---
  function triggerAnimation(targetContent) {
    // 対象のコンテンツ内の '.js-fadeInUp-trigger' 要素を取得
    var fadeInTriggers = targetContent.querySelectorAll('.js-fadeInUp-trigger');

    // 'GSAP' を再適用してアニメーションを発火
    fadeInTriggers.forEach(function (item) {
      var isTopElement = item.classList.contains('is-top-element'); // is-top-element判定

      gsap.fromTo(item, {
        y: 35,
        autoAlpha: 0
      },
      // 初期値
      {
        y: 0,
        autoAlpha: 1,
        scrollTrigger: {
          trigger: item,
          start: isTopElement ? 'top 50%' : 'top 65%' // 発火位置を調整
        }
      });
    });
  }
});

/* -------------------------------------------------------------------------------- */
/* お問い合わせページの、プラグイン無しで『確認画面』→『完了画面』に遷移させる方法 */

// 送信時に、thanksページに飛ばす(リダイレクトする)コード (文字制限とメールアドレス確認のバリデーション無し)
// document.addEventListener('DOMContentLoaded', () => {
//   // 確認画面用の要素
//   const confirmButton = document.querySelector(".form__confirmbtn");
//   const backButton = document.querySelector(".form__returnbtn");
//   const formInputs = document.querySelectorAll('.js-form-input');
//   const formArea = document.querySelector(".contact-page__form-area");
//   const confirmArea = document.querySelector(".contact-page__confirm-area");

//   // 必須項目が変更された場合の処理
//   const updateConfirmButtonState = () => {
//     let allValid = true;
//     formInputs.forEach(input => {
//       if (input.hasAttribute('aria-required') && input.value.trim() === "") {
//         allValid = false;
//       }
//     });
//     confirmButton.disabled = !allValid;
//   };

//   formInputs.forEach(input => {
//     input.addEventListener('input', updateConfirmButtonState);
//   });

//   // 確認画面に遷移
//   confirmButton.addEventListener('click', () => {
//     formInputs.forEach(input => {
//       const targetClass = `.confirm_${input.id}`;
//       const confirmField = document.querySelector(targetClass);
//       if (confirmField) {
//         confirmField.textContent = input.value.trim();
//       }
//     });

//     formArea.style.display = 'none';
//     confirmArea.style.display = 'block';
//     window.scrollTo(0, 0);
//   });

//   // 入力画面に戻る
//   backButton.addEventListener('click', () => {
//     formArea.style.display = 'block';
//     confirmArea.style.display = 'none';
//     window.scrollTo(0, 0);
//   });

//   // 送信ボタンをクリックした場合のリダイレクト処理
//   document.addEventListener('wpcf7mailsent', (event) => {
//     location.href = `${window.location.origin}/thanks/`;
//   }, false);
// });

// ※今回の実装では違うが、管理画面内のForm自体に記入するHTMLの確認ボタンに『disabled』属性を付与して、入力必須項目が入力されていない場合は、確認ボタンをそもそも押せないようにする実装。
// (今回は使わない)
// document.addEventListener('DOMContentLoaded', () => {
//   // 要素の取得
//   const confirmButton = document.querySelector(".form__confirmbtn"); // 確認ボタン
//   const backButton = document.querySelector(".form__returnbtn"); // 戻るボタン
//   const formInputs = document.querySelectorAll('.js-form-input'); // 入力フィールド
//   const formArea = document.querySelector(".contact-page__form-area"); // 入力画面
//   const confirmArea = document.querySelector(".contact-page__confirm-area"); // 確認画面
//   const emailInput = document.getElementById('your-email'); // メールアドレス
//   const emailConfirmInput = document.getElementById('your-email-confirm'); // 確認用メールアドレス
//   const textareaInput = document.querySelector('.field__textarea'); // テキストエリア
//   const sendButton = document.querySelector('.form__sendbtn'); // 送信ボタン

//   // 必須項目のエラーメッセージを表示する関数
//   const showError = (input, message) => {
//     const errorTip = input.nextElementSibling; // エラーメッセージの要素
//     if (errorTip && errorTip.classList.contains('wpcf7-not-valid-tip')) {
//       errorTip.textContent = message; // エラーメッセージを設定
//     }
//   };

//   // 必須項目のエラーメッセージをクリアする関数
//   const clearError = (input) => {
//     const errorTip = input.nextElementSibling; // エラーメッセージの要素
//     if (errorTip && errorTip.classList.contains('wpcf7-not-valid-tip')) {
//       errorTip.textContent = ""; // エラーメッセージをクリア
//     }
//   };

//   // 必須項目が有効か確認する関数
//   const validateInputs = () => {
//     let allValid = true;

//     // 全ての入力フィールドをチェック
//     formInputs.forEach(input => {
//       // 初期化（エラーメッセージを消す）
//       clearError(input);

//       // 必須項目が空の場合エラー
//       if (input.hasAttribute('aria-required') && input.value.trim() === "") {
//         allValid = false;
//         showError(input, "未入力です。");
//       }
//     });

//     // メールアドレスの一致チェック
//     if (emailInput.value.trim() !== emailConfirmInput.value.trim()) {
//       allValid = false;
//       showError(emailConfirmInput, "メールアドレスが一致しません。");
//     }

//     // テキストエリアの文字数チェック（2000文字以内）
//     if (textareaInput && textareaInput.value.length > 2000) {
//       allValid = false;
//       showError(textareaInput, "文字数が2000文字を超えています。");
//     }

//     return allValid; // 全て有効ならtrueを返す
//   };

//   // 確認ボタンのクリックイベント
//   confirmButton.addEventListener('click', () => {
//     // バリデーション実行
//     const isValid = validateInputs();

//     if (isValid) {
//       // 入力値を確認画面に表示
//       formInputs.forEach(input => {
//         const targetClass = `.confirm_${input.id}`;
//         const confirmField = document.querySelector(targetClass);
//         if (confirmField) {
//           confirmField.textContent = input.value.trim();
//         }
//       });

//       // 画面を切り替え
//       formArea.style.display = 'none';
//       confirmArea.style.display = 'block';
//       window.scrollTo(0, 0);
//     } else {
//       // エラーメッセージを表示し、確認画面への遷移を防止
//       alert("入力内容に不備があります。修正してください。");
//     }
//   });

//   // 入力フィールドの変更イベントにリスナーを追加
//   formInputs.forEach(input => {
//     input.addEventListener('input', () => {
//       // リアルタイムでバリデーションを実行し、確認ボタンの状態を更新
//       validateInputs();
//       confirmButton.disabled = !validateInputs();
//     });
//   });

//   // 入力画面に戻る処理
//   backButton.addEventListener('click', () => {
//     formArea.style.display = 'block';
//     confirmArea.style.display = 'none';
//     window.scrollTo(0, 0);
//   });

//   // 送信ボタンの動作修正
//   sendButton.addEventListener('click', () => {
//     // Contact Form 7の送信イベントが正しく動作することを確認
//     if (typeof wpcf7 !== 'undefined' && typeof wpcf7.initForm !== 'undefined') {
//       wpcf7.initForm(document.querySelector('.wpcf7-form'));
//     }
//   });

//   // 送信後のリダイレクト処理
//   document.addEventListener('wpcf7mailsent', (event) => {
//     location.href = `${window.location.origin}/thanks/`;
//   }, false);

//   // 初期化処理（確認ボタンの状態をチェック）
//   validateInputs();
// });

/* お問い合わせページの、プラグイン無しで『確認画面』→『完了画面』に遷移させる方法 */
// 送信時に、thanksページに飛ばす(リダイレクトする)コード (テキストエリアの文字数制限とメールアドレス一致確認のバリデーション有り)
// テキストエリアは、2000文字までしか入力出来ないようにバリデーション。
// メールアドレスと確認用メールアドレスが一致しないとき、エラーメッセージを表示。
// 『確認ボタン』を押した際に、入力されていない必須項目があれば、その必須項目の下にエラーメッセージを表示。
document.addEventListener('DOMContentLoaded', function () {
  // 要素の取得
  var confirmButton = document.querySelector(".form__confirmbtn"); // 確認ボタン
  var backButton = document.querySelector(".form__returnbtn"); // 戻るボタン
  var formInputs = document.querySelectorAll('.js-form-input'); // 入力フィールド
  var formArea = document.querySelector(".contact-page__form-area"); // 入力画面
  var confirmArea = document.querySelector(".contact-page__confirm-area"); // 確認画面
  var emailInput = document.getElementById('your-email'); // メールアドレス
  var emailConfirmInput = document.getElementById('your-email-confirm'); // 確認用メールアドレス
  var textareaInput = document.getElementById('your-message'); // テキストエリア

  /**
   * 必須項目のエラーメッセージを表示する関数
   */
  var showError = function showError(input, message) {
    var errorTip = input.parentNode.querySelector('.wpcf7-not-valid-tip');
    if (!errorTip) {
      // エラーメッセージがまだ生成されていない場合は作成
      errorTip = document.createElement('span');
      errorTip.className = 'wpcf7-not-valid-tip';
      input.parentNode.appendChild(errorTip);
    }
    errorTip.style.display = 'block';
    errorTip.textContent = message;
  };

  /**
   * 必須項目のエラーメッセージをクリアする関数
   */
  var clearError = function clearError(input) {
    var errorTip = input.parentNode.querySelector('.wpcf7-not-valid-tip');
    if (errorTip) {
      errorTip.style.display = 'none';
      errorTip.textContent = '';
    }
  };

  /**
   * 必須項目が有効か確認する関数
   */
  var validateInputs = function validateInputs() {
    var allValid = true;

    // 全ての入力フィールドをチェック
    formInputs.forEach(function (input) {
      // 初期化（エラーメッセージを消す）
      clearError(input);

      // 必須項目が空の場合はエラーメッセージを表示
      if (input.hasAttribute('aria-required') && input.value.trim() === "") {
        allValid = false;
        showError(input, "入力してください。");
      }
    });

    // メールアドレスの一致チェック
    if (emailInput.value.trim() !== emailConfirmInput.value.trim()) {
      allValid = false;
      showError(emailConfirmInput, "メールアドレスが一致しません。");
    }

    // テキストエリアの文字数チェック（2000文字以内）
    if (textareaInput && textareaInput.value.length > 2000) {
      allValid = false;
      showError(textareaInput, "文字数が2000文字を超えています。");
    }
    return allValid; // 全て有効ならtrueを返す
  };

  /**
   * 確認ボタンのクリックイベント
   */
  confirmButton.addEventListener('click', function () {
    // バリデーション実行
    var isValid = validateInputs();
    if (isValid) {
      // 入力値を確認画面に表示
      formInputs.forEach(function (input) {
        var targetClass = ".confirm_".concat(input.id);
        var confirmField = document.querySelector(targetClass);
        if (confirmField) {
          confirmField.textContent = input.value.trim();
        }
      });

      // 画面を切り替え
      formArea.style.display = 'none';
      confirmArea.style.display = 'block';
      window.scrollTo(0, 0);
    }
  });

  /**
   * 入力画面に戻る処理
   */
  backButton.addEventListener('click', function () {
    formArea.style.display = 'block';
    confirmArea.style.display = 'none';
    window.scrollTo(0, 0);
  });

  /**
   * 送信後のリダイレクト処理
   */
  document.addEventListener('wpcf7mailsent', function (event) {
    // thanks ページに遷移
    location.href = "".concat(window.location.origin, "/thanks/");
  }, false);
});

/* -------------------------------------------------------------------------------- */

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
      y: 35,
      autoAlpha: 0
    }, {
      y: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: isTopElement ? 'top 50%' : 'top 65%' // 『is-top-element』クラスも同時に付与されている要素のみ、発火位置を下め(50%)に調整。→ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});

/* １つの要素をフワッと下から出現 (ページ下部の要素にのみ適用) */
// ページ最下部辺りにある要素の場合、画面の高さが高い画面で見てしまうと、スクロールトリガーの発火位置に要素が届かなくて、表示されない時がある。それを防ぐためだけに、発火位置を上げるためだけのアニメーション。
document.addEventListener('DOMContentLoaded', function () {
  var fadeInUpsBottom = document.querySelectorAll(".js-fadeInUp-bottom"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUpsBottom.forEach(function (item) {
    gsap.fromTo(item, {
      y: 35,
      autoAlpha: 0
    }, {
      y: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: 'top 80%' // 『is-top-element』クラスも同時に付与されている要素のみ、発火位置を下め(50%)に調整。→ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
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
      x: -40,
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
      x: 40,
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

/* -------------------------------------------------------------------------------- */
// 元から位置制御に『transform』を使っている要素のためだけの指定 (アセットマネジメントの、真ん中のグレーの棒)
document.addEventListener('DOMContentLoaded', function () {
  var fadeInUps = document.querySelectorAll(".js-fadeInUp-translate"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUps.forEach(function (item) {
    var isTopElement = item.classList.contains("is-top-element"); // クラスも同時に持っているか判定

    gsap.fromTo(item, {
      y: 35,
      autoAlpha: 0
    }, {
      y: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: isTopElement ? 'top 50%' : 'top 65%' // 『is-top-element』クラスも同時に付与されている要素のみ、発火位置を下め(50%)に調整。→ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});

/* -------------------------------------------------------------------------------- */
/* １つの要素をフワッと下から出現 */
// 早めに表示されるように設定。(画面下側の要素が、下までスクロールしないと表示されなくなってしまうため。)
// ニュース一覧の投稿記事の部分。
document.addEventListener('DOMContentLoaded', function () {
  var fadeInUps = document.querySelectorAll(".js-fadeInUpFirst"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInUps.forEach(function (item) {
    gsap.fromTo(item, {
      y: 30,
      autoAlpha: 0
    }, {
      y: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: 'top 90%' // 『is-top-element』クラスも同時に付与されている要素のみ、発火位置を下め(50%)に調整。→ページの先頭付近にある要素は、scrollTriggerでスクロールしてアニメーションが発火する位置を、元から超えているため、画面リロード時に、すでにアニメーションが発火された状態になってしまっているため、それを防ぐ方法。
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});

/* -------------------------------------------------------------------------------- */
// 上記の、左右上下からのフワッと表示を、このサイト用に、タイミングを整えたりしたアニメーション
// (スクロールトリガーの発火位置だけ少しずつ変えている)
/* １つの要素をフワッと左から右に出現 (早めに表示) */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInRights = document.querySelectorAll(".js-fadeInRight-fast"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInRights.forEach(function (item) {
    gsap.fromTo(item, {
      x: -40,
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

/* １つの要素をフワッと左から右に出現 (遅れて表示) */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInRights = document.querySelectorAll(".js-fadeInRight-delay"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInRights.forEach(function (item) {
    gsap.fromTo(item, {
      x: -40,
      autoAlpha: 0
    }, {
      x: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: 'top 55%',
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

/* １つの要素をフワッと右から左に出現 (早めに表示) */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInLefts = document.querySelectorAll(".js-fadeInLeft-fast"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInLefts.forEach(function (item) {
    gsap.fromTo(item, {
      x: 40,
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

/* １つの要素をフワッと右から左に出現 (遅れて表示) */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInLefts = document.querySelectorAll(".js-fadeInLeft-delay"); // ページ内の、このアニメーションをさせたい全ての要素を取得

  fadeInLefts.forEach(function (item) {
    gsap.fromTo(item, {
      x: 40,
      autoAlpha: 0
    }, {
      x: 0,
      autoAlpha: 1,
      scrollTrigger: {
        trigger: item,
        start: 'top 55%'
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});

/* -------------------------------------------------------------------------------- */
/* 複数枚のカードを時差でフワッと下から出現 (左から順番に時差で) */
document.addEventListener('DOMContentLoaded', function () {
  // ページ内の全てのカードコンテナ(複数枚カードのコンテナ。PC時にトリガーとなる要素)を取得
  var cardContainers = document.querySelectorAll(".js-cards-fadeInUp-trigger");
  cardContainers.forEach(function (container) {
    var cards = container.querySelectorAll(".js-card-fadeInUp"); // そのコンテナ内のカードを全て取得
    gsap.fromTo(cards, {
      y: 35,
      autoAlpha: 0
    }, {
      y: 0,
      autoAlpha: 1,
      stagger: .14,
      scrollTrigger: {
        trigger: container,
        start: 'top 70%'
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});