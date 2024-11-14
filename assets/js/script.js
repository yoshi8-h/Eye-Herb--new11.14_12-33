"use strict";

jQuery(function ($) {// この中であればWordpressでも「$」が使用可能になる
});

/* -------------------------------------------------------------------------------- */
/* 『header』と『header2 (追従ヘッダー)』のスクロール時の挙動を制御 */
// ページ先頭では『header』を表示し、少しでもスクロールしたら『header2』に切り替わる
document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector(".header");
  var header2 = document.querySelector(".header2");
  window.addEventListener("scroll", function () {
    if (window.innerWidth >= 768) {
      // スクロール位置が0の場合、headerを表示してheader2を非表示にする
      if (window.scrollY === 0) {
        header.classList.remove("header--hidden");
        header2.classList.remove("header2--visible");
      } else {
        // スクロール位置が0以外の場合、headerを非表示にしてheader2を表示する
        header.classList.add("header--hidden");
        header2.classList.add("header2--visible");
      }
    } else {
      // SPサイズ（768px未満）では常にheaderを表示し、header2は非表示
      header.classList.remove("header--hidden");
      header2.classList.remove("header2--visible");
    }
  });
});

/* -------------------------------------------------------------------------------- */
/* ハンバーガーメニュー(ドロワー) */
// クリックされた時に『is-clicked』クラスを付け外ししてボタンを変形・ドロワーメニューを表示/非表示
// .headerにも『is-clicked』クラスを付け外しして背景色を透明に
// 「html,body」に『is-fixed』クラスを付け外ししてドロワーが開いてる時はスクロールを無効に
document.querySelector(".js-header__btn").addEventListener("click", function (e) {
  e.preventDefault();
  document.querySelector(".js-header__btn").classList.toggle("is-clicked");
  document.querySelector(".header").classList.toggle("is-clicked");
  document.querySelector(".js-drawer-menu").classList.toggle("is-clicked");
  document.documentElement.classList.toggle("is-fixed"); // htmlタグにis-fixedクラスをトグル
  document.body.classList.toggle("is-fixed"); // bodyタグにもis-fixedクラスをトグル
});