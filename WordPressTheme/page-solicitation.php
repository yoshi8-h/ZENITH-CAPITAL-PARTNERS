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
            <div class="title__ja">勧誘方針</div>
          </h2>
        </div>
      </div>
    </div>

    <!-- solicitation セクション (勧誘方針) -->
    <section class="solicitation l-solicitation">
      <div class="solicitation__inner inner">
        <div class="solicitation__wrap">
          <p class="solicitation__first-text js-fadeInUp"> 当社は、以下の方針に基づき、金融商品の適正な勧誘を行います。</p>
          <ol class="solicitation__list list2">
            <li class="list2__item js-fadeInUp">1.　お客様の知識、経験、財産の状況及び契約の目的を配慮した適切な勧誘を行うとともに、お客様に適切な投資判断を行っていただくために、商品・契約内容など重要な事項について十分な説明を行うことに努めます。</li>
            <li class="list2__item js-fadeInUp">2.　お客様の不都合な時間帯や場所、方法での勧誘は行いません。</li>
            <li class="list2__item js-fadeInUp">3.　適切な勧誘を行うために、社内体制の整備及び研修の充実に努めます。</li>
          </ol>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
