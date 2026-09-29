<?php get_header(); ?>
<main>

    <!-- ------------------------------メインビジュアル -->
    <section class="mainvisual">


        <?php get_template_part('template-parts/loop', 'mainvisual');
        ?>


    </section>

    <!--------------------------------------- プロフィール -->
    <a class="Profile" href="<?php echo esc_url(home_url('/about/')); ?>">
        <div class="inner">
            <h2>Profile</h2>
            <div class="profileArea">
                <img class="profileIcon" src="<?php echo esc_url(get_theme_file_uri('/BlogImages/icon.png')) ?>" alt="プロフィールアイコン">
                <p>トライデントコンピュータ専門学校<br>
                    Webデザイン学科<br>
                    井上美結</p>
            </div>
        </div>
    </a>


    <div class="mainarea">
        <!-- ------------------------------------------------ブログ -->
        <section class="post-all" id="blog">
            <div class="inner">
                <h2>blog</h2>


                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                ?>

                        <?php get_template_part('template-parts/loop', 'post'); ?>



                <?php
                    endwhile;
                endif;
                ?>

                <?php get_template_part('template-parts/loop', 'pagenation'); ?>

            </div>

        </section>
        <!-- ------------------------------------------  サーチ、カテゴリー -->

        <?php get_template_part('template-parts/loop', 'sideber');
        ?>
    </div>
</main>



<?php get_footer(); ?>