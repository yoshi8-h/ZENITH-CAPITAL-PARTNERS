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
            <div class="title__ja is-narrow">苦情・紛争の解決について</div>
          </h2>
        </div>
      </div>
    </div>

    <!-- 管理画面の『コードエディター』の内容を出力 -->
    <?php the_content(); ?>

  </main>

<?php get_footer(); ?>
