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


  </main>

<?php get_footer(); ?>
