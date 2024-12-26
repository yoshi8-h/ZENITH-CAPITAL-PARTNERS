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

    <!-- solution-policy セクション -->
    <section class="solution-policy l-solution-policy">
      <div class="solution-policy__inner inner">
        <div class="solution-policy__title title02">当社の不動産運用方針</div>
        <p class="solution-policy__message">
          「ゼニス・キャピタル・パートナーズ株式会社」は、不動産投資理論と実践に基づく経験、<br
          >そして人と人の繋がりを大切にして、不動産価値の持続的な成長を実現するソリューションをご提供します。
        </p>
        <div class="solution-policy__contents">
          <div class="solution-policy__content content3">
            <div class="content3__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content3-img-01.webp" alt=""></div>
            <div class="content3__contents">
              <div class="content3__title">
                <div class="content3__title-number">01.</div>
                <div class="content3__title-text is-01">理論と実践に基づいたソリューションを提供します。</div>
              </div>
              <ul class="content3__list">
                <li class="content3__list-item list-item">不動産鑑定士業をバックグラウンドに持つ当社は、理論的な根拠と実証的なデータを駆使して不動産の価値最大化を目指します。</li>
                <li class="content3__list-item list-item">机上の空論ではなく、数多くのコンサルティングや投資実績から得られた豊富な経験を基に実践的なアプローチを採用します。</li>
                <li class="content3__list-item list-item">理論と実践の積み重ねから得られた治験により、不動産の問題に関する多角的かつ実現可能なソリューションを提供します。</li>
              </ul>
            </div>
          </div>
          <div class="solution-policy__content content3">
            <div class="content3__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content3-img-02.webp" alt=""></div>
            <div class="content3__contents">
              <div class="content3__title">
                <div class="content3__title-number">02.</div>
                <div class="content3__title-text is-02">信頼関係を大切にします。</div>
              </div>
              <ul class="content3__list">
                <li class="content3__list-item list-item">地主、投資家、金融機関とは、成功事例を積み重ねることで信頼関係を構築します。</li>
                <li class="content3__list-item list-item">プロパティーマネージメント会社、ホテル運営会社、ビルマネジメント会社とは、チームワークを大切にすることで信頼関係を構築します。</li>
                <li class="content3__list-item list-item">不動産をご利用されるユーザー様とは、快適な環境を提供することで信頼関係を構築します</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main>

<?php get_footer(); ?>
