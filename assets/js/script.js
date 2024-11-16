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

/* ================================================================================ */
/*  アニメーション  */
// ※jQueryなどの制御の記述は、GSAPの記述より前に書く必要あり。
/* ================================================================================ */

/* 文字などがジワッと左から表示されるアニメーション (サイト全体共通) */
document.addEventListener('DOMContentLoaded', function () {
  var fadeInMaskLeft = document.querySelectorAll(".js-fadeIn-mask-left");
  fadeInMaskLeft.forEach(function (item) {
    gsap.fromTo(item, {
      maskPosition: "center top",
      webkitMaskPosition: "center top"
    }, {
      maskPosition: "center 100%",
      webkitMaskPosition: "center 100%",
      duration: 1.4,
      ease: "linear",
      scrollTrigger: {
        trigger: item,
        start: 'top 70%',
        once: true // 繰り返さず1回のみ実行
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});

/* 画像が、『拡大』→『縮小』される (サイト全体共通) */
document.addEventListener('DOMContentLoaded', function () {
  var scaleDownImages = document.querySelectorAll(".js-scale-down-img");
  scaleDownImages.forEach(function (img) {
    gsap.fromTo(img, {
      scale: 1.2
    }, {
      scale: 1.0,
      duration: .7,
      ease: "out",
      scrollTrigger: {
        trigger: img,
        start: 'top 60%',
        once: true // 繰り返さず1回のみ実行
        // markers:{
        //   startColor: "green",
        // },
      }
    });
  });
});