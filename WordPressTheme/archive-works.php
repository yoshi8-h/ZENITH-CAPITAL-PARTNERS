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
        <div class="works-page__posts posts2">

          <?php
          // 表示する投稿数をPCとSPで切り替え
          $post_limit = wp_is_mobile() ? 14 : 15;  // SPの場合は14件、PCの場合は15件表示

          // 現在のページ番号を取得（クエリパラメータ 'paged' の値を取得、未指定の場合は1）
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;

          // カスタムクエリを設定
          $args = array(
              'post_type'      => 'works', // カスタム投稿タイプ「works」の場合
              'posts_per_page' => $post_limit, // 投稿数を制限
              'paged'          => $paged,           // ページネーション対応
          );
          $query = new WP_Query($args);

          // 文字数制限関数
          function trim_text($text, $limit_pc, $limit_sp) {
            $limit = wp_is_mobile() ? $limit_sp : $limit_pc; // PC/SPで切り替え
            if (mb_strlen($text, 'UTF-8') > $limit) {
                return mb_substr($text, 0, $limit, 'UTF-8') . '...'; // 省略
            }
            return $text;
          }

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();

            // ACFカスタムフィールド値の取得
            $works_table_1 = get_field('works-table_1'); // 所在・種別
            $works_table_3 = get_field('works-table_3'); // 業務内容（提案内容）

            // トリミング処理
            $trimmed_table_1 = $works_table_1 ? trim_text($works_table_1, 15, 11) : null;
            $trimmed_table_3 = $works_table_3 ? trim_text($works_table_3, 31, 31) : null;
          ?>

              <div class="posts2__item post2 js-fadeInUp">
                <button type="button" class="post2__content content2">
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
                <?php
                  // 現在の投稿に紐づけられたタクソノミーの取得
                  $taxonomy = 'works_category'; // タクソノミーのスラッグ
                  $terms = get_the_terms(get_the_ID(), $taxonomy); // 現在の投稿に紐づけられたタームを取得

                  // タームが存在する場合のみ処理を進める
                  if ($terms && !is_wp_error($terms)) {
                      // タームを2つまで取得する
                      $limited_terms = array_slice($terms, 0, 2);

                      // 出力用のHTMLを構築
                      echo '<div class="post2__categories categories">';
                      foreach ($limited_terms as $term) {
                          // 各タームの名前を取得して出力
                          echo '<div class="categories__item category">' . esc_html($term->name) . '</div>';
                      }
                      echo '</div>';
                  }
                ?>
              </div>
            <?php endwhile;
            wp_reset_postdata(); // クエリをリセット
          endif; ?>
        </div>
        <!-- ページネーション -->
        <div class="works-page__pagenavi">
          <?php
            // WP-PageNaviプラグインによるページネーション
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi(array('query' => $query)); // クエリを指定
            }
          ?>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
