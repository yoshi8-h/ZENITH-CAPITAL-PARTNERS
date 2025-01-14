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

    <!-- アンカーリンク群 -->
    <div class="anchors l-anchors">
      <div class="anchors__inner inner">
        <div class="anchors__wrap js-fadeInUp">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>#top-message" class="anchors__item">トップメッセージ</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>#philosophy" class="anchors__item">企業理念</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>#overview" class="anchors__item">会社概要</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('company-member'))); ?>" class="anchors__item">主要メンバー紹介</a>
        </div>
      </div>
    </div>

    <!-- member セクション (主要メンバー紹介) -->
    <section class="member l-member">
      <div class="member__inner inner">
        <div class="member__title title02 js-fadeInUp">主要メンバー紹介</div>
        <div class="member__contents">

          <!-- 管理画面内の内容を表示 -->
          <?php the_content(); ?>

        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
