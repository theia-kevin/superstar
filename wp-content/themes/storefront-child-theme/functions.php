<?php

require get_stylesheet_directory() . '/inc/helpers.php';

if (class_exists('WooCommerce')) {
    require get_stylesheet_directory() . '/inc/woocommerce.php';
}

//function sf_child_theme_dequeue_style()
//{
//    wp_dequeue_style('storefront-style');
//    wp_dequeue_style('storefront-woocommerce-style');
//}
//
//add_action('wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999);

function enqueueScripts()
{
    $mix_manifest = (array)json_decode(file_get_contents(__DIR__ . '/mix-manifest.json'));

    wp_enqueue_style('app-css', get_stylesheet_directory_uri() . $mix_manifest['/public/css/app.css']);
    wp_enqueue_script('app-js', get_stylesheet_directory_uri() . $mix_manifest['/public/js/app.js'], [], false, true);
}

add_action('wp_enqueue_scripts', 'enqueueScripts');

function modifyAdminLoginImages()
{
    ?>
    <style type="text/css">
        body {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/public/images/admin-bg.jpg) !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: bottom left !important;
        }

        #login h1 a {
            background-color: #ffffff;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/public/images/admin-logo.png) !important;
            background-size: auto;
            margin: 0;
            width: 100%;
        }
    </style>
    <?php
}

add_action('login_enqueue_scripts', 'modifyAdminLoginImages');

function hideAdminBar()
{
    add_filter('show_admin_bar', '__return_false');
}

add_action('after_setup_theme', 'hideAdminBar');

function insertCSSClassToBodyTag($classes)
{

    $classes[] = '';

    return $classes;
}

add_filter('body_class', 'insertCSSClassToBodyTag');

function insertActiveClassToCurrentMenuItem($classes)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'insertActiveClassToCurrentMenuItem', 10, 2);

function disableCommentsOnBackend()
{
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}

add_action('admin_init', 'disableCommentsOnBackend');

function hideCommentsOnFrontend()
{
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);
}

add_action('after_setup_theme', 'hideCommentsOnFrontend');

function hideExistingComments()
{
    add_filter('comments_array', '__return_empty_array', 10, 2);
}

add_action('after_setup_theme', 'hideExistingComments');

function removeCommentsPageOnMenu()
{
    remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'removeCommentsPageOnMenu');

function removeCommentLinksFromAdminBar()
{
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}

add_action('init', 'removeCommentLinksFromAdminBar');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        [
            'menu_title' => 'CMS',
            'page_title' => 'CMS',
            'menu_slug'  => 'cms',
            'redirect'   => false
        ]
    );

//    acf_add_options_sub_page(
//        [
//            'menu_title'  => 'Header',
//            'page_title'  => 'Header',
//            'menu_slug'   => 'header',
//            'parent_slug' => 'cms',
//        ]
//    );
//
//    acf_add_options_sub_page(
//        [
//            'menu_title'  => 'Footer',
//            'page_title'  => 'Footer',
//            'menu_slug'   => 'footer',
//            'parent_slug' => 'cms',
//        ]
//    );
}
