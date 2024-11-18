<?php get_header(); ?>

  <main class="main">
    <!-- (円形)予約ボタン -->
    <a href="" target="_blank" class="reserve-circle reserve-circle--only-sp js-fadeInUp-delay">
      <div class="reserve-circle__brown">
        <div class="reserve-circle__en">Reserve</div>
        <div class="reserve-circle__ja">予約する</div>
        <div class="reserve-circle__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="37" viewBox="0 0 34 37" fill="none">
          <g clip-path="url(#clip0_1_2526)">
            <path d="M12.7479 13.6035H14.8345V15.8506H12.7479V13.6035ZM19.0076 27.0859H21.0942V29.333H19.0076V27.0859ZM25.2673 13.6035H27.3539V15.8506H25.2673V13.6035ZM19.0076 13.6035H21.0942V15.8506H19.0076V13.6035ZM12.7479 18.0977H14.8345V20.3447H12.7479V18.0977ZM6.48821 18.0977H8.57478V20.3447H6.48821V18.0977ZM25.2673 18.0977H27.3539V20.3447H25.2673V18.0977ZM19.0076 18.0977H21.0942V20.3447H19.0076V18.0977ZM12.7479 22.5918H14.8345V24.8389H12.7479V22.5918ZM6.48821 22.5918H8.57478V24.8389H6.48821V22.5918ZM25.2673 22.5918H27.3539V24.8389H25.2673V22.5918ZM19.0076 22.5918H21.0942V24.8389H19.0076V22.5918ZM12.7479 27.0859H14.8345V29.333H12.7479V27.0859ZM6.48821 27.0859H8.57478V29.333H6.48821V27.0859ZM33.6136 2.36816V33.8271H0.228516V2.36816H6.48821V0.121094H8.57478V2.36816H25.2673V0.121094H27.3539V2.36816H33.6136ZM2.31508 4.61523V9.10938H31.527V4.61523H27.3539V6.8623H25.2673V4.61523H8.57478V6.8623H6.48821V4.61523H2.31508ZM31.527 31.5801V11.3564H2.31508V31.5801H31.527Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0_1_2526">
              <rect width="33.385" height="35.9531" fill="white" transform="translate(0.228516 0.121094)"/>
            </clipPath>
          </defs>
        </svg>
        </div>
      </div>
    </a>

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

    <!-- message セクション -->
    <section class="message l-message">
      <div class="message__inner inner">
        <div class="message__wrap flex-section flex-section--2">
          <h3 class="flex-section__title-sp title03">
            <div class="title03__en">Message</div>
            <div class="title03__ja">ご挨拶</div>
          </h3>
          <div class="flex-section__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/staff_img.webp" alt="Eye Herbロゴ"></div>
          <div class="flex-section__texts">
            <h3 class="flex-section__title title03">
              <div class="title03__en">Message</div>
              <div class="title03__ja">ご挨拶</div>
            </h3>
            <div class="flex-section__sub-title">
              心を込めたおもてなしと、<br
              >理想の美を叶える空間へ
            </div>
            <p class="flex-section__text">
              当サロンは「お客様一人ひとりに合った施術を、お値段以上の技術で提供する」をコンセプトにスタッフ一同が心を込めて対応しております。お客様と共にキレイを喜び、リラックスできる空間に「また来たい」と思っていただけるよう、全力でサポートいたします。<br
              >皆様のご来店を心よりお待ちしております。
            </p>
            <div class="flex-section__name">名字 名前</div>
          </div>
        </div>
      </div>
    </section>

    <!-- access--2 セクション -->
    <section class="access access--2 l-access">
      <div class="access__inner inner">
        <h3 class="access__title-2 title03">
          <div class="title03__en">Access</div>
          <div class="title03__ja">アクセス</div>
        </h3>
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
        <div class="access__images">
          <picture class="access__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/access_img01-pc.webp">
            <img class="js-scale-down-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/access_img01-sp.webp" alt="お店の建物の外観">
          </picture>
          <picture class="access__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/access_img02-pc.webp">
            <img class="js-scale-down-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/access_img02-sp.webp" alt="お店の建物の入り口">
          </picture>
          <picture class="access__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/access_img03-pc.webp">
            <img class="js-scale-down-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/access_img03-sp.webp" alt="お店の看板">
          </picture>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
