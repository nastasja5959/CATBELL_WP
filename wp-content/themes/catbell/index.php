  <?php get_header(); ?>
  <main class="main">
      <div class="mainVisual js-mainVisual">
          <div class="mainVisual__bgImg">
              <div class="mainVisual__inner inner">
                  <div class="mainVisual__wrap">
                      <h1 class="mainVisual__title">猫と暮らそう</h1>
                      <p class="mainVisual__text">安心・安全な猫専門ペットショップ</p>
                      <div class="mainVisual__btnArea">
                          <a href="<?php echo get_permalink(get_page_by_path('cat_type')->ID); ?>" class="mainVisual__btn">猫種一覧を見る</a>
                          <a href="<?php echo get_post_type_archive_link('shop'); ?>" class="mainVisual__btn">お店を見る</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.mainVisual -->

      <?php
        $args = array(
            'post_type' => 'news', //ポストタイプのスラッグ
            'order' => 'DESC', //降順
            'posts_per_page' => 4 //4件表示
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        ?>

          <div class="news">
              <div class="news__inner inner">
                  <div class="news__wrap">
                      <div class="news__heading">お知らせ</div>
                      <ul class="news__list">
                          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                              <li class="news__item">
                                  <div class="news__date"><?php echo get_field('news_date'); ?></div>
                                  <div class="news__title">
                                      <?php if (get_field('news_link')) : ?>
                                          <a href="<?php echo get_field('news_link'); ?>" class="news__link"><?php echo the_title(); ?></a>
                                      <?php else : ?>
                                          <p><?php echo the_title(); ?></p>
                                      <?php endif; ?>
                                  </div>
                              </li>
                          <?php endwhile; ?>
                          <!-- <li class="news__item">
                            <div class="news__date">2022.02.22</div>
                            <div class="news__title">
                                <a href="#" class="news__link">ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪</a>
                            </div>
                        </li>
                        <li class="news__item">
                            <div class="news__date">2022.02.02</div>
                            <div class="news__title">
                                <a href="#" class="news__link">【新宿店】ポイント2倍Day！この機会をお見逃しなく！</a>
                            </div>
                        </li>
                        <li class="news__item">
                            <div class="news__date">2022.01.04</div>
                            <div class="news__title">
                                <a href="#" class="news__link">新年SEAL！療法食10%OFF&ペットアイテムおまとめ買いでプレゼント</a>
                            </div>
                        </li> -->
                      </ul>
                  </div>
              </div>
          </div>
      <?php endif;
        wp_reset_postdata(); ?>
      <!-- /.news -->


      <section class="findPets">
          <div class="findPet__inner inner">
              <div class="findPet__head">
                  <h2 class="util__title">ペットを探す</h2>
                  <p class="util__subTitle">Find a pet</p>
              </div>
              <div class="findPet__wrap">
                  <ul class="findPet__list">
                      <?php
                        $countup = 0;
                        $taxonomy_name = 'cat_type';
                        $taxonomys = get_terms($taxonomy_name);

                        if (!is_wp_error($taxonomys) && count($taxonomys)) :
                            foreach ($taxonomys as $taxonomy) :

                                $term_id = esc_html($taxonomy->term_id);
                                $term_idsp = "cat_type_" . $term_id; //タクソノミー名前_ + term_id
                                $photo = get_field('cat_type_img', $term_idsp);

                                if ($countup < 8) :
                        ?>
                                  <li class="findPet__item">
                                      <a href="<?php echo get_permalink(get_page_by_path('cat_type')->ID); ?><?php echo esc_html($taxonomy->slug); ?>">
                                          <div class="findPet__catImg">
                                              <img src="<?php echo $photo; ?>" alt="<?php echo esc_html($taxonomy->name); ?>">
                                          </div>
                                          <p class="findPet__catName"><?php echo esc_html($taxonomy->name); ?></p>
                                      </a>
                                  </li>
                              <?php endif;
                                $countup++; ?>
                      <?php endforeach;
                        endif; ?>

                  </ul>
              </div>
              <div class="findPet__more">
                  <a href="<?php echo get_permalink(get_page_by_path('cat_type')->ID); ?>" class="util__link">猫種一覧を見る</a>
              </div>
          </div>
      </section>
      <!-- /.findPet -->
      <section class="findStore">
          <div class="findStore__inner inner">
              <div class="findStore__head">
                  <h2 class="util__title">お店を探す</h2>
                  <p class="util__subTitle">Find a store</p>
              </div>
              <div class="findStore__wrap">
                  <div class="findStore__map">
                      <div class="findStore__area findStore__area--hokkaido"></div>
                      <div class="findStore__area findStore__area--kyushu"></div>
                      <div class="findStore__area findStore__area--shikoku"></div>
                      <div class="findStore__area findStore__area--honshu1"></div>
                      <div class="findStore__area findStore__area--honshu2"></div>
                  </div>
                  <div class="findStore__shop">
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/zero" class="findStore__link">
                          <div class="findStore__name findStore__name--sapporo">０期生</div>
                      </a>
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/ichi" class="findStore__link">
                          <div class="findStore__name findStore__name--miyagi">１期生</div>
                      </a>
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/ni" class="findStore__link">
                          <div class="findStore__name findStore__name--shinjuku">２期生</div>
                      </a>
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/san" class="findStore__link">
                          <div class="findStore__name findStore__name--ishikawa">３期生</div>
                      </a>
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/yon" class="findStore__link">
                          <div class="findStore__name findStore__name--umeda">４期生</div>
                      </a>
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/go" class="findStore__link">
                          <div class="findStore__name findStore__name--shizuoka">５期生</div>
                      </a>
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/roku" class="findStore__link">
                          <div class="findStore__name findStore__name--fukuoka">６期生</div>
                      </a>
                      <a href="<?php echo get_post_type_archive_link('shop'); ?>/gema" class="findStore__link">
                          <div class="findStore__name findStore__name--kagoshima">ゲマズ</div>
                      </a>
                  </div>
              </div>
              <div class="findStore__more">
                  <a href="<?php echo get_post_type_archive_link('shop'); ?>" class="util__link">店舗一覧を見る</a>
              </div>
          </div>
      </section>
      <!-- /.store -->
      <section class="blog">
          <div class="blog__inner inner">
              <div class="blog__head">
                  <h2 class="util__title">ブログ</h2>
                  <p class="util__subTitle">Blog</p>
              </div>
              <div class="blog__wrap">
                  <ul class="blog__list">

                      <?php
                        $args = array(
                            'post_type' => 'blog', //ポストタイプのスラッグ
                            'order' => 'DESC', //降順
                            'posts_per_page' => 4 //4件表示
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) : $my_query->the_post();
                        ?>
                              <li class="blog__item">
                                  <a href="<?php the_permalink(); ?>" class="blog__link">
                                      <div class="blog__img">
                                          <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo get_the_title(); ?>">
                                      </div>
                                      <div class="blog__info">
                                          <h3 class="blog__title"><?php echo get_the_title(); ?></h3>
                                          <p class="blog__date"><?php the_time('Y.m.d') ?></p>
                                      </div>
                                  </a>
                              </li>
                      <?php endwhile;
                        endif; ?>
                  </ul>
              </div>
              <div class="blog__more">
                  <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="util__link">ブログ一覧を見る</a>
              </div>
          </div>
      </section>
      <!-- /.blog -->
      <div class="about">
          <div class="about__inner inner">
              <div class="about__head">
                  <h2 class="util__title">サイトについて</h2>
                  <p class="util__subTitle">About</p>
              </div>
              <div class="about__wrap">
                  <div class="about__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_01.png" alt="">
                  </div>
                  <div class="about__body">
                      <div class="about__title">ペットと人との笑顔ある未来の創造</div>
                      <p class="about__text">
                          家族の絆を深める、子供の情操教育、ヒーリング効果など、<br>
                          ペットと暮らすメリットが証明されてきており、<br>
                          それらの効果は人々の暮らしに必要不可欠な&quot;笑顔&quot;を<br>
                          もたらすことができます。<br>
                          CAT BELLは、ペットというかけがえのない生命を<br>
                          お客様へご提供することで、笑顔ある未来を創造し、<br>
                          より豊かな社会環境の構築に貢献いたします。
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.about -->
  </main>

  <?php get_footer(); ?>
  </body>

  </html>