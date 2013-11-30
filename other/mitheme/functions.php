<?php
/* 注册自定义文章类型 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    //img
    register_post_type( 'news',
        array(
            'labels' => array(
                'name' => __( '评测' ),
                'singular_name' => __( 'news' ),
                'add_new' => _x('添加新评测', '评测'),
                'add_new_item' => __('添加新评测')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position'=>5,
            'taxonomies' => array('category')
        )
    );
    register_taxonomy( 'news_category',
        'news',
        array(
            'hierarchical' => true,
            'label' => '评测分类',
            'query_var' => true,
            'rewrite' => true
        )
    );

//激活文章缩略图
add_theme_support( 'post-thumbnails' );
}