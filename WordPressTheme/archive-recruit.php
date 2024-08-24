<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
      <div class="c-section-header--white">
        <h1 class="c-section-header__engtitle">company</h1>
        <p class="c-section-header__jatitle">私たちについて</p>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <div class="c-breadcrumb">
    <div class="l-inner">
      <div>HOME > COMPANY</div>
    </div>
  </div>

  <section class="p-page-recruit">
    <div class="p-page-recruit__inner l-inner">
      <div class="p-page-recruit__title">
        <h2 class="p-page-recruit__main">Enjoy Creation for Client</h2>
        <p class="p-page-recruit__sub">楽しむ心が良いモノを生む</p>
      </div>
      <p class="p-page-recruit__text">
        心を弾ましながら<br>
        夢いっぱいのサイトを作ろう！<br>
        お客様も自分もみんなが幸せになれるように
      </p>
      <div class="p-page-recruit__image">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/recruit_1-pc.png">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/recruit_1.png" alt="女性たちの写真">
        </picture>
      </div>

      <div class="p-page-recruit__recruit">
        <div class="p-page-recruit__title c-section-header">
          <h2 class="c-section-header__subpage">募集中の職種</h2>
        </div>
        <div class="p-page-recruit__items">
          <!-- ループ -->
          <div class="p-page-recruit__item">
            <h3 class="p-page-recruit__job-title">Webデザイナー</h3>
            <dl class="p-page-recruit__lists p-common-lists">
              <div class="p-common-lists__list">
                <dt>雇用形態</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>給与</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>仕事内容</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>勤務時間</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>応募資格</dt>
                <dd>合同会社CodeUps</dd>
              </div>
            </dl>
            <div class="p-page-recruit__apply">
              <a href="" class="c-button">応募する</a>
              <p>求人サイトへ遷移します</p>
            </div>
          </div>
          <div class="p-page-recruit__item">
            <h3 class="p-page-recruit__job-title">Webデザイナー</h3>
            <dl class="p-page-recruit__lists p-common-lists">
              <div class="p-common-lists__list">
                <dt>社名</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>設立</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>代表取締役</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>資本金</dt>
                <dd>合同会社CodeUps</dd>
              </div>
              <div class="p-common-lists__list">
                <dt>所在地</dt>
                <dd>合同会社CodeUps</dd>
              </div>
            </dl>
            <div class="p-page-recruit__apply">
              <a href="" class="c-button">応募する</a>
              <p>求人サイトへ遷移します</p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-page-recruit__movies">
        <div class="p-page-recruit__title c-section-header">
          <h2 class="c-section-header__subpage">社内ムービー</h2>
        </div>
        <div class="p-page-recruit__movie">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ExLvpakZwhg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
