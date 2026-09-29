<?php get_header(); ?>
<main>
    <div class="mainarea">
        <!-- 記事一覧エリア -->
        <section class="post-all">
            <div class="inner">
                <h1 class="archive-title" style="text-align: center; margin-bottom: 40px; font-size: 32px; font-weight: bold;">
                    <?php if (is_category()): ?>
                        <?php single_cat_title(); ?> の記事一覧
                    <?php elseif (is_tag()): ?>
                        <?php single_tag_title(); ?> の記事一覧
                    <?php elseif (is_month()): ?>
                        <?php the_time('Y年n月'); ?> の記事一覧
                    <?php else: ?>
                        過去の記事一覧
                    <?php endif; ?>
                </h1>

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
        <?php get_template_part('template-parts/loop', 'sideber');
        ?>
    </div>
</main>
<?php get_footer(); ?>