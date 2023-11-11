<title>
  <?php bloginfo('name'); ?>
  |
  <?php global $page, $paged;
  if (is_front_page()) : //トップページ 
  ?>
    安心・安全なホロライブ専門ペットショップ
  <?php
  elseif (is_page('cat_type') || is_single() || is_tax('cat_type') || is_tag()) :
    wp_title('');
  elseif (is_post_type_archive('shop')) : ?>
    ホロ店舗記事一覧
  <?php elseif (is_post_type_archive('blog')) : ?>
    ホロブログ記事一覧
  <?php elseif (is_post_type_archive('cat')) : ?>
    ホロメン一覧
  <?php elseif (is_tax('input_shop_type')) : ?>
    <?php single_term_title(); ?>ブログ
  <?php elseif (is_tax('hand_shop_type')) : ?>
    <?php single_term_title(); ?>のホロメン一覧
  <?php
  elseif (is_404()) : //404ページ
    echo '404|';
    bloginfo('name');
  endif;
  ?>
</title>