<?php
// 投稿時のアイキャッチ設定
add_theme_support('post-thumbnails');

// メニュー
register_nav_menus(
    array(
        'gloval-navigation' => 'グローバル',
    )
);

// お問い合わせフォームのbr等を削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
};