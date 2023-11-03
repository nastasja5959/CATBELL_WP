<?php get_header(); ?>

<body class="drawer drawer--right">
  <header class="header header--default js-header">
    <div class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/logo.svg" alt="CAT BELLロゴ画像">
    </div>
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="header__nav drawer-nav" role="navigation">
        <ul class="header__list drawer-menu">
            <li class="header__item">
                <a href="#" class="drawer-menu-item">ペットを探す</a>
            </li>
            <li class="header__item">
                <a href="#" class="drawer-menu-item">お店を探す</a>
            </li>
            <li class="header__item">
                <a href="#" class="drawer-menu-item">ブログ一覧</a>
            </li>
        </ul>
    </nav>
</header>
  <section class="catList">
    <div class="catList__inner inner">
      <!-- breadcrumb -->
        <nav>
          <ol class="breadcrumbs">
              <li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
              <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">猫種一覧</a></li>
              <li class="breadcrumbs__item">アメリカンショートヘア一覧</li>
          </ol>
      </nav>
      <!-- /breadcrumb -->

      <div class="catList__head">
        <h2 class="catList__title">全猫ちゃんの一覧</h2>
      </div>

      <ul class="cat__lists">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <li class="cat__list">

          <a href="#" class="cast__list__img hover">
          <?php foreach (SCF::get('ねこ') as $field_name => $field_value) : ?>
            <?php
            $carousel_thumbnail = wp_get_attachment_image_src($field_value['cat_img'], 'large');
            $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
          ?>
            <img src="<?php echo $carousel_thumbnail ?>" alt="<?php echo get_the_title(); ?>">
          <?php break; endforeach; ?>
          </a>
          <div class="cat__list__body">
            <div class="cat__list__head">
              <div class="cat__list__label hover">
                <?php $post_object = get_field('cat_shop'); ?>
                <?php echo get_the_title($post_object); ?>
              </div>
              <div class="cat__list__title"><?php echo get_the_title(); ?></div>
            </div>
            <dl class="cat__list__content">
              <dt>生年月日</dt>
              <dd><?php echo get_field('cat_birthday'); ?></dd>
              <dt>性別</dt>
              <dd>
                <?php if(get_field('cat_sex') === "men") : ?>
                  オス
                <?php else : ?>
                  メス
                <?php endif; ?>
              </dd>
              <dt>生体価格</dt>
              <dd><span class="cat__price"><?php echo get_field('cat_priice'); ?></span>円（税抜）</dd>
            </dl>
            <div class="cat__list__footer">
              <div class="cat__list__footer--store-more">
                <a href="<?php echo get_permalink($post_object); ?>" class="more__link more--store hover">お取扱い店舗を見る</a>
              </div>
              <div class="cat__list__footer--cat__more">
                <a href="<?php the_permalink(); ?>" class="more__link more--cat hover">この猫を詳しく見る</a>
              </div>
            </div>
          </div>
        </li>
        <?php endwhile; endif; ?>
      </ul>

      <!-- pagenation -->
      <?php get_template_part('_inc/pager'); ?>
      <!-- /pagenation -->

      <div class="anotherPet__wrap">
        <div class="anotherPet__inner">
          <h3 class="catList__title">ほかにもこんな猫種が注目されています！</h3>
          <ul class="anotherPet__list">
            <li class="anotherPet__item hover">
              <a href="anotherPet__itemLink">
                <div class="anotherPet__catImg">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/01.png" alt="">
                </div>
                <p class="anotherPet__catName">スコティッシュ<br>フォールド</p>
              </a>
            </li>
            <li class="anotherPet__item hover">
              <a href="anotherPet__itemLink">
                <div class="anotherPet__catImg">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/03.png" alt="">
                </div>
                <p class="anotherPet__catName">メインクイーン</p>
              </a>
            </li>
            <li class="anotherPet__item hover">
              <a href="anotherPet__itemLink">
                <div class="anotherPet__catImg">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/04.png" alt="">
                </div>
                <p class="anotherPet__catName">エキゾチック<br>ショートヘア</p>
              </a>
            </li>
            <li class="anotherPet__item hover">
              <a href="anotherPet__itemLink">
                <div class="anotherPet__catImg">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/05.png" alt="">
                </div>
                <p class="anotherPet__catName">ラグドール</p>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <!-- /.anotherPet -->

  <?php get_footer(); ?>
</body>

</html>