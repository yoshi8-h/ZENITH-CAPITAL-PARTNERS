jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる



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


