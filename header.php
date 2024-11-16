<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <?php wp_head(); ?>
</head>
<body>
  <!-- header (ページ先頭時に表示) -->
  <header class="header">
    <div class="header__inner">
      <div class="header__wrap-pc">
        <h1 class="header__title">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="header__title-link">代官山に佇む癒しのプライベートサロン<br class="header__title-br">【 Eye Herb 】</a>
        </h1>
        <nav class="header__nav">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="header__link">About Eye Herb</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="header__link">Menu</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('before-after'))); ?>" class="header__link">Before/After</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="header__link">Recruit</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="header__link">Contact</a>
        </nav>
      </div>
      <button class="header__btn js-header__btn">
        <div class="header__btn-wrap">
          <span class="header__bar"></span>
          <span class="header__bar"></span>
          <span class="header__bar"></span>
        </div>
      </button>
    </div>
  </header>

  <!-- header2 (追従時) -->
  <header class="header2">
    <div class="header2__inner">
      <div class="header2__wrap">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header2__logos">
          <div class="header2__logo-01"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-01.webp" alt="EH"></div>
          <h1 class="header2__logo-02"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-02.webp" alt="Eye Herb (beauty salon)"></h1>
        </a>
        <div class="header2__right">
          <nav class="header2__nav">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="header2__link">About Eye Herb</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="header2__link">Menu</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('before-after'))); ?>" class="header2__link">Before/After</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="header2__link">Recruit</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="header2__link">Contact</a>
          </nav>
          <div class="header2__reserve">
            <a href="" target="_blank" class="header2__btn-reserve btn-reserve01">
              <div class="btn-reserve01__wrap">
                <div class="btn-reserve01__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                    <g clip-path="url(#clip0_18_2629)">
                      <path d="M7.09375 7.5H8.21875V8.75H7.09375V7.5ZM10.4688 15H11.5938V16.25H10.4688V15ZM13.8438 7.5H14.9688V8.75H13.8438V7.5ZM10.4688 7.5H11.5938V8.75H10.4688V7.5ZM7.09375 10H8.21875V11.25H7.09375V10ZM3.71875 10H4.84375V11.25H3.71875V10ZM13.8438 10H14.9688V11.25H13.8438V10ZM10.4688 10H11.5938V11.25H10.4688V10ZM7.09375 12.5H8.21875V13.75H7.09375V12.5ZM3.71875 12.5H4.84375V13.75H3.71875V12.5ZM13.8438 12.5H14.9688V13.75H13.8438V12.5ZM10.4688 12.5H11.5938V13.75H10.4688V12.5ZM7.09375 15H8.21875V16.25H7.09375V15ZM3.71875 15H4.84375V16.25H3.71875V15ZM18.3438 1.25V18.75H0.34375V1.25H3.71875V0H4.84375V1.25H13.8438V0H14.9688V1.25H18.3438ZM1.46875 2.5V5H17.2188V2.5H14.9688V3.75H13.8438V2.5H4.84375V3.75H3.71875V2.5H1.46875ZM17.2188 17.5V6.25H1.46875V17.5H17.2188Z" fill="white"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_18_2629">
                        <rect width="18" height="20" fill="white" transform="translate(0.34375)"/>
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="btn-reserve01__text">予約する</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ドロワーメニュー -->
  <div class="drawer-menu js-drawer-menu">
    <div class="drawer-menu__inner">
      <div class="drawer-menu__wrap">
        <a class="drawer-menu__top title01">
          <p class="title01__text">代官山に佇む癒しのプライベートサロン</p>
          <div class="title01__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/title01-img-sp.webp" alt="Eye Herb"></div>
        </a>
        <div class="drawer-menu__nav nav">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="nav__item">About Eye Herb</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="nav__item">Menu</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('before-after'))); ?>" class="nav__item">Before/After</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="nav__item">Recruit</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="nav__item">Contact</a>
        </div>
        <div class="drawer-menu__bottom">
          <div class="drawer-menu__info info">
            <address class="info__address">東京都渋谷区代官山町2-5 コレタス代官山4F</address>
            <div class="info__tel">【TEL】03-6416-4229 (12:00 - 19:00)</div>
          </div>
          <div class="drawer-menu__sns-wrap sns-wrap">
            <a href="" target="_blank" class="sns-wrap__insta"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-icon.webp" alt="instagram"></a>
            <a href="" target="_blank" class="sns-wrap__line"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/line-icon.webp" alt="LINE"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
