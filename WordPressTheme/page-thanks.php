<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-contact.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-contact-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja is-narrow">お問い合わせ</div>
            <div class="title__en">CONTACT</div>
          </h2>
          <p class="sub-fv__text">当社へのお問い合わせ・ご質問について、<br class="u-mobile">お気軽にお問い合わせください。</p>
        </div>
      </div>
    </div>

    <!-- contact-page セクション -->
    <section class="contact-page l-contact-page">
      <div class="contact-page__inner inner">
        <div class="contact-page__wrap">

          <!-- 送信完了画面 -->
          <div class="contact-page__thanks-area">
            <div class="contact-page__form-section-wrap">
              <div class="contact-page__form-title title05 js-fadeInUp">お問い合わせ完了</div>
              <div class="contact-page__form-wrap js-fadeInUp">
                <p class="contact-page__complete-text">
                  お問い合わせありがとうございました。<br
                  >お問い合わせ内容確認後、担当者からご連絡をさせて頂きます。
                </p>
                <div class="contact-page__complete-btn-wrap">
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="contact-page__complete-btn">トップ画面に戻る　＞</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
