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

    <!-- before-after セクション -->
    <section class="before-after l-before-after">
      <div class="before-after__inner inner">
        <div class="before-after__top">
          <h2 class="before-after__title section-title01 section-title01--none-bar">Before / After</h2>
          <a href="" class="before-after__more-btn more-btn">
            <div class="more-btn__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                <path d="M4.45117 5.16797C4.45117 4.33797 5.12117 3.66797 5.95117 3.66797C6.78117 3.66797 7.45117 4.33797 7.45117 5.16797C7.45117 5.99797 6.78117 6.66797 5.95117 6.66797C5.12117 6.66797 4.45117 5.99797 4.45117 5.16797ZM11.4512 5.16797C11.4512 4.33797 12.1212 3.66797 12.9512 3.66797C13.7812 3.66797 14.4512 4.33797 14.4512 5.16797C14.4512 5.99797 13.7812 6.66797 12.9512 6.66797C12.1212 6.66797 11.4512 5.99797 11.4512 5.16797ZM18.4512 5.16797C18.4512 4.33797 19.1212 3.66797 19.9512 3.66797C20.7812 3.66797 21.4512 4.33797 21.4512 5.16797C21.4512 5.99797 20.7812 6.66797 19.9512 6.66797C19.1212 6.66797 18.4512 5.99797 18.4512 5.16797Z" fill="#402E32" stroke="#402E32" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.45117 12.168C4.45117 11.338 5.12117 10.668 5.95117 10.668C6.78117 10.668 7.45117 11.338 7.45117 12.168C7.45117 12.998 6.78117 13.668 5.95117 13.668C5.12117 13.668 4.45117 12.998 4.45117 12.168ZM11.4512 12.168C11.4512 11.338 12.1212 10.668 12.9512 10.668C13.7812 10.668 14.4512 11.338 14.4512 12.168C14.4512 12.998 13.7812 13.668 12.9512 13.668C12.1212 13.668 11.4512 12.998 11.4512 12.168ZM18.4512 12.168C18.4512 11.338 19.1212 10.668 19.9512 10.668C20.7812 10.668 21.4512 11.338 21.4512 12.168C21.4512 12.998 20.7812 13.668 19.9512 13.668C19.1212 13.668 18.4512 12.998 18.4512 12.168Z" fill="#402E32" stroke="#402E32" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.45117 19.168C4.45117 18.338 5.12117 17.668 5.95117 17.668C6.78117 17.668 7.45117 18.338 7.45117 19.168C7.45117 19.998 6.78117 20.668 5.95117 20.668C5.12117 20.668 4.45117 19.998 4.45117 19.168ZM11.4512 19.168C11.4512 18.338 12.1212 17.668 12.9512 17.668C13.7812 17.668 14.4512 18.338 14.4512 19.168C14.4512 19.998 13.7812 20.668 12.9512 20.668C12.1212 20.668 11.4512 19.998 11.4512 19.168ZM18.4512 19.168C18.4512 18.338 19.1212 17.668 19.9512 17.668C20.7812 17.668 21.4512 18.338 21.4512 19.168C21.4512 19.998 20.7812 20.668 19.9512 20.668C19.1212 20.668 18.4512 19.998 18.4512 19.168Z" fill="#402E32" stroke="#402E32" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="more-btn__text">View More</div>
          </a>
        </div>
        <div class="before-after__bottom">
          <div class="before-after__category categories">
            <a href="" class="categories__item is-selected">すべて</a>
            <a href="" class="categories__item">まつ毛パーマ</a>
            <a href="" class="categories__item">フラットラッシュ</a>
            <a href="" class="categories__item">LEDエクステ</a>
            <a href="" class="categories__item">VERBAL PEEL</a>
            <a href="" class="categories__item">OHLハーブピーリング</a>
            <a href="" class="categories__item">ララピール</a>
            <a href="" class="categories__item">プラピール</a>
            <a href="" class="categories__item">イオン導入</a>
          </div>
          <div class="before-after__posts posts">
            <a href="" class="posts__item post">
              <div class="post__wrap">
                <div class="post__eye-catch"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/before-after-img01.webp" alt="Before/After写真"></div>
                <div class="post__contents">
                  <div class="post__top">
                    <div class="post__category category2">まつげパーマ</div>
                    <div class="post__glass-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <g clip-path="url(#clip0_1_2279)">
                          <path d="M31.8477 21.0274C31.8477 21.2139 31.7736 21.3927 31.6418 21.5246C31.5099 21.6564 31.3311 21.7305 31.1446 21.7305H26.2227V26.6524C26.2227 26.8389 26.1486 27.0177 26.0168 27.1496C25.8849 27.2814 25.7061 27.3555 25.5196 27.3555C25.3331 27.3555 25.1543 27.2814 25.0224 27.1496C24.8905 27.0177 24.8165 26.8389 24.8165 26.6524V21.7305H19.8946C19.7081 21.7305 19.5293 21.6564 19.3974 21.5246C19.2655 21.3927 19.1915 21.2139 19.1915 21.0274C19.1915 20.8409 19.2655 20.6621 19.3974 20.5302C19.5293 20.3984 19.7081 20.3243 19.8946 20.3243H24.8165V15.4024C24.8165 15.2159 24.8905 15.0371 25.0224 14.9052C25.1543 14.7734 25.3331 14.6993 25.5196 14.6993C25.7061 14.6993 25.8849 14.7734 26.0168 14.9052C26.1486 15.0371 26.2227 15.2159 26.2227 15.4024V20.3243H31.1446C31.3311 20.3243 31.5099 20.3984 31.6418 20.5302C31.7736 20.6621 31.8477 20.8409 31.8477 21.0274ZM45.7045 41.2124C45.6392 41.2777 45.5617 41.3296 45.4763 41.365C45.391 41.4004 45.2995 41.4186 45.2071 41.4186C45.1147 41.4186 45.0232 41.4004 44.9378 41.365C44.8525 41.3296 44.7749 41.2777 44.7096 41.2124L35.446 31.9487C32.5899 34.545 28.8316 35.9213 24.9742 35.7835C21.1169 35.6458 17.4664 34.0048 14.8028 31.2113C12.1392 28.4178 10.6739 24.6934 10.7198 20.8338C10.7657 16.9743 12.3193 13.2858 15.0487 10.5565C17.778 7.82716 21.4665 6.27355 25.326 6.22761C29.1856 6.18167 32.91 7.64706 35.7035 10.3106C38.497 12.9742 40.1379 16.6247 40.2757 20.482C40.4135 24.3394 39.0372 28.0977 36.4409 30.9538L45.7045 40.2174C45.7699 40.2827 45.8218 40.3603 45.8572 40.4456C45.8926 40.531 45.9108 40.6225 45.9108 40.7149C45.9108 40.8073 45.8926 40.8988 45.8572 40.9842C45.8218 41.0695 45.7699 41.1471 45.7045 41.2124ZM25.5196 34.3868C28.1618 34.3868 30.7447 33.6033 32.9417 32.1353C35.1386 30.6674 36.8509 28.5809 37.862 26.1398C38.8732 23.6987 39.1377 21.0126 38.6223 18.4211C38.1068 15.8296 36.8344 13.4492 34.9661 11.5809C33.0977 9.71255 30.7173 8.44019 28.1259 7.92472C25.5344 7.40925 22.8483 7.67381 20.4072 8.68495C17.9661 9.69608 15.8796 11.4084 14.4117 13.6053C12.9437 15.8023 12.1602 18.3852 12.1602 21.0274C12.1639 24.5694 13.5726 27.9652 16.0772 30.4698C18.5818 32.9744 21.9776 34.383 25.5196 34.3868Z" fill="#402E32"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1_2279">
                            <rect width="45" height="45" fill="white" transform="translate(0.832031 0.707031)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="post__bottom">
                    <p class="post__text">テキストテキストテキスト・・・</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="posts__item post">
              <div class="post__wrap">
                <div class="post__eye-catch"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/before-after-img01.webp" alt="Before/After写真"></div>
                <div class="post__contents">
                  <div class="post__top">
                    <div class="post__category category2">まつげパーマ</div>
                    <div class="post__glass-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <g clip-path="url(#clip0_1_2279)">
                          <path d="M31.8477 21.0274C31.8477 21.2139 31.7736 21.3927 31.6418 21.5246C31.5099 21.6564 31.3311 21.7305 31.1446 21.7305H26.2227V26.6524C26.2227 26.8389 26.1486 27.0177 26.0168 27.1496C25.8849 27.2814 25.7061 27.3555 25.5196 27.3555C25.3331 27.3555 25.1543 27.2814 25.0224 27.1496C24.8905 27.0177 24.8165 26.8389 24.8165 26.6524V21.7305H19.8946C19.7081 21.7305 19.5293 21.6564 19.3974 21.5246C19.2655 21.3927 19.1915 21.2139 19.1915 21.0274C19.1915 20.8409 19.2655 20.6621 19.3974 20.5302C19.5293 20.3984 19.7081 20.3243 19.8946 20.3243H24.8165V15.4024C24.8165 15.2159 24.8905 15.0371 25.0224 14.9052C25.1543 14.7734 25.3331 14.6993 25.5196 14.6993C25.7061 14.6993 25.8849 14.7734 26.0168 14.9052C26.1486 15.0371 26.2227 15.2159 26.2227 15.4024V20.3243H31.1446C31.3311 20.3243 31.5099 20.3984 31.6418 20.5302C31.7736 20.6621 31.8477 20.8409 31.8477 21.0274ZM45.7045 41.2124C45.6392 41.2777 45.5617 41.3296 45.4763 41.365C45.391 41.4004 45.2995 41.4186 45.2071 41.4186C45.1147 41.4186 45.0232 41.4004 44.9378 41.365C44.8525 41.3296 44.7749 41.2777 44.7096 41.2124L35.446 31.9487C32.5899 34.545 28.8316 35.9213 24.9742 35.7835C21.1169 35.6458 17.4664 34.0048 14.8028 31.2113C12.1392 28.4178 10.6739 24.6934 10.7198 20.8338C10.7657 16.9743 12.3193 13.2858 15.0487 10.5565C17.778 7.82716 21.4665 6.27355 25.326 6.22761C29.1856 6.18167 32.91 7.64706 35.7035 10.3106C38.497 12.9742 40.1379 16.6247 40.2757 20.482C40.4135 24.3394 39.0372 28.0977 36.4409 30.9538L45.7045 40.2174C45.7699 40.2827 45.8218 40.3603 45.8572 40.4456C45.8926 40.531 45.9108 40.6225 45.9108 40.7149C45.9108 40.8073 45.8926 40.8988 45.8572 40.9842C45.8218 41.0695 45.7699 41.1471 45.7045 41.2124ZM25.5196 34.3868C28.1618 34.3868 30.7447 33.6033 32.9417 32.1353C35.1386 30.6674 36.8509 28.5809 37.862 26.1398C38.8732 23.6987 39.1377 21.0126 38.6223 18.4211C38.1068 15.8296 36.8344 13.4492 34.9661 11.5809C33.0977 9.71255 30.7173 8.44019 28.1259 7.92472C25.5344 7.40925 22.8483 7.67381 20.4072 8.68495C17.9661 9.69608 15.8796 11.4084 14.4117 13.6053C12.9437 15.8023 12.1602 18.3852 12.1602 21.0274C12.1639 24.5694 13.5726 27.9652 16.0772 30.4698C18.5818 32.9744 21.9776 34.383 25.5196 34.3868Z" fill="#402E32"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1_2279">
                            <rect width="45" height="45" fill="white" transform="translate(0.832031 0.707031)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="post__bottom">
                    <p class="post__text">テキストテキストテキスト・・・</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="posts__item post">
              <div class="post__wrap">
                <div class="post__eye-catch"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/before-after-img01.webp" alt="Before/After写真"></div>
                <div class="post__contents">
                  <div class="post__top">
                    <div class="post__category category2">まつげパーマ</div>
                    <div class="post__glass-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <g clip-path="url(#clip0_1_2279)">
                          <path d="M31.8477 21.0274C31.8477 21.2139 31.7736 21.3927 31.6418 21.5246C31.5099 21.6564 31.3311 21.7305 31.1446 21.7305H26.2227V26.6524C26.2227 26.8389 26.1486 27.0177 26.0168 27.1496C25.8849 27.2814 25.7061 27.3555 25.5196 27.3555C25.3331 27.3555 25.1543 27.2814 25.0224 27.1496C24.8905 27.0177 24.8165 26.8389 24.8165 26.6524V21.7305H19.8946C19.7081 21.7305 19.5293 21.6564 19.3974 21.5246C19.2655 21.3927 19.1915 21.2139 19.1915 21.0274C19.1915 20.8409 19.2655 20.6621 19.3974 20.5302C19.5293 20.3984 19.7081 20.3243 19.8946 20.3243H24.8165V15.4024C24.8165 15.2159 24.8905 15.0371 25.0224 14.9052C25.1543 14.7734 25.3331 14.6993 25.5196 14.6993C25.7061 14.6993 25.8849 14.7734 26.0168 14.9052C26.1486 15.0371 26.2227 15.2159 26.2227 15.4024V20.3243H31.1446C31.3311 20.3243 31.5099 20.3984 31.6418 20.5302C31.7736 20.6621 31.8477 20.8409 31.8477 21.0274ZM45.7045 41.2124C45.6392 41.2777 45.5617 41.3296 45.4763 41.365C45.391 41.4004 45.2995 41.4186 45.2071 41.4186C45.1147 41.4186 45.0232 41.4004 44.9378 41.365C44.8525 41.3296 44.7749 41.2777 44.7096 41.2124L35.446 31.9487C32.5899 34.545 28.8316 35.9213 24.9742 35.7835C21.1169 35.6458 17.4664 34.0048 14.8028 31.2113C12.1392 28.4178 10.6739 24.6934 10.7198 20.8338C10.7657 16.9743 12.3193 13.2858 15.0487 10.5565C17.778 7.82716 21.4665 6.27355 25.326 6.22761C29.1856 6.18167 32.91 7.64706 35.7035 10.3106C38.497 12.9742 40.1379 16.6247 40.2757 20.482C40.4135 24.3394 39.0372 28.0977 36.4409 30.9538L45.7045 40.2174C45.7699 40.2827 45.8218 40.3603 45.8572 40.4456C45.8926 40.531 45.9108 40.6225 45.9108 40.7149C45.9108 40.8073 45.8926 40.8988 45.8572 40.9842C45.8218 41.0695 45.7699 41.1471 45.7045 41.2124ZM25.5196 34.3868C28.1618 34.3868 30.7447 33.6033 32.9417 32.1353C35.1386 30.6674 36.8509 28.5809 37.862 26.1398C38.8732 23.6987 39.1377 21.0126 38.6223 18.4211C38.1068 15.8296 36.8344 13.4492 34.9661 11.5809C33.0977 9.71255 30.7173 8.44019 28.1259 7.92472C25.5344 7.40925 22.8483 7.67381 20.4072 8.68495C17.9661 9.69608 15.8796 11.4084 14.4117 13.6053C12.9437 15.8023 12.1602 18.3852 12.1602 21.0274C12.1639 24.5694 13.5726 27.9652 16.0772 30.4698C18.5818 32.9744 21.9776 34.383 25.5196 34.3868Z" fill="#402E32"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1_2279">
                            <rect width="45" height="45" fill="white" transform="translate(0.832031 0.707031)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="post__bottom">
                    <p class="post__text">テキストテキストテキスト・・・</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="posts__item post">
              <div class="post__wrap">
                <div class="post__eye-catch"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/before-after-img01.webp" alt="Before/After写真"></div>
                <div class="post__contents">
                  <div class="post__top">
                    <div class="post__category category2">まつげパーマ</div>
                    <div class="post__glass-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <g clip-path="url(#clip0_1_2279)">
                          <path d="M31.8477 21.0274C31.8477 21.2139 31.7736 21.3927 31.6418 21.5246C31.5099 21.6564 31.3311 21.7305 31.1446 21.7305H26.2227V26.6524C26.2227 26.8389 26.1486 27.0177 26.0168 27.1496C25.8849 27.2814 25.7061 27.3555 25.5196 27.3555C25.3331 27.3555 25.1543 27.2814 25.0224 27.1496C24.8905 27.0177 24.8165 26.8389 24.8165 26.6524V21.7305H19.8946C19.7081 21.7305 19.5293 21.6564 19.3974 21.5246C19.2655 21.3927 19.1915 21.2139 19.1915 21.0274C19.1915 20.8409 19.2655 20.6621 19.3974 20.5302C19.5293 20.3984 19.7081 20.3243 19.8946 20.3243H24.8165V15.4024C24.8165 15.2159 24.8905 15.0371 25.0224 14.9052C25.1543 14.7734 25.3331 14.6993 25.5196 14.6993C25.7061 14.6993 25.8849 14.7734 26.0168 14.9052C26.1486 15.0371 26.2227 15.2159 26.2227 15.4024V20.3243H31.1446C31.3311 20.3243 31.5099 20.3984 31.6418 20.5302C31.7736 20.6621 31.8477 20.8409 31.8477 21.0274ZM45.7045 41.2124C45.6392 41.2777 45.5617 41.3296 45.4763 41.365C45.391 41.4004 45.2995 41.4186 45.2071 41.4186C45.1147 41.4186 45.0232 41.4004 44.9378 41.365C44.8525 41.3296 44.7749 41.2777 44.7096 41.2124L35.446 31.9487C32.5899 34.545 28.8316 35.9213 24.9742 35.7835C21.1169 35.6458 17.4664 34.0048 14.8028 31.2113C12.1392 28.4178 10.6739 24.6934 10.7198 20.8338C10.7657 16.9743 12.3193 13.2858 15.0487 10.5565C17.778 7.82716 21.4665 6.27355 25.326 6.22761C29.1856 6.18167 32.91 7.64706 35.7035 10.3106C38.497 12.9742 40.1379 16.6247 40.2757 20.482C40.4135 24.3394 39.0372 28.0977 36.4409 30.9538L45.7045 40.2174C45.7699 40.2827 45.8218 40.3603 45.8572 40.4456C45.8926 40.531 45.9108 40.6225 45.9108 40.7149C45.9108 40.8073 45.8926 40.8988 45.8572 40.9842C45.8218 41.0695 45.7699 41.1471 45.7045 41.2124ZM25.5196 34.3868C28.1618 34.3868 30.7447 33.6033 32.9417 32.1353C35.1386 30.6674 36.8509 28.5809 37.862 26.1398C38.8732 23.6987 39.1377 21.0126 38.6223 18.4211C38.1068 15.8296 36.8344 13.4492 34.9661 11.5809C33.0977 9.71255 30.7173 8.44019 28.1259 7.92472C25.5344 7.40925 22.8483 7.67381 20.4072 8.68495C17.9661 9.69608 15.8796 11.4084 14.4117 13.6053C12.9437 15.8023 12.1602 18.3852 12.1602 21.0274C12.1639 24.5694 13.5726 27.9652 16.0772 30.4698C18.5818 32.9744 21.9776 34.383 25.5196 34.3868Z" fill="#402E32"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1_2279">
                            <rect width="45" height="45" fill="white" transform="translate(0.832031 0.707031)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="post__bottom">
                    <p class="post__text">テキストテキストテキスト・・・</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="posts__item post">
              <div class="post__wrap">
                <div class="post__eye-catch"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/before-after-img01.webp" alt="Before/After写真"></div>
                <div class="post__contents">
                  <div class="post__top">
                    <div class="post__category category2">OHLハーブピーリング</div>
                    <div class="post__glass-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <g clip-path="url(#clip0_1_2279)">
                          <path d="M31.8477 21.0274C31.8477 21.2139 31.7736 21.3927 31.6418 21.5246C31.5099 21.6564 31.3311 21.7305 31.1446 21.7305H26.2227V26.6524C26.2227 26.8389 26.1486 27.0177 26.0168 27.1496C25.8849 27.2814 25.7061 27.3555 25.5196 27.3555C25.3331 27.3555 25.1543 27.2814 25.0224 27.1496C24.8905 27.0177 24.8165 26.8389 24.8165 26.6524V21.7305H19.8946C19.7081 21.7305 19.5293 21.6564 19.3974 21.5246C19.2655 21.3927 19.1915 21.2139 19.1915 21.0274C19.1915 20.8409 19.2655 20.6621 19.3974 20.5302C19.5293 20.3984 19.7081 20.3243 19.8946 20.3243H24.8165V15.4024C24.8165 15.2159 24.8905 15.0371 25.0224 14.9052C25.1543 14.7734 25.3331 14.6993 25.5196 14.6993C25.7061 14.6993 25.8849 14.7734 26.0168 14.9052C26.1486 15.0371 26.2227 15.2159 26.2227 15.4024V20.3243H31.1446C31.3311 20.3243 31.5099 20.3984 31.6418 20.5302C31.7736 20.6621 31.8477 20.8409 31.8477 21.0274ZM45.7045 41.2124C45.6392 41.2777 45.5617 41.3296 45.4763 41.365C45.391 41.4004 45.2995 41.4186 45.2071 41.4186C45.1147 41.4186 45.0232 41.4004 44.9378 41.365C44.8525 41.3296 44.7749 41.2777 44.7096 41.2124L35.446 31.9487C32.5899 34.545 28.8316 35.9213 24.9742 35.7835C21.1169 35.6458 17.4664 34.0048 14.8028 31.2113C12.1392 28.4178 10.6739 24.6934 10.7198 20.8338C10.7657 16.9743 12.3193 13.2858 15.0487 10.5565C17.778 7.82716 21.4665 6.27355 25.326 6.22761C29.1856 6.18167 32.91 7.64706 35.7035 10.3106C38.497 12.9742 40.1379 16.6247 40.2757 20.482C40.4135 24.3394 39.0372 28.0977 36.4409 30.9538L45.7045 40.2174C45.7699 40.2827 45.8218 40.3603 45.8572 40.4456C45.8926 40.531 45.9108 40.6225 45.9108 40.7149C45.9108 40.8073 45.8926 40.8988 45.8572 40.9842C45.8218 41.0695 45.7699 41.1471 45.7045 41.2124ZM25.5196 34.3868C28.1618 34.3868 30.7447 33.6033 32.9417 32.1353C35.1386 30.6674 36.8509 28.5809 37.862 26.1398C38.8732 23.6987 39.1377 21.0126 38.6223 18.4211C38.1068 15.8296 36.8344 13.4492 34.9661 11.5809C33.0977 9.71255 30.7173 8.44019 28.1259 7.92472C25.5344 7.40925 22.8483 7.67381 20.4072 8.68495C17.9661 9.69608 15.8796 11.4084 14.4117 13.6053C12.9437 15.8023 12.1602 18.3852 12.1602 21.0274C12.1639 24.5694 13.5726 27.9652 16.0772 30.4698C18.5818 32.9744 21.9776 34.383 25.5196 34.3868Z" fill="#402E32"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1_2279">
                            <rect width="45" height="45" fill="white" transform="translate(0.832031 0.707031)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="post__bottom">
                    <p class="post__text">テキストテキストテキスト・・・</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="posts__item post">
              <div class="post__wrap">
                <div class="post__eye-catch"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/before-after-img01.webp" alt="Before/After写真"></div>
                <div class="post__contents">
                  <div class="post__top">
                    <div class="post__category category2">まつげパーマ</div>
                    <div class="post__glass-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <g clip-path="url(#clip0_1_2279)">
                          <path d="M31.8477 21.0274C31.8477 21.2139 31.7736 21.3927 31.6418 21.5246C31.5099 21.6564 31.3311 21.7305 31.1446 21.7305H26.2227V26.6524C26.2227 26.8389 26.1486 27.0177 26.0168 27.1496C25.8849 27.2814 25.7061 27.3555 25.5196 27.3555C25.3331 27.3555 25.1543 27.2814 25.0224 27.1496C24.8905 27.0177 24.8165 26.8389 24.8165 26.6524V21.7305H19.8946C19.7081 21.7305 19.5293 21.6564 19.3974 21.5246C19.2655 21.3927 19.1915 21.2139 19.1915 21.0274C19.1915 20.8409 19.2655 20.6621 19.3974 20.5302C19.5293 20.3984 19.7081 20.3243 19.8946 20.3243H24.8165V15.4024C24.8165 15.2159 24.8905 15.0371 25.0224 14.9052C25.1543 14.7734 25.3331 14.6993 25.5196 14.6993C25.7061 14.6993 25.8849 14.7734 26.0168 14.9052C26.1486 15.0371 26.2227 15.2159 26.2227 15.4024V20.3243H31.1446C31.3311 20.3243 31.5099 20.3984 31.6418 20.5302C31.7736 20.6621 31.8477 20.8409 31.8477 21.0274ZM45.7045 41.2124C45.6392 41.2777 45.5617 41.3296 45.4763 41.365C45.391 41.4004 45.2995 41.4186 45.2071 41.4186C45.1147 41.4186 45.0232 41.4004 44.9378 41.365C44.8525 41.3296 44.7749 41.2777 44.7096 41.2124L35.446 31.9487C32.5899 34.545 28.8316 35.9213 24.9742 35.7835C21.1169 35.6458 17.4664 34.0048 14.8028 31.2113C12.1392 28.4178 10.6739 24.6934 10.7198 20.8338C10.7657 16.9743 12.3193 13.2858 15.0487 10.5565C17.778 7.82716 21.4665 6.27355 25.326 6.22761C29.1856 6.18167 32.91 7.64706 35.7035 10.3106C38.497 12.9742 40.1379 16.6247 40.2757 20.482C40.4135 24.3394 39.0372 28.0977 36.4409 30.9538L45.7045 40.2174C45.7699 40.2827 45.8218 40.3603 45.8572 40.4456C45.8926 40.531 45.9108 40.6225 45.9108 40.7149C45.9108 40.8073 45.8926 40.8988 45.8572 40.9842C45.8218 41.0695 45.7699 41.1471 45.7045 41.2124ZM25.5196 34.3868C28.1618 34.3868 30.7447 33.6033 32.9417 32.1353C35.1386 30.6674 36.8509 28.5809 37.862 26.1398C38.8732 23.6987 39.1377 21.0126 38.6223 18.4211C38.1068 15.8296 36.8344 13.4492 34.9661 11.5809C33.0977 9.71255 30.7173 8.44019 28.1259 7.92472C25.5344 7.40925 22.8483 7.67381 20.4072 8.68495C17.9661 9.69608 15.8796 11.4084 14.4117 13.6053C12.9437 15.8023 12.1602 18.3852 12.1602 21.0274C12.1639 24.5694 13.5726 27.9652 16.0772 30.4698C18.5818 32.9744 21.9776 34.383 25.5196 34.3868Z" fill="#402E32"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1_2279">
                            <rect width="45" height="45" fill="white" transform="translate(0.832031 0.707031)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="post__bottom">
                    <p class="post__text">テキストテキストテキスト・・・</p>
                  </div>
                </div>
              </div>
            </a>
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
