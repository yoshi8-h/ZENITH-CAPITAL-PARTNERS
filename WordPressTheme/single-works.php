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

    <!-- works-contents セクション (実績詳細内容) -->
    <section class="works-contents l-works-contents">
      <div class="works-contents__inner inner">
        <div class="works-contents__wrap">
          <div class="works-contents__top">
            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="works-contents__list-link">業務実績一覧に戻る　→</a>
          </div>
          <div class="works-contents__contents-wrap">
            <h1 class="works-contents__title"><?php the_title(); ?></h1>

            <?php
            // 現在の投稿IDを取得
            $post_id = get_the_ID();
            // カスタムタクソノミー 'works_category' のタームを取得
            $terms = get_the_terms($post_id, 'works_category');
            // タームが存在するかチェック
            if ($terms && !is_wp_error($terms)) :
                // タームの数を最大2つに制限
                $limited_terms = array_slice($terms, 0, 2);
            ?>
              <div class="works-contents__categories">
                <?php foreach ($limited_terms as $term) : ?>
                    <div class="works-contents__category"><?php echo esc_html($term->name); ?></div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <div class="works-contents__content">
              <?php the_content(); ?>

              <!-- 画像パターン④ (画像 縦2枚) -->
              <div class="works-contents__images-area images04">
                <div class="images04__contents">
                  <div class="images04__contents-item contents04">
                    <div class="contents04__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img04.webp" alt=""></div>
                    <p class="contents04__text">屋上ペントハウス外観　after</p>
                  </div>
                  <div class="images04__contents-item contents04">
                    <div class="contents04__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img04.webp" alt=""></div>
                    <p class="contents04__text">屋上ペントハウス外観　after</p>
                  </div>
                </div>
              </div>

              <!-- 画像パターン⑤ (画像 縦1枚) -->
              <div class="works-contents__images-area images05">
                <div class="images05__contents">
                  <div class="images05__contents-item contents05">
                    <div class="contents05__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works-img04.webp" alt=""></div>
                    <p class="contents05__text">屋上ペントハウス外観　after</p>
                  </div>
                </div>
              </div>
            </div>

              <?php
                // ACFのフィールド値を取得し、いずれかが入力されているか確認
                $works_tables = [
                    get_field('works-table_1'),
                    get_field('works-table_2'),
                    get_field('works-table_3'),
                    get_field('works-table_4'),
                    get_field('works-table_5'),
                ];
                // すべてのフィールドが空の場合は『info02』自体を表示しない
                if (array_filter($works_tables)):
              ?>
                <!-- 詳細情報 (表 & タイトル) -->
                <div class="works-contents__info info02">
                  <div class="info02__title">詳細情報</div>
                  <table class="info02__table table">
                    <thead class="table__head">
                      <tr>
                        <th class="table__header">項目</th>
                        <th class="table__header-body">内容</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($works_tables[0]): ?>
                        <tr class="table__row">
                          <td class="table__cell-head">所在・種別</td>
                          <td class="table__cell-body"><?php echo $works_tables[0]; ?></td>
                        </tr>
                      <?php endif; ?>
                      <?php if ($works_tables[1]): ?>
                        <tr class="table__row">
                          <td class="table__cell-head">規模</td>
                          <td class="table__cell-body"><?php echo $works_tables[1]; ?></td>
                        </tr>
                      <?php endif; ?>
                      <?php if ($works_tables[2]): ?>
                        <tr class="table__row">
                          <td class="table__cell-head">業務内容（提案内容）</td>
                          <td class="table__cell-body"><?php echo $works_tables[2]; ?></td>
                        </tr>
                      <?php endif; ?>
                      <?php if ($works_tables[3]): ?>
                        <tr class="table__row">
                          <td class="table__cell-head">業務実施内容</td>
                          <td class="table__cell-body"><?php echo $works_tables[3]; ?></td>
                        </tr>
                      <?php endif; ?>
                      <?php if ($works_tables[4]): ?>
                        <tr class="table__row">
                          <td class="table__cell-head">効果・結果</td>
                          <td class="table__cell-body"><?php echo $works_tables[4]; ?></td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              <?php endif; ?>
              <div class="works-contents__btn-wrap">
                <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="works-contents__btn btn2 btn2--2">
                  <div class="btn2__text">実績一覧に戻る</div>
                  <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
                </a>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <div class="cta l-cta">
      <div class="cta__inner inner">
        <div class="cta__wrap">
          <p class="cta__text">不動産の売却をご検討の方は、<br class="u-mobile">こちらからご相談下さい。</p>
          <div class="cta__btn-wrap">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="cta__btn btn2">
              <div class="btn2__text">お問い合わせ</div>
              <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
            </a>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>
