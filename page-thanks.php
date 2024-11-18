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
          <li class="sub-contact__phase-item is-active">完了</li>
        </ul>
        <p class="sub-contact__text">送信が完了しました。<br>フォーム内容をご送信頂きまして誠にありがとうございます。担当者よりご案内させていただきます。返信にお時間を頂く場合がございます。予めご了承ください。</p>
        <div class="sub-contact__button-top">
          <div class="button-contact">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button">TOPに戻る</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>