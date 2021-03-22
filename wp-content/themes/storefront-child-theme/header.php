<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
do_action('storefront_before_site');
$menu_items = generateCustomMenu('primary');
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
?>
<div id="page" class="hfeed site">
    <?php do_action('storefront_before_header'); ?>
    <div class="relative z-50 hidden xl:block h-[300px] bg-no-repeat bg-cover bg-center" style="background-image: url('<?php echo get_field('header_background',
        'option')['url']; ?>');">
        <div class="container mx-auto px-4 flex">
            <div class="grid grid-cols-11 w-full">
                <div class="col-span-4 flex justify-between pt-[90px]">
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 hover:transform hover:-translate-y-1 hover:translate-x-1 <?php echo $menu_items[0]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[0]->url; ?>"><?php echo $menu_items[0]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 hover:transform hover:-translate-y-1 hover:translate-x-1 <?php echo $menu_items[1]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[1]->url; ?>"><?php echo $menu_items[1]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 hover:transform hover:-translate-y-1 hover:translate-x-1 <?php echo $menu_items[2]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[2]->url; ?>"><?php echo $menu_items[2]->title; ?></a>
                </div>
                <div class="col-span-3 pt-[30px] animate__animated animate__zoomInDown">
                    <a href="<?php echo home_url('/'); ?>">
                        <img class="mx-auto transition-all duration-300 hover:transform hover:scale-125" src="<?php echo getCustomLogo()[0]; ?>" alt="">
                    </a>
                </div>
                <div class="col-span-4 flex justify-between pt-[90px]">
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 hover:transform hover:-translate-y-1 hover:translate-x-1 <?php echo $menu_items[3]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[3]->url; ?>"><?php echo $menu_items[3]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 hover:transform hover:-translate-y-1 hover:translate-x-1 <?php echo $menu_items[4]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[4]->url; ?>"><?php echo $menu_items[4]->title; ?></a>
                    <a class="btn-yellow self-start" href="<?php echo $menu_items[5]->url; ?>"><?php echo $menu_items[5]->title; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative z-50 block xl:hidden h-[200px] bg-no-repeat bg-cover bg-left-bottom" style="background-image: url('<?php echo get_field('header_background',
        'option')['url']; ?>');" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
        <div class="container mx-auto px-4 grid grid-cols-3">
            <div></div>
            <a class="flex justify-center" href="<?php echo home_url('/'); ?>">
                <img class="h-[100px] self-center my-[15px] object-contain transition-all duration-300 hover:transform hover:scale-125" src="<?php echo getCustomLogo()[0]; ?>" alt="">
            </a>
            <div class="cursor-pointer flex items-center justify-end" @click.stop="sidebarOpen = true">
                <svg class="h-10 w-10 text-white transition-all duration-300 hover:text-yellow-01 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </div>
        </div>
        <div x-show="sidebarOpen" style="display: none;">
            <div class="fixed inset-0 flex z-40">
                <div class="fixed inset-0" @click="sidebarOpen = false" x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div class="absolute inset-0 bg-purple-01 opacity-75"></div>
                </div>
                <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-blue-02" x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                    <div class="absolute top-0 right-0 m-[15px]">
                        <div class="cursor-pointer" @click.stop="sidebarOpen = false">
                            <svg class="h-10 w-10 text-white transition-all duration-300 hover:text-yellow-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                    </div>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap my-[10px] mx-[30px] transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 h-[30px] hover:overflow-y-hidden  <?php echo $menu_items[0]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[0]->url; ?>"><?php echo $menu_items[0]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap my-[10px] mx-[30px] transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 h-[30px] hover:overflow-y-hidden  <?php echo $menu_items[1]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[1]->url; ?>"><?php echo $menu_items[1]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap my-[10px] mx-[30px] transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 h-[30px] hover:overflow-y-hidden  <?php echo $menu_items[2]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[2]->url; ?>"><?php echo $menu_items[2]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap my-[10px] mx-[30px] transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 h-[30px] hover:overflow-y-hidden  <?php echo $menu_items[3]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[3]->url; ?>"><?php echo $menu_items[3]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap my-[10px] mx-[30px] transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 h-[30px] hover:overflow-y-hidden  <?php echo $menu_items[4]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[4]->url; ?>"><?php echo $menu_items[4]->title; ?></a>
                    <a class="self-start font-sofia-pro-light text-[18px] text-white uppercase whitespace-nowrap my-[10px] mx-[30px] transition-all duration-300 hover:font-jumble hover:text-[22px] hover:text-yellow-01 h-[30px] hover:overflow-y-hidden  <?php echo $menu_items[5]->url ==  $current_url . '/' ? 'font-sofia-pro text-yellow-01' : ''; ?>" href="<?php echo $menu_items[5]->url; ?>"><?php echo $menu_items[5]->title; ?></a>
                </div>
            </div>
        </div>
    </div>
    <?php do_action('storefront_before_content'); ?>
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full <?php echo $pagename; ?>">
<?php do_action('storefront_content_top');
