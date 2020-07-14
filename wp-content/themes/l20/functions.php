<?php

//コンテンツ幅を設定
if (!isset($content_width)) {
    $content_width = 723;
}

function custom_theme_setup()
{
    //RSSフィードの追加
    add_theme_support('automatic-feed-links');
    //タイトルタグを動的に表示
    add_theme_support('title-tag');
    //ブロックエディター用のCSSをONに
    add_theme_support('wp-block-styles');
    //埋め込みコンテンツをレスポンシブル対応に
    add_theme_support('responsive-embeds');
    //アイキャッチ画像を有効か
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(231, 177, false);
    //カスタムメニュー有効化
    register_nav_menus(
        array(
            'globalnav' => 'グローバルナビゲーション',
        )
    );
}
add_action('after_setup_theme', 'custom_theme_setup');

function myportfolio_scripts()
{
    wp_enqueue_style('my', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'myportfolio_scripts');

function custom_widget_register()
{
    register_sidebar(array(
        'name' => 'サイドバーウィジェットエリア',
        'id' => 'sidebar-widget',
        'description' => 'ブログページのサイドバーに表示されます。',
        'before_widget' => '<div id=%1$s" class="c-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="c-widget__title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'custom_widget_register');
