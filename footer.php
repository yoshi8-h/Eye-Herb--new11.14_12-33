  <!-- footer -->
  <footer class="footer l-footer">
    <div class="footer__inner inner">
      <div class="footer__wrap">
        <div class="footer__top">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__title title01 title01--footer">
            <p class="title01__text">代官山に佇む癒しのプライベートサロン</p>
            <picture class="title01__picture">
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/title01-img-pc.webp">
              <img class="title01__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/title01-img-sp.webp" alt="Eye Herb">
            </picture>
          </a>
          <div class="footer__info info info--footer">
            <p class="info__title">Eye Herb Beauty Salon</p>
            <address class="info__address">東京都渋谷区代官山町2-5 コレタス代官山4F</address>
            <div class="info__tel">【TEL】03-6416-4229 (12:00 - 19:00)</div>
          </div>
          <div class="footer__sns-sp sns-wrap sns-wrap--footer-sp">
            <a href="" target="_blank" class="sns-wrap__insta"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-icon.webp" alt="instagram"></a>
            <a href="" target="_blank" class="sns-wrap__line"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/line-icon.webp" alt="LINE"></a>
          </div>
        </div>
        <div class="footer__nav nav nav--footer">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__item">TOP</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="nav__item">About Eye Herb</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="nav__item">Menu</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('before-after'))); ?>" class="nav__item">Before/After</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit'))); ?>" class="nav__item">Recruit</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="nav__item">Contact</a>
        </div>
        <div class="footer__bottom">
          <div class="footer__bottom-left">
            <p class="footer__bottom-text">
              このサイトはreCAPTHAによって保護されており、<br
              ><a href="" target="_blank" class="footer__google-policy">Googleのプライバシーポリシー</a>と<br class="u-mobile"
              ><a href="" target="_blank" class="footer__terms">利用規約</a>が適応されます。
            </p>
            <small class="footer__copyright">Copyright © 2024 Eye Herb Beauty Salon</small>
          </div>
          <div class="footer__bottom-right">
            <div class="footer__sns-pc sns-wrap sns-wrap--footer-pc">
              <a href="" class="sns-wrap__insta"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-icon.webp" alt="instagram"></a>
              <a href="" class="sns-wrap__line"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/line-icon.webp" alt="LINE"></a>
            </div>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('policy'))); ?>" class="footer__policy">個人情報保護方針</a>
          </div>
        </div>
      </div>
    </div>
    <!-- TOPへ戻るボタン -->
    <a href="#" id="js-top-btn" class="footer__top-btn top-btn">
      <div class="top-btn__arrow">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-btn_arrow.webp" alt="↑">
      </div>
      <div class="top-btn__text">PAGE TOP</div>
    </a>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
