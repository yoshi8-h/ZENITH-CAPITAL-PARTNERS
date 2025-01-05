<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-recruit.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-recruit-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">採用情報</div>
            <div class="title__en">RECRUIT</div>
          </h2>
          <p class="sub-fv__text">当社の採用情報をご確認いただけます。</p>
        </div>
      </div>
    </div>

    <!-- 管理画面のカスタムHTMLで出力 -->
    <?php the_content(); ?>

  </main>

<?php get_footer(); ?>
