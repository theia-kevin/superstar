<?php
get_header();
?>
    <div class="absolute z-0 h-[600px] xl:h-[900px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 flex flex-col items-start justify-center">
                <div class="font-jumble text-[54px] xl:text-[72px] text-white uppercase leading-[60px] xl:leading-[80px] animate__animated animate__bounce animate__delay-1s animate__repeat-3"><?php the_field('banner_title'); ?></div>
                <div class="font-sofia-pro-light text-[14px] xl:text-[18px] text-white leading-[19px] xl:leading-[25px] py-[30px]"><?php the_field('banner_content'); ?></div>
                <a class="btn-blank-large-white" href="<?php the_field('banner_link_url'); ?>"><?php the_field('banner_link_label'); ?></a>
            </div>
        </div>
    </div>
    <div class="pt-[400px] xl:pt-[600px] mb-[100px]"></div>
    <div class="container mx-auto mb-[100px] xl:mb-[50px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-start-2 xl:col-span-5">
                <div class="font-jumble text-[180px] text-blue-01 leading-none"><?php the_field('who_title'); ?></div>
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div class="font-sofia-pro-medium text-[36px] text-blue-01 pt-[0px] xl:pt-[100px] pb-[30px] leading-[40px]"><?php the_field('who_subtitle'); ?></div>
                <div class="font-sofia-pro-light text-[14px] text-grey-02 pb-[50px]"><?php the_field('who_content'); ?></div>
                <div class="inline-flex">
                    <a class="btn-yellow mr-[30px]" href="<?php the_field('who_link_url_1'); ?>"><?php the_field('who_link_label_1'); ?></a>
                    <a class="btn-blue" href="<?php the_field('who_link_url_2'); ?>"><?php the_field('who_link_label_2'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4" x-data="{ tab: '<?php echo get_field('who_products')[0]['who_product_number']; ?>' }">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 flex items-end order-1 xl:order-0">
                <?php
                foreach (get_field('who_products') as $who_product) {
                    ?>
                    <div x-show="tab === '<?php echo $who_product['who_product_number']; ?>'" style="display: none;">
                        <img class="object-contain" src="<?php echo $who_product['who_product_image']['url']; ?>" alt="">
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-span-12 xl:col-start-8 xl:col-span-6 order-0 xl:order-1">
                <div class="flex items-center h-full">
                    <div class="flex flex-col relative">
                        <?php
                        foreach (get_field('who_products') as $who_product) {
                            ?>
                            <div class="self-start cursor-pointer mb-[15px] text-black transition-all duration-300 hover:text-blue-01 h-[35px] hover:overflow-y-hidden" x-on:mouseenter.once="tab = '<?php echo $who_product['who_product_number']; ?>'">
                                <span class="font-jumble text-[26px] transition-all duration-300 hover:font-jumble hover:text-[27px]"><?php echo $who_product['who_product_number']; ?></span>
                                <span class="font-sofia-pro-medium text-[22px] transition-all duration-300 hover:font-jumble hover:text-[27px]"><?php echo $who_product['who_product_title']; ?></span>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="absolute bottom-[60px] left-[-120px]">
                            <img class="object-contain" src="<?php echo get_field('who_arrow_image')['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 order-1 xl:order-0">
                <img class="object-contain pt-[100px]" src="<?php echo get_field('what_image')['url']; ?>" alt="">
            </div>
            <div class="col-span-12 xl:col-span-6 order-0 xl:order-1">
                <div class="font-jumble text-[180px] text-red-02 leading-none"><?php the_field('what_title'); ?></div>
                <div class="font-sofia-pro-medium text-[36px] text-red-02 pb-[30px] leading-[40px]"><?php the_field('what_subtitle'); ?></div>
                <div class="font-sofia-pro-light text-[14px] text-grey-02"><?php the_field('what_content'); ?></div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12 gap-y-[60px] gap-x-[30px]">
            <?php
            foreach (get_field('what_products') as $area_product) {
                ?>
                <div class="col-span-12 md:col-span-6 xl:col-span-3">
                    <div class="relative">
                        <img class="object-contain w-full" src="<?php echo $area_product['what_product_image']['url']; ?>" alt="">
                        <div class="w-full absolute top-[45px] left-0 text-center">
                            <div class="font-jumble text-[20px] uppercase" style="color: <?php echo $area_product['what_product_title_colour']; ?>;"><?php echo $area_product['what_product_title']; ?></div>
                        </div>
                        <div class="w-full absolute bottom-[120px] left-0">
                            <div class="w-[250px] mx-auto text-center">
                                <div class="font-sofia-pro-light text-[14px] text-grey-01"><?php echo wp_trim_words($area_product['what_product_content'],
                                        20); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php get_template_part('template-parts/content', 'news'); ?>
    <div class="container mx-auto mb-[50px] xl:mb-[100px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-5 flex items-start">
                <div class="font-jumble text-[180px] text-green-02"><?php the_field('take_title'); ?></div>
            </div>
            <div class="col-span-12 xl:col-span-6 flex items-end flex-wrap">
                <div class="font-sofia-pro-medium text-[36px] xl:text-[36px] text-green-02 pb-[30px] xl:pt-[180px]"><?php the_field('take_subtitle'); ?></div>
                <div class="font-sofia-pro-light text-[14px] text-grey-02"><?php the_field('take_content'); ?></div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-0 mb-[100px] xl:mb-[200px] px-4">
        <div class="inline-grid grid-cols-2 grid-rows-4">
            <div class="row-start-1 row-span-2 xl:row-start-1 xl:row-span-3 flex items-end justify-end">
                <img class="object-contain" src="<?php echo get_field('take_image_1')['url']; ?>" alt="">
            </div>
            <div class="row-start-1 row-span-2 xl:row-start-1 xl:row-span-2 flex items-end justify-start">
                <img class="object-contain" src="<?php echo get_field('take_image_2')['url']; ?>" alt="">
            </div>
            <div class="row-start-3 row-span-2 xl:row-start-4 xl:row-span-2 flex items-start justify-end">
                <img class="object-contain" src="<?php echo get_field('take_image_3')['url']; ?>" alt="">
            </div>
            <div class="row-start-3 row-span-2 xl:row-start-3 xl:row-span-3 flex items-start justify-start">
                <img class="object-contain" src="<?php echo get_field('take_image_4')['url']; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-5 order-1 xl:order-0">
                <img class="object-obtain" src="<?php echo get_field('come_image')['url']; ?>" alt="">
            </div>
            <div class="col-span-12 xl:col-span-7 order-0 xl:order-1">
                <div class="font-jumble text-[180px] text-orange-01 leading-none xl:pt-[300px]"><?php the_field('come_title'); ?></div>
                <div class="font-jumble text-[45px] text-orange-01 uppercase pb-[30px]"><?php the_field('come_subtitle'); ?></div>
                <div class="inline-flex">
                    <a class="btn-yellow mr-[30px]" href="<?php the_field('come_link_url_1'); ?>"><?php the_field('come_link_label_1'); ?></a>
                    <a class="btn-blue" href="<?php the_field('come_link_url_2'); ?>"><?php the_field('come_link_label_2'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
