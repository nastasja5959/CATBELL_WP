<?php get_header(); ?>
<section class="page-shopDetail">
  <div class="mainvisual">
    <div class="mainvisual__img inner">
      <nav>
        <ol class="breadcrumbs">
            <li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
            <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">お店を探す</a></li>
            <li class="breadcrumbs__item">ショップ詳細</li>
        </ol>
      </nav>
      <!-- breadcrumb__inner inner -->
      <img src="<?php echo get_field('shop_img'); ?>" alt="<?php the_title(); ?>">
    </div>
  </div><!-- mainvisual -->

  <section class="access">
    <div class="inner">
      <h2 class="section__title"><?php the_title(); ?>の基本情報</h2>
      <div class="access__inner">
        <div class="access__text">
          <dl>
            <dt>住所</dt>
            <dd><?php echo get_field('shop_address'); ?></dd>
            <dt>TEL</dt>
            <dd><?php echo get_field('shop_tell'); ?></dd>
            <dt>営業時間</dt>
            <dd><?php echo get_field('shop_hours'); ?></dd>
            <dt>アクセス</dt>
            <dd><?php echo get_field('shop_access'); ?></dd>
          </dl>
        </div><!-- access__text -->

        <div class="access__map">
        <dd><?php echo get_field('shop_map'); ?></dd>
        </div><!-- access__map -->
      </div><!-- access__inner -->
    </div><!-- inner -->
  </section><!-- access -->

  <section class="catlist">
    <div class="inner">
      <h2 class="section__title"><?php the_title(); ?>の新入りの猫ちゃん</h2>
      <ul class="catlist__items">
        <li class="catlist__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/americanShorthair_01.jpg" alt="">
            <h3 class="catlist__item__title">アメリカンショートヘア</h3>
            <dl>
              <dt>性別</dt>
              <dd>オス</dd>
              <dt>生体価格</dt>
              <dd>368,800 (税抜)</dd>
            </dl>
          </a>
        </li><!-- catlist__item 1-->

        <li class="catlist__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/siam.jpg" alt="">
            <h3 class="catlist__item__title">シャム</h3>
            <dl>
              <dt>性別</dt>
              <dd>メス</dd>
              <dt>生体価格</dt>
              <dd>368,800 (税抜)</dd>
            </dl>
          </a>
        </li><!-- catlist__item 2-->

        <li class="catlist__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/munchkin.jpeg" alt="">
            <h3 class="catlist__item__title">マンチカン</h3>
            <dl>
              <dt>性別</dt>
              <dd>オス</dd>
              <dt>生体価格</dt>
              <dd>368,800 (税抜)</dd>
            </dl>
          </a>
        </li><!-- catlist__item 3-->
      </ul>

      <div class="btn">
        <a href="#" class="btn__item">この店舗の猫ちゃんを見る</a>
      </div><!-- btn__item -->

    </div><!-- inner -->
  </section><!-- catlist -->

  <section class="concept">
    <div class="inner">
      <h2 class="section__title">店長よりごあいさつ</h2>
      <div class="concept__inner">
        <div class="concept__left">
        <img src="<?php echo get_field('shop_manager_img'); ?>" alt="<?php the_title(); ?>">
        </div><!-- concept__left -->

        <div class="concept__right">
          <h3 class="concept__subtitle"><?php echo get_field('shop_manager_title');  ?></h3>
          <p class="concept__text"><?php echo get_field('shop_manager_text');  ?></p>
        </div><!-- concept__right -->
      </div><!-- concept__inner -->
    </div><!-- inner -->
  </section><!-- concept -->

  <section class="blog">
    <div class="inner">
      <h2 class="section__title"><?php the_title(); ?>の最新ブログ</h2>

      <ul class="blog__items">
        <li class="blog__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/00.jpg" alt="ブログ記事写真">
            <div class="blog__item__text">
              <p class="date">2022.02.24</p>
              <h3 class="blog__subtitle">猫にまつわるヒーリング効果とは！？プレゼントキャンペーンも実施中♪猫にまつわるヒーリング効果とは！？プレゼントキャンペーンも実施中♪猫にまつわるヒーリング効果とは！？プレゼントキャンペーンも実施中♪猫にまつわるヒーリング効果とは！</h3>
              <p class="blog__text">人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか。人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか</p>
              <a class="blog__item__link" href="#">#ヘルスケア</a>
              <a class="blog__item__link" href="#">#プレゼント</a>
              <a class="blog__item__link" href="#">#キャンペーン</a>
            </div><!-- blog__item__text -->
          </a>
          </li><!-- blog__item -->

        <li class="blog__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/01.jpg" alt="ブログ記事写真">
            <div class="blog__item__text">
              <p class="date">2022.02.24</p>
              <h3 class="blog__subtitle">ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪</h3>
              <p class="blog__text">人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか。人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか</p>
              <a class="blog__item__link" href="#">#ヘルスケア</a>
              <a class="blog__item__link" href="#">#キャンペーン</a>
            </div><!-- blog__item__text -->
          </a>
        </li><!-- blog__item -->

        <li class="blog__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/02.jpg" alt="ブログ記事写真">
            <div class="blog__item__text">
              <p class="date">2022.02.24</p>
              <h3 class="blog__subtitle">【<?php the_title(); ?>】ポイント2倍Day！この機会をお見逃しなく！ポイント2倍Day！この機会をお見逃しなく！ポイント2倍Day！この機会をお見逃しなく！</h3>
              <p class="blog__text">人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか。人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか</p>
              <a class="blog__item__link" href="#">#ポイントDay</a>
              <a class="blog__item__link" href="#">#ヘルスケア</a>
            </div><!-- blog__item__text -->
          </a>
        </li><!-- blog__item -->
      </ul><!-- blog__items-->

      <div class="btn">
        <a href="#" class="btn__item">この店舗のブログを見る</a>
      </div><!-- btn__item -->

    </div><!-- inner -->
  </section><!-- blog -->
</section>
<?php get_footer(); ?>
</body>
</html>