<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv sub-fv--2">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-sub-page.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-sub-page-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title title--2">
            <div class="title__ja is-narrow">個人情報保護方針</div>
          </h2>
        </div>
      </div>
    </div>

    <!-- privacy セクション (個人情報保護方針) -->
    <section class="privacy l-privacy">
      <div class="privacy__inner inner">
      </div>
    </section>

  </main>

<?php get_footer(); ?>
