<?php get_header(); ?>
<main>
    <div class="mainarea">
        <!-- 記事一覧エリア -->
        <section class="post-all">
            <div class="inner">
                <h2>Search</h2>
                <p class="archive-title" style="text-align: center; margin-bottom: 40px; font-weight: bold;">
                    「<?php echo get_search_query(); ?>」の検索結果
                </p>

                <?php if (have_posts()): ?>
                    <div class="post-loop-area">
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('template-parts/loop', 'post');
                        endwhile;
                        ?>
                    </div>

                    <!-- ページネーション -->
                    <?php get_template_part('template-parts/loop', 'pagenation'); ?>

                <?php else: ?>
                    <p style="text-align: center; margin-bottom: 80px;">該当する記事は見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        </section>

        <!-- サイドバーエリア -->
        <?php get_template_part('template-parts/sidebar'); ?>
    </div>
</main>
<?php get_footer(); ?>