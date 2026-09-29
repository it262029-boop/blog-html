<?php get_header(); ?>

<main class="single
">
    <div class="contents">
        <div class="inner">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>


                        <div class="single-eyecatch">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php endif; ?>

                            <div class="single-category">
                                <?php the_category(' '); ?>
                            </div>
                        </div>

                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <p class="post-date">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                <?php the_time('Y.m.d'); ?>
                            </time>
                        </p>

                        <div class="post-contents">
                            <?php the_content(); ?>
                        </div>

                    </article>

                    <div class="post-comments">
                        <?php
                        if (comments_open() || get_comments_number()):
                            comments_template();
                        endif;
                        ?>
                    </div>
                <?php
                endwhile;
                get_template_part('template-parts/nav', 'single');

            else:
                ?>
                <p>記事はありません。</p>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>