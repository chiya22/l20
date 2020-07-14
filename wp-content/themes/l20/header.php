<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body>
    <!-- ▼ ヘッダー : 開始-->
    <header class="l-header">
        <div class="c-header-description"><?php bloginfo('description') ?></div>
        <a class="c-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <div class="c-logo__image">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/logo.png" alt="<?php bloginfo('name') ?>">
            </div>
            <div class="c-logo__text"><?php bloginfo('name') ?></div>
        </a>

        <?php wp_nav_menu(
            array(
                'theme_location' => 'globalnav',
                'container' => 'div',
                'container_class' => 'c-global-nav'
            )
        ); ?>
    </header>
    <!-- ▲ ヘッダー : 終了-->