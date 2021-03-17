<?php

function generateCustomMenu($location)
{
    $menu_locations = get_nav_menu_locations();

    $menu_id = $menu_locations[$location];

    return wp_get_nav_menu_items($menu_id);
}
