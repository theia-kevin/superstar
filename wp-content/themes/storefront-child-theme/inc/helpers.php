<?php

function generateCustomMenu($location): array
{
    $menu_locations = get_nav_menu_locations();

    $menu_id = $menu_locations[$location];

    return wp_get_nav_menu_items($menu_id);
}

function getCustomLogo(): array
{
    return wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
}
