<?php
get_header();
?>
    <div class="absolute z-0 h-[600px] xl:h-[900px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 flex flex-col items-start justify-center">
                <div class="font-jumble text-[54px] xl:text-[72px] text-white uppercase leading-[60px] xl:leading-[80px] animate__animated animate__bounce animate__delay-1s animate__repeat-3"><?php the_field('banner_title'); ?></div>
                <div class="font-sofia-pro-light text-[14px] xl:text-[18px] text-white leading-[19px] xl:leading-[25px] py-[30px]"><?php the_field('banner_content'); ?></div>
            </div>
        </div>
    </div>
    <div class="pt-[400px] xl:pt-[600px] mb-[100px]"></div>
    <div class="container mx-auto mb-[50px] xl:mb-[100px] px-4">
        <div class="grid grid-cols-12 mb-[100px]">
            <div class="col-span-12 pb-[40px] order-0 xl:order-0">
                <div class="font-jumble text-[60px] text-red-02 text-left leading-[60px]"><?php the_field('who_we_are_title_1'); ?></div>
            </div>
            <div class="col-span-12 xl:col-span-6 order-1 xl:order-1">
                <div class="font-sofia-pro-medium text-[36px] text-red-02 pb-[30px]"><?php the_field('who_we_are_subtitle_1'); ?></div>
                <div class="font-sofia-pro-light text-[14px] text-grey-02 pb-[60px]"><?php the_field('who_we_are_content_1'); ?></div>
                <a class="btn-blue" href="<?php the_field('who_we_are_link_url_1'); ?>"><?php the_field('who_we_are_link_label_1'); ?></a>
            </div>
            <div class="col-span-12 xl:col-span-6 order-2 xl:order-2 flex items-start justify-end">
                <img class="object-contain" src="<?php echo get_field('who_we_are_image_1')['url']; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[50px] xl:mb-[100px] px-4">
        <div class="flex flex-wrap justify-center">
            <?php
            foreach (get_field('who_we_are_products', get_the_ID()) as $who_we_are_product) {
                ?>
                <div class="relative inline-block m-[30px]">
                    <img class="object-contain" src="<?php echo $who_we_are_product['who_we_are_product_image']['url']; ?>" alt="">
                    <div class="absolute inset-0 top-[15px]">
                        <div class="flex flex-col items-center">
                            <div class="font-jumble text-[60px] text-white"><?php echo $who_we_are_product['who_we_are_product_title']; ?></div>
                            <div class="font-sofia-pro-medium text-[24px] text-white"><?php echo $who_we_are_product['who_we_are_product_subtitle']; ?></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12 mb-[100px]">
            <div class="col-span-12 xl:col-span-6 order-1 xl:order-0 flex items-end justify-end xl:items-start xl:justify-start">
                <img class="object-contain" src="<?php echo get_field('who_we_are_image_2')['url']; ?>" alt="">
            </div>
            <div class="col-span-12 xl:col-span-6 order-0 xl:order-1 ">
                <div class="font-sofia-pro-medium text-[36px] text-red-02 pb-[30px]"><?php the_field('who_we_are_subtitle_2'); ?></div>
                <div class="font-sofia-pro-light text-[14px] text-grey-02 pb-[60px]"><?php the_field('who_we_are_content_2'); ?></div>
                <a class="btn-blue" href="<?php the_field('who_we_are_link_url_2'); ?>"><?php the_field('who_we_are_link_label_2'); ?></a>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-3 hidden xl:flex items-center justify-start">
                <img class="object-contain" src="<?php echo get_field('our_values_image')['url']; ?>" alt="">
            </div>
            <div class="col-span-12 xl:col-span-9">
                <div class="font-jumble text-[60px] text-blue-01 pb-[30px]"><?php the_field('our_values_title'); ?></div>
                <div class="flex flex-wrap">
                    <?php
                    foreach (get_field('our_values_products', get_the_ID()) as $our_values_products) {
                        ?>
                        <div class="w-1/2 pr-[30px] pb-[60px]">
                            <div class="font-jumble text-[21px] text-grey-02"><?php echo $our_values_products['our_values_product_number']; ?><?php echo $our_values_products['our_values_product_title']; ?></div>
                            <div class="font-sofia-pro-light text-[14px] text-grey-02 leading-[25px] pl-[15px]"><?php echo $our_values_products['our_values_product_content']; ?></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/content', 'news'); ?>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
