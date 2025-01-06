<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-project.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-project-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">実績紹介</div>
            <div class="title__en">PROJECT</div>
          </h2>
          <p class="sub-fv__text">これまでの当社の実績をご覧いただけます。</p>
        </div>
      </div>
    </div>

    <!-- works-page セクション (実績一覧) -->
    <section class="works-page l-works-page">
      <div class="works-page__inner inner">
      </div>
    </section>

  </main>

<?php get_footer(); ?>
