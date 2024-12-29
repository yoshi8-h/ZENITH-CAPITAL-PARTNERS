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
          <div class="posts__item post post--main js-fadeInUp">
            <div class="post__meta">
              <div class="post__category is-news">お知らせ</div>
              <time class="post__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <a href="" class="post__link-text">投稿のテキストが入ります。投稿のテキストが入ります。投稿のテキストが入ります。投稿のテキストが入ります。投稿のテキストが入ります。投稿のテキストが入ります。</a>
          </div>
          <div class="posts__item post post--main js-fadeInUp">
            <div class="post__meta">
              <div class="post__category is-topics">トピックス</div>
              <time class="post__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <a href="" class="post__link-text">投稿のテキストが入ります。</a>
          </div>
          <div class="posts__item post post--main js-fadeInUp">
            <div class="post__meta">
              <div class="post__category is-other">その他</div>
              <time class="post__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <a href="" class="post__link-text">投稿のテキストが入ります。投稿のテキストが入ります。</a>
          </div>
          <div class="posts__item post post--main js-fadeInUp">
            <div class="post__meta">
              <div class="post__category is-topics">トピックス</div>
              <time class="post__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <a href="" class="post__link-text">投稿のテキストが入ります。</a>
          </div>
          <div class="posts__item post post--main js-fadeInUp">
            <div class="post__meta">
              <div class="post__category is-other">その他</div>
              <time class="post__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <a href="" class="post__link-text">投稿のテキストが入ります。投稿のテキストが入ります。</a>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
