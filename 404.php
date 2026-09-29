<?php get_header(); ?>
<main class="nopage
">

    <div class="contents">
        <div class="inner">

            <h2>404 Not Found</h2>
            <p>お探しのページは見つかりませんでした。<br>URLが間違っているか、ページが移動または削除された可能性があります。</p>
            <p><a href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a></p>
        </div>

    </div>

    <?php get_template_part('template-parts/loop', 'mainvisual');
    ?>

</main>
<?php get_footer(); ?>