</div>
</div>
<?php
do_action('storefront_before_footer');
$menu_items = generateCustomMenu('primary');
?>
<div class="hidden xl:block h-[400px] bg-no-repeat bg-cover bg-center" style="background-image: url('<?php echo get_field('footer_background',
    'option')['url']; ?>');">
    <div class=" flex items-end">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12">
                <div class="col-span-3 relative">
                    <img class="absolute -top-8 left-0" src="<?php echo getCustomLogo()[0]; ?>" alt="">
                </div>
                <div class="col-span-4 flex flex-col">
                    <div class="font-jumble text-[16px] text-white uppercase"><?php echo get_field('footer_quick_links_label',
                            'option'); ?></div>
                    <div class="flex">
                        <div class="flex flex-col pr-[60px]">
                            <a class="font-sofia-pro-light text-[14px] text-white" href="<?php echo $menu_items[0]->url; ?>"><?php echo $menu_items[0]->title; ?></a>
                            <a class="font-sofia-pro-light text-[14px] text-white" href="<?php echo $menu_items[1]->url; ?>"><?php echo $menu_items[1]->title; ?></a>
                            <a class="font-sofia-pro-light text-[14px] text-white" href="<?php echo $menu_items[2]->url; ?>"><?php echo $menu_items[2]->title; ?></a>
                        </div>
                        <div class="flex flex-col">
                            <a class="font-sofia-pro-light text-[14px] text-white" href="<?php echo $menu_items[3]->url; ?>"><?php echo $menu_items[3]->title; ?></a>
                            <a class="font-sofia-pro-light text-[14px] text-white" href="<?php echo $menu_items[4]->url; ?>"><?php echo $menu_items[4]->title; ?></a>
                            <a class="font-sofia-pro-light text-[14px] text-white" href="<?php echo $menu_items[5]->url; ?>"><?php echo $menu_items[5]->title; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 flex flex-col">
                    <div class="font-jumble text-[16px] text-white uppercase"><?php echo get_field('footer_locations_label',
                            'option'); ?></div>
                    <div class="flex">
                        <div class="font-sofia-pro-light text-[14px] text-white">
                            <?php echo get_field('footer_locations_content', 'option'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 flex items-end">
                    <?php
                    foreach (get_field('footer_social_icons', 'options') as $footer_social_icon) {
                        ?>
                        <a class="block mr-[30px]" href="<?php echo $footer_social_icon['footer_social_url_link']; ?>">
                            <img src="<?php echo $footer_social_icon['footer_social_icon_image']['url']; ?>" alt="">
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="grid grid-cols-12 pt-[60px] pb-[30px]">
                <div class="col-span-6">
                    <div class="font-jumble text-[16px] text-white uppercase"><?php echo get_field('footer_copyright',
                            'option'); ?></div>
                </div>
                <div class="col-span-2">
                    <a class="font-jumble text-[16px] text-white uppercase" href="<?php echo get_field('footer_terms_and_conditions_url',
                        'option'); ?>"><?php echo get_field('footer_terms_and_conditions_label', 'option'); ?></a>
                </div>
                <div class="col-span-2">
                    <a class="font-jumble text-[16px] text-white uppercase" href="<?php echo get_field('footer_privacy_policy_url',
                        'option'); ?>"><?php echo get_field('footer_privacy_policy_label', 'option'); ?></a>
                </div>
                <div class="col-span-2 flex justify-end">
                    <a class="font-jumble text-[16px] text-white uppercase" href="<?php echo get_field('footer_designed_by_url',
                        'option'); ?>"><?php echo get_field('footer_designed_by_label', 'option'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php do_action('storefront_after_footer'); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
