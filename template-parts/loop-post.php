<article id="post-<?php the_ID(); ?>" <?php post_class('blogCard'); ?>>
    <div class="inner">
        <a href="<?php the_permalink(); ?>" class="blogContents">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else: ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/BlogImages/Thumbnailsample.png')); ?>" alt="">
            <?php endif; ?>
            <div class="blogarea">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php the_time('Y.m.d'); ?>
                </time>
                <h3><?php the_title(); ?></h3>
            </div>
        </a>
        <div class="Category">
            <?php the_category(' '); ?>
        </div>
    </div>
</article>