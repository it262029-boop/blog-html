<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header>
        <div class="inner">
            <div class="logo">
                <?php if (is_front_page() || is_home()): ?>

                    <h1>
                        <img class="makaronIcon" src="<?php echo esc_url(get_theme_file_uri('/BlogImages/makaronIcon.png')); ?>" alt="">
                        <img class="chocolatnote" src="<?php echo esc_url(get_theme_file_uri('/BlogImages/Logo.png')); ?>" alt="">
                    </h1>
                <?php else: ?>
                    <p> <img class="makaronIcon" src="<?php echo esc_url(get_theme_file_uri('/BlogImages/makaronIcon.png')); ?>" alt="">
                        <img class="chocolatnote" src="<?php echo esc_url(get_theme_file_uri('/BlogImages/Logo.png')); ?>" alt="">
                    </p>
                <?php endif; ?>


            </div>
            <!-- -----------------------------------------------gnav -->
            <nav class="gnav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')) ?>">Home</a> </li>
                    <li><a href="<?php echo esc_url(home_url('/about/')) ?>">Profile</a></li>
                    <li> <a href="<?php echo esc_url(home_url('/')); ?>#blog">Blog</a></li>

                </ul>
            </nav>

            <!-- -------------------------------------------------ハンバーガーメニュー -->
            <div class="hmenu">
                <button class="hamburger" aria-label="メニュー" aria-controls="nav-menu" aria-expanded="false">
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                </button>

                <nav id="nav-menu" class="nav" aria-hidden="true">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="<?php echo esc_url(home_url('/')) ?>" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="<?php echo esc_url(home_url('/about/')) ?>" class="nav__link">Profile</a></li>
                        <li class="nav__item">
                            <a href="<?php echo esc_url(home_url('/')); ?>#blog" class="nav__link">Blog</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>