<?php get_header(); ?>

  <main class="main">
    <!-- fv -->
    <div class="fv">
      <div class="fv__inner">
        <video class="fv__video u-desktop" poster="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-video-alternative-img.webp" webkit-playsinline playsinline muted autoplay>
            <!--
                poster：動画ファイルが利用できない環境で代替表示される画像
                webkit-playsinline：iOS 9までのSafari用インライン再生指定
                playsinline：iOS 10以降のSafari用インライン再生指定
                muted：音声をミュートさせる
                autoplay：動画を自動再生させる
                loop：動画をループさせる
                controls：コントロールバーを表示する
            -->
          <source src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-video.mp4" type="video/mp4">
          <p class="fv__video-alternative-text">動画を再生できるブラウザ環境ではありません。</p>
        </video>
        <video class="fv__video-sp u-mobile" poster="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-video-alternative-img.webp" webkit-playsinline playsinline muted autoplay>
            <!--
                poster：動画ファイルが利用できない環境で代替表示される画像
                webkit-playsinline：iOS 9までのSafari用インライン再生指定
                playsinline：iOS 10以降のSafari用インライン再生指定
                muted：音声をミュートさせる
                autoplay：動画を自動再生させる
                loop：動画をループさせる
                controls：コントロールバーを表示する
            -->
          <source src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-video-sp.mp4" type="video/mp4">
          <p class="fv__video-alternative-text">動画を再生できるブラウザ環境ではありません。</p>
        </video>
        <p class="fv__text">
          人と人の繋がりを大切にして、<br
          >不動産価値の持続的な成長を<br class="u-mobile">実現するソリューションをご提供します。
          <div class="fv__text-bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_text-bg.webp" alt=""></div>
        </p>
      </div>
    </div>

    <!-- top-text セクション -->
    <section class="top-text l-top-text js-fadeInDown">
      <div class="top-text__bg u-desktop"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-text-bg-arrow.webp" alt=""></div>
      <div class="top-text__bg-sp u-mobile"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-text-bg-arrow-sp.webp" alt=""></div>
      <div class="top-text__inner inner">
        <h2 class="top-text__title">人と不動産の「うつくしい」関係を具現化する「不動産ソリューションカンパニー」</h2>
        <p class="top-text__text">
          「ゼニス・キャピタル・パートナーズ株式会社」は、不動産投資理論と実践に基づく経験、そして人と人の繋がりを大切にして、不動産価値の持続的な成長を実現するソリューションをご提供いたします。
        </p>
      </div>
    </section>

    <!-- management-policy セクション -->
    <section class="management-policy l-management-policy">
      <div class="management-policy__inner inner">
        <h2 class="management-policy__title section-title js-fadeInUp">
          <div class="section-title__ja">当社の不動産運用方針</div>
          <div class="section-title__en">MANAGEMENT POLICY</div>
        </h2>
        <div class="management-policy__contents">
          <div class="management-policy__content">
            <div class="management-policy__content-title-sp u-mobile js-fadeInLeft">理論と実践に基づいたソリューションを提供します。</div>
            <div class="management-policy__content-img js-fadeInRight-fast"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-img01.webp" alt=""></div>
            <div class="management-policy__content-body js-fadeInLeft-delay">
              <div class="management-policy__content-title u-desktop">理論と実践に基づいたソリューションを提供します。</div>
              <p class="management-policy__content-text">不動産鑑定士業をバックグラウンドに持つ当社は、理論的な根拠と実証的なデータを駆使して不動産の価値最大化を目指します。</p>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>#solution-policy__content-01" class="management-policy__content-btn btn1">
                <span class="btn1__text">MORE</span>
                <span class="btn1__arrow">></span>
              </a>
              <div class="management-policy__content-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-icon01.webp" alt=""></div>
            </div>
          </div>
          <div class="management-policy__content">
            <div class="management-policy__content-title-sp u-mobile js-fadeInRight-delay">信頼関係を大切にします。</div>
            <div class="management-policy__content-img js-fadeInLeft-fast"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-img02.webp" alt=""></div>
            <div class="management-policy__content-body js-fadeInRight-delay">
              <div class="management-policy__content-title u-desktop">信頼関係を大切にします。</div>
              <p class="management-policy__content-text">地主・投資家・金融機関とは、成功事例を積み重ねることで信頼関係を、不動産をご利用されるユーザー様とは、快適な環境を提供することで信頼関係を構築します。</p>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>#solution-policy__content-01" class="management-policy__content-btn btn1">
                <span class="btn1__text">MORE</span>
                <span class="btn1__arrow">></span>
              </a>
              <div class="management-policy__content-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/management-policy__content-icon02.webp" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- solution セクション -->
    <section class="solution l-solution">
      <div class="solution__inner inner">
        <h2 class="solution__title section-title js-fadeInUp">
          <div class="section-title__ja">事業案内</div>
          <div class="section-title__en">SOLUTION</div>
        </h2>
        <p class="solution__text js-fadeInUp">当社の事業内容をご確認いただけます。</p>
        <div class="solution__contents js-cards-fadeInUp-trigger">
          <div class="solution__contents-item content js-card-fadeInUp">
            <button type="button" class="content__button">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content01.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">不動産の投資分析から、仕入れ、資金調達のアレンジ、資産価値最大化を実現する運営管理、出口戦略（売却）の立案まで、投資家や利益最大化のための一貫したサービスを提供します。</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('business-details'))); ?>?category=category1" class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </a>
              </div>
            </button>
            <div class="content__title">アセットマネジメント</div>
          </div>
          <div class="solution__contents-item content js-card-fadeInUp">
            <button type="button" class="content__button">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content02.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">事業承継に伴う事業用不動産の取り扱い、不動産の有効活用、複雑な権利関係の調整等不動産に関するお悩みの解決をサポートします。</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('business-details'))); ?>?category=category2" class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </a>
              </div>
            </button>
            <div class="content__title">不動産コンサルティング</div>
          </div>
          <div class="solution__contents-item content js-card-fadeInUp">
            <button type="button" class="content__button">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content03.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">
                  様々な問題を抱え、本来の価値が発揮されず有効活用されていない不動産に自己勘定で投資する事業です。<br
                  >問題を解決し、収益力を高めることで安定的な運用を目指します。
                </p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('business-details'))); ?>?category=category3" class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </a>
              </div>
            </button>
            <div class="content__title">自己投資</div>
          </div>
          <div class="solution__contents-item content js-card-fadeInUp">
            <button type="button" class="content__button">
              <div class="content__bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/solution-content04.webp" alt=""></div>
              <div class="content__plus-icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/content-plus-icon.webp" alt="+"></div>
              <div class="content__overlay">
                <p class="content__overlay-text">不動産の有効活用、リーシング戦略の一環として、オーナーから不動産を借上げ、自らテナントとして事業運営し不動産の価値最大化を目指します。</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('business-details'))); ?>?category=category4" class="content__overlay-btn">
                  <span class="content__overlay-btn-text">MORE</span>
                  <span class="content__overlay-btn-arrow">></span>
                </a>
              </div>
            </button>
            <div class="content__title">テナント事業</div>
          </div>
        </div>
        <div class="solution__btn-wrap js-fadeInUp">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('business'))); ?>" class="solution__btn btn2">
            <div class="btn2__text">事業案内</div>
            <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
          </a>
        </div>
      </div>
    </section>

    <!-- project セクション -->
    <section class="project l-project">
      <div class="project__inner inner">
        <h2 class="project__title section-title js-fadeInUp">
          <div class="section-title__ja">実績紹介</div>
          <div class="section-title__en">PROJECT</div>
        </h2>
        <p class="project__text js-fadeInUp">これまでの当社の実績をご覧いただけます。</p>

        <?php
        // カスタムタクソノミー『works_toppage』のターム『pick-up』を選んでいる投稿のみ、TOPページに最大6記事表示。
        $args = [
            'post_type'      => 'works', // カスタム投稿タイプ
            'posts_per_page' => 6,       // 最大6件
            'tax_query'      => [
                [
                    'taxonomy' => 'works_toppage', // カスタムタクソノミー
                    'field'    => 'slug',          // タームスラッグで指定
                    'terms'    => 'pick-up',       // 表示するターム
                ],
            ],
        ];
        $query = new WP_Query($args);

        // 文字数制限関数
        function trim_text($text, $limit_pc, $limit_sp) {
          $limit = wp_is_mobile() ? $limit_sp : $limit_pc; // PCとSPで切り替え
          if (mb_strlen($text, 'UTF-8') > $limit) {
            return mb_substr($text, 0, $limit, 'UTF-8') . '...';
          }
          return $text;
        }

        if ($query->have_posts()) : ?>
          <div class="project__contents">
            <?php while ($query->have_posts()) : $query->the_post();
              // ACFカスタムフィールド値の取得
              $works_table_1 = get_field('works-table_1'); // 所在・種別
              $works_table_3 = get_field('works-table_3'); // 業務内容（提案内容）

              // トリミング処理
              $trimmed_table_1 = $works_table_1 ? trim_text($works_table_1, 15, 11) : null;
              $trimmed_table_3 = $works_table_3 ? trim_text($works_table_3, 31, 31) : null;
            ?>
            <button type="button" class="project__contents-item content2 js-fadeInUp">
              <div class="content2__bg">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimg.png" alt="no-image">
                <?php endif; ?>
              </div>
              <div class="content2__overlay">
                <div class="content2__overlay-bg"></div>
                <!-- 所在・種別 -->
                <?php if ($trimmed_table_1): ?>
                  <div class="content2__overlay-category"><?php echo $trimmed_table_1; ?></div>
                <?php endif; ?>
                <!-- 業務内容（提案内容） -->
                <?php if ($trimmed_table_3): ?>
                  <p class="content2__overlay-text"><?php echo $trimmed_table_3; ?></p>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>" class="content2__overlay-btn">
                  <span class="content2__overlay-btn-text">MORE</span>
                  <span class="content2__overlay-btn-arrow">></span>
                </a>
              </div>
            </button>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
          <p class="project__contents-no-post">現在、表示する実績がありません。</p>
        <?php endif;
          wp_reset_postdata(); // クエリをリセット
        ?>
        <div class="project__btn-wrap js-fadeInUp">
          <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="project__btn btn2">
            <div class="btn2__text">実績一覧</div>
            <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
          </a>
        </div>
      </div>
    </section>

    <!-- message セクション -->
    <section class="message l-message">
      <div class="message__inner inner">
        <h2 class="message__title section-title js-fadeInUp">
          <div class="section-title__ja">トップメッセージ</div>
          <div class="section-title__en">TOP MESSAGE</div>
        </h2>
        <div class="message__contents">
          <div class="message__img-area js-fadeInUp">
            <div class="message__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/front-page-message-president.webp" alt="平田社長の写真"></div>
            <div class="message__name">代表取締役社長　平田徹也</div>
          </div>
          <div class="message__text-area js-fadeInUp">
            <div class="message__text-title">不動産ソリューションのプロフェッショナルとして、人と不動産のうつくしい関係を追及し続ける。</div>
            <p class="message__text">
              私が生まれ育った田舎では、どこにいても山や森の濃い土や草木の匂いがしていた記憶があります。<br
              >当時の実家のまわりには高い建物も少なく、たくさんの自然に囲まれてシンプルだけど豊かな暮らしを気に入っていました。<br
              >一方で、故郷を離れて上京してからはコンクリートやアスファルトに囲まれた生活が当たり前になり、最初の頃は合理性や機能性ばかりが優先された場所に窮屈さや戸惑いを感じていました。
            </p>
            <div class="message__btn-wrap js-fadeInUp">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('company'))); ?>#top-message" class="message__btn btn2">
                <div class="btn2__text">トップメッセージ</div>
                <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- news セクション -->
    <section class="news l-news">
      <div class="news__inner inner">
        <h2 class="news__title section-title js-fadeInUp">
          <div class="section-title__ja">ニュース・トピックス</div>
          <div class="section-title__en">NEWS / TOPICS</div>
        </h2>
        <div class="news__posts posts">
          <?php
          // 最新の投稿3件を取得するクエリ
          $args = array(
            'post_type'      => 'post',      // 投稿タイプ
            'posts_per_page' => 3,           // 表示する投稿数
            'orderby'        => 'date',      // 並び順
            'order'          => 'DESC',      // 降順
          );
          $latest_posts = new WP_Query($args);

          if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) :
              $latest_posts->the_post();
              // カテゴリの処理
              $categories = get_the_category();
              $category_class = '';
              $category_name = '';
              if (!empty($categories)) {
                $first_category = $categories[0];
                switch ($first_category->slug) {
                  case 'notice':
                    $category_class = 'is-notice';
                    $category_name = 'お知らせ';
                    break;
                  case 'topics':
                    $category_class = 'is-topics';
                    $category_name = 'トピックス';
                    break;
                  case 'other':
                    $category_class = 'is-other';
                    $category_name = 'その他';
                    break;
                  default:
                    $category_name = esc_html($first_category->name);
                    break;
                }
              } else {
                $category_name = 'カテゴリなし';
              }
          ?>
          <div class="posts__item post js-fadeInUp">
            <div class="post__meta">
              <div class="post__category <?php echo esc_attr($category_class); ?>">
                <?php echo esc_html($category_name); ?>
              </div>
              <time class="post__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <a href="<?php the_permalink(); ?>" class="post__link-text">
              <?php the_title(); ?>
            </a>
          </div>
          <?php
            endwhile;
          else :
          ?>
            <!-- 投稿がない場合の表示 -->
            <p class="posts__no-posts">現在、最新の投稿がありません。</p>
          <?php
          endif;
          wp_reset_postdata(); // クエリをリセット
          ?>
        </div>
        <div class="news__btn-wrap js-fadeInUp">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>" class="news__btn btn2">
            <div class="btn2__text">ニュース一覧</div>
            <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
          </a>
        </div>
      </div>
    </section>

    <!-- contact セクション -->
    <section class="contact l-contact">
      <div class="contact__inner inner">
        <h2 class="contact__title section-title js-fadeInUp">
          <div class="section-title__ja">お問い合わせ</div>
          <div class="section-title__en">CONTACT</div>
        </h2>
        <p class="contact__text js-fadeInUp">当社へのお問い合わせ・ご質問は、<br class="u-mobile">お問い合わせフォームよりお気軽にお問い合わせください。</p>
        <div class="contact__btn-wrap js-fadeInUpFirst">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="contact__btn btn3">お問い合わせフォーム</a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
