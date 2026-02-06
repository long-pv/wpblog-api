<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// Register Custom Post Types: Khóa học & Tuyển dụng
add_action('init', function () {

    // ===== Khóa học =====
    register_post_type('khoa_hoc', [
        'labels' => [
            'name'          => 'Khóa học',
            'singular_name' => 'Khóa học',
            'add_new_item'  => 'Thêm khóa học',
            'edit_item'     => 'Sửa khóa học',
        ],
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'rewrite'       => ['slug' => 'khoa-hoc'],
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'  => true, // bắt buộc nếu dùng Gutenberg / API
    ]);

    // ===== Tuyển dụng =====
    register_post_type('tuyen_dung', [
        'labels' => [
            'name'          => 'Tuyển dụng',
            'singular_name' => 'Tuyển dụng',
            'add_new_item'  => 'Thêm tin tuyển dụng',
            'edit_item'     => 'Sửa tin tuyển dụng',
        ],
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-businessman',
        'rewrite'       => ['slug' => 'tuyen-dung'],
        'supports'      => ['title', 'editor', 'excerpt'],
        'show_in_rest'  => true,
    ]);
});
