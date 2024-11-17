<?php get_header(); ?>

  <main class="main">
    <!-- fv -->
    <div class="fv">
      <div class="fv__inner">
        <div class="fv__wrap">
          <div class="fv__texts js-items-fadeInUp-trigger">
            <p class="fv__text01 js-item-fadeInUp">代官山に佇む、癒しの</p>
            <p class="fv__text02 js-item-fadeInUp">完全プライベートサロン</p>
          </div>
        </div>
      </div>
      <div class="fv__logo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-logo.webp" alt="Eye Herb"></div>
      <!-- (円形)予約ボタン -->
      <a href="" target="_blank" class="fv__reserve-circle reserve-circle js-fadeInUp-delay">
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
      <div class="fv__scroll-bar scroll-bar js-fadeInUp-delay">
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
          <a href="" class="before-after__btn-pc more-btn">
            <div class="more-btn__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                <path d="M4.45117 5.16797C4.45117 4.33797 5.12117 3.66797 5.95117 3.66797C6.78117 3.66797 7.45117 4.33797 7.45117 5.16797C7.45117 5.99797 6.78117 6.66797 5.95117 6.66797C5.12117 6.66797 4.45117 5.99797 4.45117 5.16797ZM11.4512 5.16797C11.4512 4.33797 12.1212 3.66797 12.9512 3.66797C13.7812 3.66797 14.4512 4.33797 14.4512 5.16797C14.4512 5.99797 13.7812 6.66797 12.9512 6.66797C12.1212 6.66797 11.4512 5.99797 11.4512 5.16797ZM18.4512 5.16797C18.4512 4.33797 19.1212 3.66797 19.9512 3.66797C20.7812 3.66797 21.4512 4.33797 21.4512 5.16797C21.4512 5.99797 20.7812 6.66797 19.9512 6.66797C19.1212 6.66797 18.4512 5.99797 18.4512 5.16797Z" fill="#402E32" stroke="#402E32" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.45117 12.168C4.45117 11.338 5.12117 10.668 5.95117 10.668C6.78117 10.668 7.45117 11.338 7.45117 12.168C7.45117 12.998 6.78117 13.668 5.95117 13.668C5.12117 13.668 4.45117 12.998 4.45117 12.168ZM11.4512 12.168C11.4512 11.338 12.1212 10.668 12.9512 10.668C13.7812 10.668 14.4512 11.338 14.4512 12.168C14.4512 12.998 13.7812 13.668 12.9512 13.668C12.1212 13.668 11.4512 12.998 11.4512 12.168ZM18.4512 12.168C18.4512 11.338 19.1212 10.668 19.9512 10.668C20.7812 10.668 21.4512 11.338 21.4512 12.168C21.4512 12.998 20.7812 13.668 19.9512 13.668C19.1212 13.668 18.4512 12.998 18.4512 12.168Z" fill="#402E32" stroke="#402E32" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.45117 19.168C4.45117 18.338 5.12117 17.668 5.95117 17.668C6.78117 17.668 7.45117 18.338 7.45117 19.168C7.45117 19.998 6.78117 20.668 5.95117 20.668C5.12117 20.668 4.45117 19.998 4.45117 19.168ZM11.4512 19.168C11.4512 18.338 12.1212 17.668 12.9512 17.668C13.7812 17.668 14.4512 18.338 14.4512 19.168C14.4512 19.998 13.7812 20.668 12.9512 20.668C12.1212 20.668 11.4512 19.998 11.4512 19.168ZM18.4512 19.168C18.4512 18.338 19.1212 17.668 19.9512 17.668C20.7812 17.668 21.4512 18.338 21.4512 19.168C21.4512 19.998 20.7812 20.668 19.9512 20.668C19.1212 20.668 18.4512 19.998 18.4512 19.168Z" fill="#402E32" stroke="#402E32" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="more-btn__text">View More</div>
          </a>
          <div class="before-after__category-sp categories2">
            <a href="" class="categories2__item">すべて</a>
            <a href="" class="categories2__item">まつ毛パーマ</a>
            <a href="" class="categories2__item">フラットラッシュ</a>
            <a href="" class="categories2__item">LEDエクステ</a>
            <a href="" class="categories2__item">VERBAL PEEL</a>
            <a href="" class="categories2__item">OHLハーブピーリング</a>
            <a href="" class="categories2__item">ララピール</a>
            <a href="" class="categories2__item">プラピール</a>
            <a href="" class="categories2__item">イオン導入</a>
          </div>
        </div>
        <div class="before-after__bottom">
          <div class="before-after__category-pc categories">
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M21.8477 15.0274C21.8477 15.2139 21.7736 15.3927 21.6418 15.5246C21.5099 15.6564 21.3311 15.7305 21.1446 15.7305H16.2227V20.6524C16.2227 20.8389 16.1486 21.0177 16.0168 21.1496C15.8849 21.2814 15.7061 21.3555 15.5196 21.3555C15.3331 21.3555 15.1543 21.2814 15.0224 21.1496C14.8905 21.0177 14.8165 20.8389 14.8165 20.6524V15.7305H9.89458C9.7081 15.7305 9.52926 15.6564 9.3974 15.5246C9.26554 15.3927 9.19146 15.2139 9.19146 15.0274C9.19146 14.8409 9.26554 14.6621 9.3974 14.5302C9.52926 14.3984 9.7081 14.3243 9.89458 14.3243H14.8165V9.4024C14.8165 9.21592 14.8905 9.03707 15.0224 8.90521C15.1543 8.77335 15.3331 8.69927 15.5196 8.69927C15.7061 8.69927 15.8849 8.77335 16.0168 8.90521C16.1486 9.03707 16.2227 9.21592 16.2227 9.4024V14.3243H21.1446C21.3311 14.3243 21.5099 14.3984 21.6418 14.5302C21.7736 14.6621 21.8477 14.8409 21.8477 15.0274ZM35.7045 35.2124C35.6392 35.2777 35.5617 35.3296 35.4763 35.365C35.391 35.4004 35.2995 35.4186 35.2071 35.4186C35.1147 35.4186 35.0232 35.4004 34.9378 35.365C34.8525 35.3296 34.7749 35.2777 34.7096 35.2124L25.446 25.9487C22.5899 28.545 18.8316 29.9213 14.9742 29.7835C11.1169 29.6458 7.46638 28.0048 4.80281 25.2113C2.13924 22.4178 0.673861 18.6934 0.719798 14.8338C0.765736 10.9743 2.31935 7.28577 5.04865 4.55646C7.77795 1.82716 11.4665 0.273548 15.326 0.227611C19.1856 0.181673 22.91 1.64706 25.7035 4.31062C28.497 6.97419 30.1379 10.6247 30.2757 14.482C30.4135 18.3394 29.0372 22.0977 26.4409 24.9538L35.7045 34.2174C35.7699 34.2827 35.8218 34.3603 35.8572 34.4456C35.8926 34.531 35.9108 34.6225 35.9108 34.7149C35.9108 34.8073 35.8926 34.8988 35.8572 34.9842C35.8218 35.0695 35.7699 35.1471 35.7045 35.2124ZM15.5196 28.3868C18.1618 28.3868 20.7447 27.6033 22.9417 26.1353C25.1386 24.6674 26.8509 22.5809 27.862 20.1398C28.8732 17.6987 29.1377 15.0126 28.6223 12.4211C28.1068 9.82965 26.8344 7.44924 24.9661 5.58089C23.0977 3.71255 20.7173 2.44019 18.1259 1.92472C15.5344 1.40925 12.8483 1.67381 10.4072 2.68495C7.96607 3.69608 5.87962 5.40839 4.41167 7.60533C2.94372 9.80226 2.16021 12.3852 2.16021 15.0274C2.16393 18.5694 3.57263 21.9652 6.07719 24.4698C8.58175 26.9744 11.9776 28.383 15.5196 28.3868Z" fill="#402E32"/>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M21.8477 15.0274C21.8477 15.2139 21.7736 15.3927 21.6418 15.5246C21.5099 15.6564 21.3311 15.7305 21.1446 15.7305H16.2227V20.6524C16.2227 20.8389 16.1486 21.0177 16.0168 21.1496C15.8849 21.2814 15.7061 21.3555 15.5196 21.3555C15.3331 21.3555 15.1543 21.2814 15.0224 21.1496C14.8905 21.0177 14.8165 20.8389 14.8165 20.6524V15.7305H9.89458C9.7081 15.7305 9.52926 15.6564 9.3974 15.5246C9.26554 15.3927 9.19146 15.2139 9.19146 15.0274C9.19146 14.8409 9.26554 14.6621 9.3974 14.5302C9.52926 14.3984 9.7081 14.3243 9.89458 14.3243H14.8165V9.4024C14.8165 9.21592 14.8905 9.03707 15.0224 8.90521C15.1543 8.77335 15.3331 8.69927 15.5196 8.69927C15.7061 8.69927 15.8849 8.77335 16.0168 8.90521C16.1486 9.03707 16.2227 9.21592 16.2227 9.4024V14.3243H21.1446C21.3311 14.3243 21.5099 14.3984 21.6418 14.5302C21.7736 14.6621 21.8477 14.8409 21.8477 15.0274ZM35.7045 35.2124C35.6392 35.2777 35.5617 35.3296 35.4763 35.365C35.391 35.4004 35.2995 35.4186 35.2071 35.4186C35.1147 35.4186 35.0232 35.4004 34.9378 35.365C34.8525 35.3296 34.7749 35.2777 34.7096 35.2124L25.446 25.9487C22.5899 28.545 18.8316 29.9213 14.9742 29.7835C11.1169 29.6458 7.46638 28.0048 4.80281 25.2113C2.13924 22.4178 0.673861 18.6934 0.719798 14.8338C0.765736 10.9743 2.31935 7.28577 5.04865 4.55646C7.77795 1.82716 11.4665 0.273548 15.326 0.227611C19.1856 0.181673 22.91 1.64706 25.7035 4.31062C28.497 6.97419 30.1379 10.6247 30.2757 14.482C30.4135 18.3394 29.0372 22.0977 26.4409 24.9538L35.7045 34.2174C35.7699 34.2827 35.8218 34.3603 35.8572 34.4456C35.8926 34.531 35.9108 34.6225 35.9108 34.7149C35.9108 34.8073 35.8926 34.8988 35.8572 34.9842C35.8218 35.0695 35.7699 35.1471 35.7045 35.2124ZM15.5196 28.3868C18.1618 28.3868 20.7447 27.6033 22.9417 26.1353C25.1386 24.6674 26.8509 22.5809 27.862 20.1398C28.8732 17.6987 29.1377 15.0126 28.6223 12.4211C28.1068 9.82965 26.8344 7.44924 24.9661 5.58089C23.0977 3.71255 20.7173 2.44019 18.1259 1.92472C15.5344 1.40925 12.8483 1.67381 10.4072 2.68495C7.96607 3.69608 5.87962 5.40839 4.41167 7.60533C2.94372 9.80226 2.16021 12.3852 2.16021 15.0274C2.16393 18.5694 3.57263 21.9652 6.07719 24.4698C8.58175 26.9744 11.9776 28.383 15.5196 28.3868Z" fill="#402E32"/>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M21.8477 15.0274C21.8477 15.2139 21.7736 15.3927 21.6418 15.5246C21.5099 15.6564 21.3311 15.7305 21.1446 15.7305H16.2227V20.6524C16.2227 20.8389 16.1486 21.0177 16.0168 21.1496C15.8849 21.2814 15.7061 21.3555 15.5196 21.3555C15.3331 21.3555 15.1543 21.2814 15.0224 21.1496C14.8905 21.0177 14.8165 20.8389 14.8165 20.6524V15.7305H9.89458C9.7081 15.7305 9.52926 15.6564 9.3974 15.5246C9.26554 15.3927 9.19146 15.2139 9.19146 15.0274C9.19146 14.8409 9.26554 14.6621 9.3974 14.5302C9.52926 14.3984 9.7081 14.3243 9.89458 14.3243H14.8165V9.4024C14.8165 9.21592 14.8905 9.03707 15.0224 8.90521C15.1543 8.77335 15.3331 8.69927 15.5196 8.69927C15.7061 8.69927 15.8849 8.77335 16.0168 8.90521C16.1486 9.03707 16.2227 9.21592 16.2227 9.4024V14.3243H21.1446C21.3311 14.3243 21.5099 14.3984 21.6418 14.5302C21.7736 14.6621 21.8477 14.8409 21.8477 15.0274ZM35.7045 35.2124C35.6392 35.2777 35.5617 35.3296 35.4763 35.365C35.391 35.4004 35.2995 35.4186 35.2071 35.4186C35.1147 35.4186 35.0232 35.4004 34.9378 35.365C34.8525 35.3296 34.7749 35.2777 34.7096 35.2124L25.446 25.9487C22.5899 28.545 18.8316 29.9213 14.9742 29.7835C11.1169 29.6458 7.46638 28.0048 4.80281 25.2113C2.13924 22.4178 0.673861 18.6934 0.719798 14.8338C0.765736 10.9743 2.31935 7.28577 5.04865 4.55646C7.77795 1.82716 11.4665 0.273548 15.326 0.227611C19.1856 0.181673 22.91 1.64706 25.7035 4.31062C28.497 6.97419 30.1379 10.6247 30.2757 14.482C30.4135 18.3394 29.0372 22.0977 26.4409 24.9538L35.7045 34.2174C35.7699 34.2827 35.8218 34.3603 35.8572 34.4456C35.8926 34.531 35.9108 34.6225 35.9108 34.7149C35.9108 34.8073 35.8926 34.8988 35.8572 34.9842C35.8218 35.0695 35.7699 35.1471 35.7045 35.2124ZM15.5196 28.3868C18.1618 28.3868 20.7447 27.6033 22.9417 26.1353C25.1386 24.6674 26.8509 22.5809 27.862 20.1398C28.8732 17.6987 29.1377 15.0126 28.6223 12.4211C28.1068 9.82965 26.8344 7.44924 24.9661 5.58089C23.0977 3.71255 20.7173 2.44019 18.1259 1.92472C15.5344 1.40925 12.8483 1.67381 10.4072 2.68495C7.96607 3.69608 5.87962 5.40839 4.41167 7.60533C2.94372 9.80226 2.16021 12.3852 2.16021 15.0274C2.16393 18.5694 3.57263 21.9652 6.07719 24.4698C8.58175 26.9744 11.9776 28.383 15.5196 28.3868Z" fill="#402E32"/>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M21.8477 15.0274C21.8477 15.2139 21.7736 15.3927 21.6418 15.5246C21.5099 15.6564 21.3311 15.7305 21.1446 15.7305H16.2227V20.6524C16.2227 20.8389 16.1486 21.0177 16.0168 21.1496C15.8849 21.2814 15.7061 21.3555 15.5196 21.3555C15.3331 21.3555 15.1543 21.2814 15.0224 21.1496C14.8905 21.0177 14.8165 20.8389 14.8165 20.6524V15.7305H9.89458C9.7081 15.7305 9.52926 15.6564 9.3974 15.5246C9.26554 15.3927 9.19146 15.2139 9.19146 15.0274C9.19146 14.8409 9.26554 14.6621 9.3974 14.5302C9.52926 14.3984 9.7081 14.3243 9.89458 14.3243H14.8165V9.4024C14.8165 9.21592 14.8905 9.03707 15.0224 8.90521C15.1543 8.77335 15.3331 8.69927 15.5196 8.69927C15.7061 8.69927 15.8849 8.77335 16.0168 8.90521C16.1486 9.03707 16.2227 9.21592 16.2227 9.4024V14.3243H21.1446C21.3311 14.3243 21.5099 14.3984 21.6418 14.5302C21.7736 14.6621 21.8477 14.8409 21.8477 15.0274ZM35.7045 35.2124C35.6392 35.2777 35.5617 35.3296 35.4763 35.365C35.391 35.4004 35.2995 35.4186 35.2071 35.4186C35.1147 35.4186 35.0232 35.4004 34.9378 35.365C34.8525 35.3296 34.7749 35.2777 34.7096 35.2124L25.446 25.9487C22.5899 28.545 18.8316 29.9213 14.9742 29.7835C11.1169 29.6458 7.46638 28.0048 4.80281 25.2113C2.13924 22.4178 0.673861 18.6934 0.719798 14.8338C0.765736 10.9743 2.31935 7.28577 5.04865 4.55646C7.77795 1.82716 11.4665 0.273548 15.326 0.227611C19.1856 0.181673 22.91 1.64706 25.7035 4.31062C28.497 6.97419 30.1379 10.6247 30.2757 14.482C30.4135 18.3394 29.0372 22.0977 26.4409 24.9538L35.7045 34.2174C35.7699 34.2827 35.8218 34.3603 35.8572 34.4456C35.8926 34.531 35.9108 34.6225 35.9108 34.7149C35.9108 34.8073 35.8926 34.8988 35.8572 34.9842C35.8218 35.0695 35.7699 35.1471 35.7045 35.2124ZM15.5196 28.3868C18.1618 28.3868 20.7447 27.6033 22.9417 26.1353C25.1386 24.6674 26.8509 22.5809 27.862 20.1398C28.8732 17.6987 29.1377 15.0126 28.6223 12.4211C28.1068 9.82965 26.8344 7.44924 24.9661 5.58089C23.0977 3.71255 20.7173 2.44019 18.1259 1.92472C15.5344 1.40925 12.8483 1.67381 10.4072 2.68495C7.96607 3.69608 5.87962 5.40839 4.41167 7.60533C2.94372 9.80226 2.16021 12.3852 2.16021 15.0274C2.16393 18.5694 3.57263 21.9652 6.07719 24.4698C8.58175 26.9744 11.9776 28.383 15.5196 28.3868Z" fill="#402E32"/>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M21.8477 15.0274C21.8477 15.2139 21.7736 15.3927 21.6418 15.5246C21.5099 15.6564 21.3311 15.7305 21.1446 15.7305H16.2227V20.6524C16.2227 20.8389 16.1486 21.0177 16.0168 21.1496C15.8849 21.2814 15.7061 21.3555 15.5196 21.3555C15.3331 21.3555 15.1543 21.2814 15.0224 21.1496C14.8905 21.0177 14.8165 20.8389 14.8165 20.6524V15.7305H9.89458C9.7081 15.7305 9.52926 15.6564 9.3974 15.5246C9.26554 15.3927 9.19146 15.2139 9.19146 15.0274C9.19146 14.8409 9.26554 14.6621 9.3974 14.5302C9.52926 14.3984 9.7081 14.3243 9.89458 14.3243H14.8165V9.4024C14.8165 9.21592 14.8905 9.03707 15.0224 8.90521C15.1543 8.77335 15.3331 8.69927 15.5196 8.69927C15.7061 8.69927 15.8849 8.77335 16.0168 8.90521C16.1486 9.03707 16.2227 9.21592 16.2227 9.4024V14.3243H21.1446C21.3311 14.3243 21.5099 14.3984 21.6418 14.5302C21.7736 14.6621 21.8477 14.8409 21.8477 15.0274ZM35.7045 35.2124C35.6392 35.2777 35.5617 35.3296 35.4763 35.365C35.391 35.4004 35.2995 35.4186 35.2071 35.4186C35.1147 35.4186 35.0232 35.4004 34.9378 35.365C34.8525 35.3296 34.7749 35.2777 34.7096 35.2124L25.446 25.9487C22.5899 28.545 18.8316 29.9213 14.9742 29.7835C11.1169 29.6458 7.46638 28.0048 4.80281 25.2113C2.13924 22.4178 0.673861 18.6934 0.719798 14.8338C0.765736 10.9743 2.31935 7.28577 5.04865 4.55646C7.77795 1.82716 11.4665 0.273548 15.326 0.227611C19.1856 0.181673 22.91 1.64706 25.7035 4.31062C28.497 6.97419 30.1379 10.6247 30.2757 14.482C30.4135 18.3394 29.0372 22.0977 26.4409 24.9538L35.7045 34.2174C35.7699 34.2827 35.8218 34.3603 35.8572 34.4456C35.8926 34.531 35.9108 34.6225 35.9108 34.7149C35.9108 34.8073 35.8926 34.8988 35.8572 34.9842C35.8218 35.0695 35.7699 35.1471 35.7045 35.2124ZM15.5196 28.3868C18.1618 28.3868 20.7447 27.6033 22.9417 26.1353C25.1386 24.6674 26.8509 22.5809 27.862 20.1398C28.8732 17.6987 29.1377 15.0126 28.6223 12.4211C28.1068 9.82965 26.8344 7.44924 24.9661 5.58089C23.0977 3.71255 20.7173 2.44019 18.1259 1.92472C15.5344 1.40925 12.8483 1.67381 10.4072 2.68495C7.96607 3.69608 5.87962 5.40839 4.41167 7.60533C2.94372 9.80226 2.16021 12.3852 2.16021 15.0274C2.16393 18.5694 3.57263 21.9652 6.07719 24.4698C8.58175 26.9744 11.9776 28.383 15.5196 28.3868Z" fill="#402E32"/>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M21.8477 15.0274C21.8477 15.2139 21.7736 15.3927 21.6418 15.5246C21.5099 15.6564 21.3311 15.7305 21.1446 15.7305H16.2227V20.6524C16.2227 20.8389 16.1486 21.0177 16.0168 21.1496C15.8849 21.2814 15.7061 21.3555 15.5196 21.3555C15.3331 21.3555 15.1543 21.2814 15.0224 21.1496C14.8905 21.0177 14.8165 20.8389 14.8165 20.6524V15.7305H9.89458C9.7081 15.7305 9.52926 15.6564 9.3974 15.5246C9.26554 15.3927 9.19146 15.2139 9.19146 15.0274C9.19146 14.8409 9.26554 14.6621 9.3974 14.5302C9.52926 14.3984 9.7081 14.3243 9.89458 14.3243H14.8165V9.4024C14.8165 9.21592 14.8905 9.03707 15.0224 8.90521C15.1543 8.77335 15.3331 8.69927 15.5196 8.69927C15.7061 8.69927 15.8849 8.77335 16.0168 8.90521C16.1486 9.03707 16.2227 9.21592 16.2227 9.4024V14.3243H21.1446C21.3311 14.3243 21.5099 14.3984 21.6418 14.5302C21.7736 14.6621 21.8477 14.8409 21.8477 15.0274ZM35.7045 35.2124C35.6392 35.2777 35.5617 35.3296 35.4763 35.365C35.391 35.4004 35.2995 35.4186 35.2071 35.4186C35.1147 35.4186 35.0232 35.4004 34.9378 35.365C34.8525 35.3296 34.7749 35.2777 34.7096 35.2124L25.446 25.9487C22.5899 28.545 18.8316 29.9213 14.9742 29.7835C11.1169 29.6458 7.46638 28.0048 4.80281 25.2113C2.13924 22.4178 0.673861 18.6934 0.719798 14.8338C0.765736 10.9743 2.31935 7.28577 5.04865 4.55646C7.77795 1.82716 11.4665 0.273548 15.326 0.227611C19.1856 0.181673 22.91 1.64706 25.7035 4.31062C28.497 6.97419 30.1379 10.6247 30.2757 14.482C30.4135 18.3394 29.0372 22.0977 26.4409 24.9538L35.7045 34.2174C35.7699 34.2827 35.8218 34.3603 35.8572 34.4456C35.8926 34.531 35.9108 34.6225 35.9108 34.7149C35.9108 34.8073 35.8926 34.8988 35.8572 34.9842C35.8218 35.0695 35.7699 35.1471 35.7045 35.2124ZM15.5196 28.3868C18.1618 28.3868 20.7447 27.6033 22.9417 26.1353C25.1386 24.6674 26.8509 22.5809 27.862 20.1398C28.8732 17.6987 29.1377 15.0126 28.6223 12.4211C28.1068 9.82965 26.8344 7.44924 24.9661 5.58089C23.0977 3.71255 20.7173 2.44019 18.1259 1.92472C15.5344 1.40925 12.8483 1.67381 10.4072 2.68495C7.96607 3.69608 5.87962 5.40839 4.41167 7.60533C2.94372 9.80226 2.16021 12.3852 2.16021 15.0274C2.16393 18.5694 3.57263 21.9652 6.07719 24.4698C8.58175 26.9744 11.9776 28.383 15.5196 28.3868Z" fill="#402E32"/>
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
          <a href="" class="before-after__btn-sp more-btn more-btn--only-sp">
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
