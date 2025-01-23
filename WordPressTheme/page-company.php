<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-company.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-company-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">会社案内</div>
            <div class="title__en">COMPANY</div>
          </h2>
          <p class="sub-fv__text">当社の会社情報をご覧いただけます。</p>
        </div>
      </div>
    </div>

    <!-- 管理画面の『コードエディター』の内容を出力 -->
    <?php the_content(); ?>

  </main>

<?php get_footer(); ?>
