<?php get_header(); ?>
  <!-- 下層ページのメインビュー -->
  <div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
      <div class="c-section-header--white">
        <h1 class="c-section-header__engtitle">news</h1>
        <p class="c-section-header__jatitle">お知らせ</p>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <div class="c-breadcrumb">
    <div class="l-inner">
      <div>HOME > NEWS > Webデザインニュースサイト「ウェブマガジン」に取材いただきました</div>
    </div>
  </div>

  <?php if (have_posts()): while (have_posts()): the_post(); ?>

  <section class="l-single-body p-single-body">
    <div class="p-single-body__inner l-inner">
      <div class="p-single-body__title">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="p-single-body__meta">
        <div class="p-news-content">
          <div class="p-news-content__meta">
            <time datetime="<?php the_time('c'); ?>" class="p-news-content__date"><?php the_time('Y.m.d'); ?></time>
            <?php $cat = get_the_category();
            $cat = $cat[0]->cat_name; ?>
            <p class="p-news-content__category"><?php echo $cat ?></p>
          </div>
        </div>
      </div>
      <div class="p-single-body__image">
      <?php if(get_the_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
      <?php else: ?>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="noimage">
      <?php endif; ?>
      </div>
      <div class="p-single-body__content">
        <?php the_content(); ?>
      </div>

      <div class="c-page-link">
        <div class="c-page-link__inner">
          <div class="c-page-link__flex">
        <?php
          $prev = get_previous_post();
          $prev_url = get_permalink($prev->ID);
          $next = get_next_post();
          $next_url = get_permalink($next->ID);
        ?>
            <div class="c-page-link__prev">
              <?php if($prev): ?>
              <a href="<?php echo $prev_url; ?>">前の記事</a>
              <?php endif; ?>
            </div>

            <div class="c-page-link__next">
              <?php if($next): ?>
              <a href="<?php echo $next_url; ?>">次の記事</a>
              <?php endif; ?>
            </div>

          </div>
          <div class="c-page-link__archive">
            <a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS一覧</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
