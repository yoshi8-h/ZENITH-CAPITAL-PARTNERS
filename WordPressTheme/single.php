<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-news.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-news-sp.webp" alt="">
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

    <!-- post-contents セクション (投稿詳細内容) -->
    <section class="post-contents l-post-contents">
      <div class="post-contents__inner inner">
        <div class="post-contents__wrap">
          <div class="post-contents__top">
            <div class="post-contents__meta">
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
              <div class="post-contents__category <?php echo esc_attr($category_class); ?>">
                <?php echo esc_html($category_name); ?>
              </div>
              <time class="post-contents__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>" class="post-contents__list-link"><span class="post-contents__list-link-sp u-desktop">ニュース・トピックス</span>一覧に戻る　→</a>
          </div>
          <div class="post-contents__contents-wrap">
            <h1 class="post-contents__title"><?php the_title(); ?></h1>
            <div class="post-contents__content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
