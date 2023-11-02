<?php get_header(); ?>
  <section class="shoplist inner page-shopList">

    <nav>
      <ol class="breadcrumbs">
          <li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
          <li class="breadcrumbs__item">お店を探すのよ！</li><!--GitHub確認！-->
      </ol>
    </nav>
    <h2 class="shoplist__title">お店を探す</h2>

    <ul class="shoplist__items">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <li class="shoplist__item">
        <a href="<?php the_permalink(); ?>">
        <img src="<?php echo get_field('shop_img'); ?>" alt="<?php the_title(); ?>">
          <h3 class="shoplist__item__title"><?php the_title(); ?></h3>
          <dl>
            <dt>住所</dt>
            <dd><?php echo get_field('shop_address'); ?></dd>
            <dt>TEL</dt>
            <dd><?php echo get_field('shop_tell'); ?></dd>
            <dt>営業時間</dt>
            <dd><?php echo get_field('shop_hours'); ?></dd>
          </dl>
        </a>
      </li><!-- shoplist__item1-->
    <?php endwhile; endif; ?>
    </ul><!-- shoplist__items-->
    
    <div class="pager">
    <?php global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }
    else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');
        $paginate_base .= '%_%';
    }
    echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 3,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '«',
        'next_text' => '»',
    )); ?>
</div>

  </section><!-- shoplist-->

  <?php get_footer(); ?>
</body>
</html>