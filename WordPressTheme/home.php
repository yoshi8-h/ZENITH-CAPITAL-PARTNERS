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
            <div class="title__ja is-narrow">ニュース・トピックス</div>
            <div class="title__en">NEWS・TOPICS</div>
          </h2>
          <p class="sub-fv__text">お知らせ情報やトピックス情報をご覧いただけます。</p>
        </div>
      </div>
    </div>

    <!-- news-page セクション -->
    <section class="news-page l-news-page">
      <div class="news-page__inner inner">
        <div class="news-page__posts posts">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <div class="posts__item post post--main js-fadeInUpFirst">
                <div class="post__meta">
                  <?php
                    // 投稿のカテゴリを取得
                    $categories = get_the_category();
                    $category_class = '';
                    $category_name = '';
                    if (!empty($categories)) {
                      // 最初のカテゴリを取得
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
                      // カテゴリがない場合
                      $category_name = 'カテゴリなし';
                    }
                  ?>
                  <div class="post__category <?php echo esc_attr($category_class); ?>">
                    <?php echo esc_html($category_name); ?>
                  </div>
                  <time class="post__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <a href="<?php the_permalink(); ?>" class="post__link-text">
                  <?php
                    $content = strip_tags(get_the_content()); // HTMLタグを除去
                    echo mb_substr($content, 0, 120) . '...'; // 120文字まで切り取り、省略記号を付加
                  ?>
                </a>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <!-- 投稿がない場合の表示 -->
            <p class="posts__no-posts">現在投稿がありません。</p>
          <?php endif; ?>
        </div>
        <!-- ページネーション -->
        <div class="news-page__pagenavi">
          <?php get_template_part('parts/wp-pagenavi'); ?>  <!-- 拡張子「.php」は不要。相対パスではないので先頭に「./」不要。 -->
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
