<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv sub-fv--2">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-sub-page.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-sub-page-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents is-2row">
          <h2 class="sub-fv__title title title--2">
            <div class="title__ja is-narrow is-small">反社会的勢力との<br class="u-mobile">関係遮断のための基本方針</div>
          </h2>
        </div>
      </div>
    </div>

    <!-- antisocial セクション (反社会的勢力との関係遮断のための基本方針) -->
    <section class="antisocial l-antisocial">
      <div class="antisocial__inner inner">
        <div class="antisocial__wrap">
          <p class="antisocial__first-text js-fadeInUp"> 当社は、反社会的勢力に対する基本方針を以下のとおり策定し、公表いたします。</p>
          <ol class="antisocial__list list2">
            <li class="list2__item js-fadeInUp">1.　反社会的勢力への対応は、外部専門機関と連携しつつ、組織全体として行います。</li>
            <li class="list2__item js-fadeInUp">2.　反社会的勢力とは一切の関係を遮断します。</li>
            <li class="list2__item js-fadeInUp">3.　反社会的勢力に対して、裏取引及び資金提供は一切行いません。また、必要に応じて民事と刑事の両面から法的対応を行います。</li>
          </ol>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
