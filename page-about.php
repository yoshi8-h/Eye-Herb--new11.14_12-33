<?php get_header(); ?>

  <main class="main">
    <!-- fv2 -->
    <div class="fv2 fv2--about"></div>

    <!-- page-top (ページの先頭部分) -->
    <div class="page-top l-page-top">
      <div class="page-top__inner inner">
        <div class="page-top__wrap">
          <!-- ページタイトル -->
          <h2 class="page-top__title title02">
            <div class="title02__main">About Eye Herb</div>
            <div class="title02__sub">サロンについて</div>
          </h2>
          <!-- パンくずリスト -->
          <nav class="page-top__breadcrumb breadcrumb">
            <span property="itemListElement" typeof="ListItem">
              <a property="item" typeof="WebPage" title="" href="" class="home">
                <span property="name">TOP</span>
              </a>
              <meta property="position" content="1">
            </span><span class="breadcrumb__separator"></span>
            <span property="itemListElement" typeof="ListItem"><span property="name" class="archive post-campaign-archive current-item">サロンについて</span><meta property="url" content=""><meta property="position" content="2"></span>  <!-- 『bcn_display();』という関数がある時のみ表示 (プラグイン『Breadcrumb NavXT』が有効化されている時) -->
          </nav>
        </div>
      </div>
    </div>

    <!-- feature セクション -->
    <section class="feature l-feature">
      <div class="feature__inner inner">
        <div class="feature__wrap flex-section">
          <div class="flex-section__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-03.webp" alt="Eye Herbロゴ"></div>
          <div class="flex-section__texts">
            <h3 class="flex-section__title title03">
              <div class="title03__en">Features of Eye Herb</div>
              <div class="title03__ja">Eye Herbの特徴</div>
            </h3>
            <p class="flex-section__text">
              当サロンではまつ毛、眉毛、フェイシャルワックス、ピーリングなど、複数の施術を同時にお受けいただけます。また、メイクルームを完備しており施術後もゆったりとお過ごしいただけます。3つのベッドはすべて完全個室で、プライベート空間でリラックスして施術をお楽しみいただけます。<br
              >ご来店の際には、季節に合わせたハーブティーをご提供いたしますので、心地よいひとときをお過ごしください。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- access セクション -->
    <section class="access l-access">
      <div class="access__inner inner">
        <div class="access__wrap">
          <div class="access__left">
            <h2 class="access__title section-title01 section-title01--none-bar">Access</h2>
            <p class="access__info">
              Eye Herb Beauty Salon<br
              >東京都 渋谷区 代官山町2-5 コレタス代官山4F<br
              >【営業時間】12:00 -19:00(最終受付19:00)
            </p>
            <p class="access__access">
              恵比寿駅 徒歩12分<br
              >東急東横線 / 代官山駅 徒歩約7分<br
              >JR山手線 / 渋谷駅 徒歩約7分<br>JR埼京線 / 渋谷駅 徒歩約7分<br
              >JR湘南新宿ライン / 渋谷駅 徒歩約7分
            </p>
          </div>
          <div class="access__right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.987943746225!2d139.70243747602382!3d35.65266867259646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5b36f4ada1%3A0x4585b16474b38f91!2z44CSMTUwLTAwMzQg5p2x5Lqs6YO95riL6LC35Yy65Luj5a6Y5bGx55S677yS4oiS77yVIOOCs-ODrOOCv-OCueS7o-WumOWxsSA0Zg!5e0!3m2!1sja!2sjp!4v1731834145436!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
