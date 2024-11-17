<?php get_header(); ?>

  <main class="main">
    <!-- fv -->
    <div class="fv">
      <div class="fv__inner">
        <div class="fv__wrap">
          <div class="fv__texts">
            <p class="fv__text01">代官山に佇む、癒しの</p>
            <p class="fv__text02">完全プライベートサロン</p>
          </div>
        </div>
      </div>
      <div class="fv__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-logo.webp" alt="Eye Herb"></div>
      <!-- (円形)予約ボタン -->
      <a href="" target="_blank" class="fv__reserve-circle reserve-circle">
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
      <!-- scroll-bar -->
      <div class="fv__scroll-bar scroll-bar">
        <div class="scroll-bar__text">Scroll Down</div>
        <div class="scroll-bar__bar"></div>
			</div>
    </div>

    <!-- about セクション -->
    <section class="about l-about">
      <picture class="about__img-left">
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-left-pc.webp">
        <img class="js-scale-down-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-left-sp.webp" alt="お店の内装の店名">
      </picture>
      <picture class="about__img-right">
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-right-pc.webp">
        <img class="js-scale-down-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img-right-sp.webp" alt="お店の内装の電飾">
      </picture>
      <div class="about__inner inner">
        <div class="about__wrap">
          <h2 class="about__title section-title01">About Eye Herb</h2>
          <p class="about__text01 js-fadeIn-mask-left">
            全個室の落ち着いた空間で、<br
            >あなたの美しさを引き出す<br
            >特別なひとときを。
          </p>
          <p class="about__text02">
            当店はプライベートサロンです。<br
            >高級感のあるワンランク上の施術を<br class="u-mobile">ご提供いたします。<br class="u-desktop"
            >リラックスした<br class="u-mobile">贅沢な時間をお過ごしいただきながら、<br
            >お客様一人ひとりに合った理想の目元を叶えます。<br
            >ピーリングやフェイシャルワックスは<br class="u-mobile">男性のお客様もご利用可能です。<br
            >皆様のご来店を心よりお待ちしております。
          </p>
          <div class="about__btn-wrap">
            <a href="" class="about__btn btn">View More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- menu セクション -->
    <section class="menu l-menu">
      <div class="menu__inner inner">
        <div class="menu__wrap">
        <h2 class="menu__title section-title01">Salon Menu</h2>
          <div class="menu__contents contents">
            <div class="contents__item content">
              <div class="content__img-wrap">
                <picture class="content__img">
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-menu-img01-pc.webp">
                  <img class="js-scale-down-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-menu-img01-sp.webp" alt="アイラッシュの施術風景">
                </picture>
              </div>
              <div class="content__menu">
                <div class="content__menu-top">
                  <div class="content__menu-title">アイラッシュメニュー</div>
                  <a href="" class="content__menu-link"><span class="content__menu-text">料金表はこちら</span></a>
                </div>
                <div class="content__menu-list list">
                  <a href="" class="list__item">
                    <div class="list__item-text">パリジェンヌ</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">ラッシュリフト</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">フラットラッシュ</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">ボリュームラッシュ</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">LEDエクステ</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">ラッシュアディクト　サロンケア</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                </div>
              </div>
              <div class="content__btn-sp">
                <a href="" class="content__btn btn">View More</a>
              </div>
            </div>
            <div class="contents__item content">
              <div class="content__img-wrap">
                <picture class="content__img">
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-menu-img02-pc.webp">
                  <img class="js-scale-down-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-menu-img02-sp.webp" alt="エステの施術風景">
                </picture>
              </div>
              <div class="content__menu">
                <div class="content__menu-top">
                  <div class="content__menu-title">エステメニュー</div>
                  <a href="" class="content__menu-link"><span class="content__menu-text">料金表はこちら</span></a>
                </div>
                <div class="content__menu-list list">
                  <a href="" class="list__item">
                    <div class="list__item-text">ララピール</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">プラピール</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">o.h.lハーブピーリング</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">日本産ハーバルピール</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                  <a href="" class="list__item">
                    <div class="list__item-text">フェイシャル</div>
                    <div class="list__item-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M13.459 1.31934L19.459 7.31872L13.459 13.3193" stroke="black"/>
                        <line x1="0.921875" y1="7.13232" x2="18.9219" y2="7.13232" stroke="black"/>
                      </svg>
                    </div>
                  </a>
                </div>
              </div>
              <div class="content__btn-sp">
                <a href="" class="content__btn btn">View More</a>
              </div>
            </div>
          </div>
          <div class="menu__btn-wrap">
            <a href="" class="menu__btn btn">View More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- cta2 -->
    <div class="cta2 l-cta2">
      <div class="cta2__inner">
        <div class="cta2__wrap">
          <a href="" class="cta2__item">
            <div class="cta2__item-inner inner">
              <div class="cta2__item-left">Recruit Info</div>
              <div class="cta2__item-right">
                <div class="cta2__item-texts">
                  <div class="cta2__item-text1">採用情報はこちら</div>
                  <div class="cta2__item-text2 u-desktop">Eye Herb Beauty Salon</div>
                  <div class="cta2__item-text2 u-mobile">Recruit Info</div>
                </div>
                <div class="cta2__item-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="77" height="18" viewBox="0 0 77 18" fill="none">
                    <line x1="0.130859" y1="8.78516" x2="75.3086" y2="8.78516" stroke="#402E32"/>
                    <path d="M67.3086 0.867188L75.3086 8.86637L67.3086 16.8672" stroke="#402E32"/>
                  </svg>
                </div>
              </div>
            </div>
          </a>
          <a href="" class="cta2__item">
            <div class="cta2__item-inner inner">
              <div class="cta2__item-left">Contact Form</div>
              <div class="cta2__item-right">
                <div class="cta2__item-texts">
                  <div class="cta2__item-text1">お問い合わせはこちら</div>
                  <div class="cta2__item-text2 u-desktop">Contact the salon</div>
                  <div class="cta2__item-text2 u-mobile">Contact Form</div>
                </div>
                <div class="cta2__item-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="77" height="18" viewBox="0 0 77 18" fill="none">
                    <line x1="0.130859" y1="8.78516" x2="75.3086" y2="8.78516" stroke="#402E32"/>
                    <path d="M67.3086 0.867188L75.3086 8.86637L67.3086 16.8672" stroke="#402E32"/>
                  </svg>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

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
