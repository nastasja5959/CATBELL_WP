<?php get_header(); ?>
    <main class="main cntInner inner">
    <!-- パンくずリスト -->
        <nav>
            <ol class="breadcrumbs">
				<li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
				<li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ブログ一覧</a></li>
                <li class="breadcrumbs__item">はぁちゃまのヒーリング効果とは！？プレゼントキャンペーンも実施中♪</li>
            </ol>
        </nav>
    <!-- /パンくずリスト -->


    <!-- top -->
        <section>
            <div class="top__img">
                <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title();?>">
            </div>
        </section>
	<!-- /top -->
	
    <!-- content -->
        <section class="content">
            <div class="blogs">
				<span class="date"><?php echo the_time('Y,m,d'); ?></span>
				<h1 class="blog__ttl"><?php echo the_title(); ?></h1>
				<div class="blog__wrapper">
                  <?php echo the_content(); ?>
                </div>
				<div class="blog__tagItems">
				  <?php the_tags('<div class="tag top__tag">','</div><div class="tag top__tag">','</div>'); ?>
				</div>

				<div class="storeInfo">
					<div class="storeInfo__img">
						<img src="<?php echo get_template_directory_uri(); ?>../assets/img/shop/sinjyuku.jpg" alt="新宿店">
					</div>
					<div class="storeInfo__content">
						<h3 class="storeInfo__ttl">新宿店</h3>
						<table class="storeInfo__tbl">
							<tr class="storeInfo__items">
								<td class="storeInfo__label">住所</td>
								<td class="storeInfo__cnt">東京都新宿区西新宿2-22-2キャットベル</td>
							</tr>
							<tr class="storeInfo__items">
								<td class="storeInfo__label">TEL</td>
								<td class="storeInfo__cnt">22-2222-2222</td>
							</tr>
							<tr class="storeInfo__items">
								<td class="storeInfo__label">営業時間</td>
								<td class="storeInfo__cnt">平日11：00～19:30/土日祝11:00～20：00<br>
									休日：年中無休
								</td>
							</tr>
						</table>
					</div>
					<a href="#" class="storeInfo__link link__btn"><span class="link__content">お取扱い店舗を見る</span></a>
				</div>

				<div class="newBlog">
					<h3 class="newBlog__ttl">新宿店の最新ブログ</h3>
					<div class="newBlog__wrapper">
						<div class="newBlog__card">
							<div class="newBlog__img">
								<img src="<?php echo get_template_directory_uri(); ?>../assets/img/blog/01.jpg" alt="ねこ">
							</div>
							<div class="newBlog__ttl">ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪</div>
							<span class="date newBlog__date">2022.02.22</span>
						</div>
						<div class="newBlog__card">
							<div class="newBlog__img">
								<img src="<?php echo get_template_directory_uri(); ?>../assets/img/blog/02.jpg" alt="ねこ">
							</div>
							<div class="newBlog__ttl">ポイント2倍Day！この機会をお見逃しなく！</div>
							<span class="date newBlog__date">2022.02.22</span>
						</div>
						<div class="newBlog__card">
							<div class="newBlog__img">
								<img src="<?php echo get_template_directory_uri(); ?>../assets/img/blog/03.jpg" alt="ねこ">
							</div>
							<div class="newBlog__ttl">新年SEAL！療法食10%OFF</div>
							<span class="date newBlog__date">2022.02.22</span>
						</div>
						<div class="newBlog__card">
							<div class="newBlog__img">
								<img src="<?php echo get_template_directory_uri(); ?>../assets/img/blog/04.jpg" alt="ねこ">
							</div>
							<div class="newBlog__ttl">新入りさん紹介★穏やかで甘え上手なスコティッシュフォールド</div>
							<span class="date newBlog__date">2022.02.22</span>
						</div>
					</div>
					<a href="#" class="newBlog__link link__btn"><span class="link__content newBlog__link--cnt">この店舗のブログを見る</span></a>
				</div>
            </div>
						<?php get_template_part('_inc/sidebar'); ?>
        </section>
    <!-- /content -->
    </main>

<?php get_footer(); ?>
</body>
</html>