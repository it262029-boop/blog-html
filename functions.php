<?php
# 初期設定（命令の名前は被らないようにする「例：mytheme_...」）
function mytheme_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('title-tag'); // <title>タグの出力をWordPressに任せる（必須）
    add_theme_support('automatic-feed-links'); // RSSフィードのリンクを自動出力（必須）
    add_theme_support('wp-block-styles'); // ブロックエディタの基本スタイルをテーマに適用（Gutenberg対応）
    add_theme_support('responsive-embeds'); // YouTubeなどの埋め込み動画をレスポンシブ対応にする

    // HTML5準拠のマークアップを有効化（現代のテーマ開発で必須）
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // 絵文字のスクリプトとスタイルを削除（読み込み速度向上）
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // セキュリティ強化
    remove_action('wp_head', 'wp_generator'); // WordPressのバージョン情報を削除
    remove_action('wp_head', 'rsd_link'); // EditURI（RSD）のリンクを削除
    remove_action('wp_head', 'wlwmanifest_link'); // wlwmanifest（Windows Live Writer）のリンクを削除
}
add_action('after_setup_theme', 'mytheme_setup');

/**
 * CSSとJavaScriptの読み込み
 */
function mytheme_enqueue_scripts()
{
    // CSSの読み込み
    wp_enqueue_style('my-reset', 'https://cdn.jsdelivr.net/npm/destyle.css/destyle.min.css');
    wp_enqueue_style('my-googlefont', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
    wp_enqueue_style('my-style', get_stylesheet_uri(), array('my-reset', 'my-googlefont'), filemtime(get_theme_file_path('/style.css')));

    // ★ JavaScript（script.js）の読み込み設定 ★
    if (file_exists(get_theme_file_path('/script.js'))) {
        wp_enqueue_script(
            'my-script',
            get_theme_file_uri('/script.js'),
            array(),
            filemtime(get_theme_file_path('/script.js')),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

function mytheme_resource_hints($urls, $relation_type)
{
    if ($relation_type === 'preconnect') {
        array_push($urls, array('rel' => 'preconnect', 'href' => 'https://fonts.googleapis.com'));
        array_push($urls, array('rel' => 'preconnect', 'href' => 'https://fonts.gstatic.com', 1 => 'crossorigin'));
    }
    return $urls;
}
add_filter('wp_resource_hints', 'mytheme_resource_hints', 10, 2);

function reorder_comment_field($fields)
{
    $new_fields = array(
        'author'  => $fields['author'],
        'email'   => $fields['email'],
        'url'     => $fields['url'],
        'cookies' => $fields['cookies'],
        'comment' => $fields['comment'],
    );

    return $new_fields;
}
add_filter('comment_form_fields', 'reorder_comment_field');


// カテゴリー一覧や検索結果から固定ページを除外して投稿（post）のみにする
function exclude_pages_from_archive($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_category() || $query->is_archive() || $query->is_search()) {
            $query->set('post_type', 'post');
        }
    }
}
add_action('pre_get_posts', 'exclude_pages_from_archive');


// アーカイブタイトルの「カテゴリー：」「タグ：」などの接頭辞を削除
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});
