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
      <h1 class="header__title">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__title-link">代官山に佇む癒しのプライベートサロン【 Eye Herb 】</a>
      </h1>
      <nav class="header__nav">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="header__link">About Eye Herb</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="header__link">Menu</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('before-after'))); ?>" class="header__link">Before/After</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="header__link">Recruit</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="header__link">Contact</a>
      </nav>
      <button class="header__btn js-header__btn">
        <span class="header__bar"></span>
        <span class="header__bar"></span>
        <span class="header__bar"></span>
      </button>
    </div>
  </header>

  <!-- header2 (追従時) -->
  <header class="header2">
    <div class="header2__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header2__logos">
        <div class="header2__logo-01"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-01.webp" alt="EH"></div>
        <h1 class="header2__logo-02"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-02.webp" alt="Eye Herb (beauty salon)"></h1>
      </a>
      <nav class="header2__nav">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="header2__link">About Eye Herb</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="header2__link">Menu</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('before-after'))); ?>" class="header2__link">Before/After</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="header2__link">Recruit</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="header2__link">Contact</a>
      </nav>
      <a href="" class="header2__btn-reserve btn-reserve01">
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
      </a>
    </div>
  </header>

  <!-- ドロワーメニュー -->
  <div class="drawer-menu js-drawer-menu">
    <div class="drawer-menu__wrap">
      <div class="drawer-menu__left">
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">キャンペーン</p>
          </a>
          <div class="drawer-link__details">
            <?php
            //　カスタム投稿タイプ『campaign』にカテゴリ(タクソノミー)が追加される度に、そのタクソノミーの一覧ページへのリンクが生成されるようにする。
              // カスタムタクソノミーのカテゴリを取得
              $terms = get_terms(array(
                'taxonomy' => 'campaign_category',
                'hide_empty' => false,
              ));

              // 取得したカテゴリが存在する場合、リンクを生成
              if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                  // 各カテゴリのリンクを出力
                  echo '<a href="' . esc_url(get_term_link($term)) . '" class="drawer-link__detail">' . esc_html($term->name) . '</a>';
                }
              }
            ?>
          </div>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">私たちについて</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">ダイビング情報</p>
          </a>
          <div class="drawer-link__details">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category1" class="drawer-link__detail">ライセンス講習</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category3" class="drawer-link__detail">体験ダイビング</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?category=category2" class="drawer-link__detail">ファンダイビング</a>
          </div>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">ブログ</p>
          </a>
        </div>
      </div>
      <div class="drawer-menu__right">
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">お客様の声</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">料金一覧</p>
          </a>
          <div class="drawer-link__details">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__license" class="drawer-link__detail">ライセンス講習</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__experience" class="drawer-link__detail">体験ダイビング</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#price-page__fun" class="drawer-link__detail">ファンダイビング</a>
          </div>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">よくある質問</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">プライバシー<br>ポリシー</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">利用規約</p>
          </a>
        </div>
        <div class="drawer-menu__link drawer-link">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="drawer-link__main">
            <div class="drawer-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.webp" alt="ヒトデのアイコン"></div>
            <p class="drawer-link__text">お問い合わせ</p>
          </a>
        </div>
      </div>
    </div>
  </div>
