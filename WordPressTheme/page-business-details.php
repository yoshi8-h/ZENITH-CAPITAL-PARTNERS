<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-solution.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-solution-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">事業案内</div>
            <div class="title__en">SOLUTION</div>
          </h2>
          <p class="sub-fv__text">当社の事業内容をご確認いただけます。</p>
        </div>
      </div>
    </div>

    <!-- タブ -->
    <div class="tabs l-tabs">
      <div class="tabs__item is-selected" data-category="category1">アセットマネジメント</div>
      <div class="tabs__item" data-category="category2">不動産コンサルティング</div>
      <div class="tabs__item" data-category="category3">自己投資</div>
      <div class="tabs__item" data-category="category4">テナント事業</div>
    </div>


  </main>

<?php get_footer(); ?>
