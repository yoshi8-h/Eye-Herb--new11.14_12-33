<?php get_header(); ?>
<main class="main">

  <!-- page-top (ページの先頭部分) -->
  <div class="page-top l-page-top">
    <div class="page-top__inner inner">
      <div class="page-top__wrap">
        <!-- ページタイトル -->
        <h2 class="page-top__title title02">
          <div class="title02__main">Contact form</div>
          <div class="title02__sub">お問い合わせ</div>
        </h2>
        <!-- パンくずリスト -->
        <nav class="page-top__breadcrumb breadcrumb">
          <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="" href="" class="home">
              <span property="name">TOP</span>
            </a>
            <meta property="position" content="1">
          </span><span class="breadcrumb__separator"></span>
          <span property="itemListElement" typeof="ListItem"><span property="name" class="archive post-campaign-archive current-item">お問い合わせ</span>
            <meta property="url" content="">
            <meta property="position" content="2">
          </span> <!-- 『bcn_display();』という関数がある時のみ表示 (プラグイン『Breadcrumb NavXT』が有効化されている時) -->
        </nav>
      </div>
    </div>
  </div>

  <section class="sub-contact">
    <div class="sub-contact__inner inner">
      <div class="sub-contact__content">
        <!-- contact phase -->
        <ul class="sub-contact__phase-list">
          <li class="sub-contact__phase-item is-active">入力</li>
          <li class="sub-contact__phase-item is-active">確認</li>
          <li class="sub-contact__phase-item">完了</li>
        </ul>
        <p class="sub-contact__text">入力内容をご確認ください。<br>内容に間違いがなければ、ページ最下部の送信ボタンを押して下さい。</p>
        <div class="sub-contact__form">
          <?php echo do_shortcode('[contact-form-7 id="a825511" title="入力画面"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>