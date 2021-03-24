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
    <div class="container mx-auto mb-[100px] px-4">
        <div class="font-jumble text-[60px] xl:text-[120px] text-blue-01 leading-[60px] xl:leading-[120px]"><?php the_field('our_programmes_title'); ?></div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <?php
        $i = 0;
        foreach (get_field('our_programmes_products') as $our_programmes_product) {
            if ($i % 2) {
                ?>
                <div class="grid grid-cols-12 mb-[100px]">
                    <div class="col-span-12 xl:col-start-8 pb-[40px] order-0 xl:order-0">
                        <div class="font-jumble text-[60px] text-red-02 text-left leading-[60px] w-[450px]"><?php echo $our_programmes_product['our_programmes_product_title']; ?></div>
                    </div>
                    <div class="col-span-12 xl:col-span-6 order-2 xl:order-1">
                        <div class="font-sofia-pro-medium text-[36px] text-red-02 pb-[30px]"><?php echo $our_programmes_product['our_programmes_product_subtitle']; ?></div>
                        <div class="font-sofia-pro-light text-[14px] text-grey-02 pb-[60px]"><?php echo $our_programmes_product['our_programmes_content']; ?></div>
                        <a class="btn-blue" href="<?php echo $our_programmes_product['our_programmes_link_url']; ?>"><?php echo $our_programmes_product['our_programmes_product_link_label']; ?></a>
                    </div>
                    <div class="col-span-12 xl:col-span-6 order-1 xl:order-2 flex items-start justify-end">
                        <img class="object-contain" src="<?php echo $our_programmes_product['our_programmes_product_image']['url']; ?>" alt="">
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="grid grid-cols-12 mb-[100px]">
                    <div class="col-span-12 pb-[40px] order-0 xl:order-0">
                        <div class="font-jumble text-[60px] text-red-02 text-left leading-[60px]"><?php echo $our_programmes_product['our_programmes_product_title']; ?></div>
                    </div>
                    <div class="col-span-12 xl:col-span-6 order-1 xl:order-1 flex items-start justify-start">
                        <img class="object-contain" src="<?php echo $our_programmes_product['our_programmes_product_image']['url']; ?>" alt="">
                    </div>
                    <div class="col-span-12 xl:col-span-6 order-2 xl:order-2">
                        <div class="font-sofia-pro-medium text-[36px] text-red-02 pb-[30px]"><?php echo $our_programmes_product['our_programmes_product_subtitle']; ?></div>
                        <div class="font-sofia-pro-light text-[14px] text-grey-02 pb-[60px]"><?php echo $our_programmes_product['our_programmes_content']; ?></div>
                        <a class="btn-blue" href="<?php echo $our_programmes_product['our_programmes_link_url']; ?>"><?php echo $our_programmes_product['our_programmes_product_link_label']; ?></a>
                    </div>
                </div>
                <?php
            }
            ?>
            <?php
            $i++;
        }
        ?>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 flex items-start">
                <div class="font-jumble text-[120px] text-green-02"><?php the_field('ages_title'); ?></div>
            </div>
            <div class="col-span-12 xl:col-span-6 flex items-end flex-wrap">
                <div class="font-sofia-pro-medium text-[22px] xl:text-[36px] text-green-02 mr-[60px]"><?php the_field('ages_subtitle'); ?></div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12 gap-y-[60px] gap-x-[30px]">
            <?php
            foreach (get_field('ages_products') as $area_product) {
                ?>
                <div class="col-span-12 md:col-span-6 xl:col-span-3">
                    <div class="relative">
                        <img class="object-contain w-full" src="<?php echo $area_product['ages_product_image']['url']; ?>" alt="">
                        <div class="w-full absolute top-[45px] left-0 text-center">
                            <div class="font-jumble text-[20px] uppercase" style="color: <?php echo $area_product['ages_product_title_colour']; ?>;"><?php echo $area_product['ages_product_title']; ?></div>
                        </div>
                        <div class="w-full absolute bottom-[120px] left-0">
                            <div class="w-[250px] mx-auto text-center">
                                <div class="font-sofia-pro-light text-[14px] text-grey-01"><?php echo wp_trim_words($area_product['ages_product_content'],
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
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4" x-data="{ tab: '<?php echo get_field('why_us_products')[0]['why_us_product_number']; ?>' }">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6">
                <?php
                foreach (get_field('why_us_products') as $why_us_product) {
                    ?>
                    <div x-show="tab === '<?php echo $why_us_product['why_us_product_number']; ?>'" style="display: none;">
                        <img class="object-contain" src="<?php echo $why_us_product['why_us_product_image']['url']; ?>" alt="">
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-span-12 xl:col-start-9 xl:col-span-6">
                <div class="flex items-end h-full">
                    <div class="flex flex-col relative">
                        <div class="font-jumble text-[120px] text-orange-01 xl:pb-[100px]"><?php the_field('why_us_title'); ?></div>
                        <?php
                        foreach (get_field('why_us_products') as $why_us_product) {
                            ?>
                            <div class="self-start cursor-pointer mb-[15px] text-black transition-all duration-300 hover:text-orange-01 h-[35px] hover:overflow-y-hidden" x-on:mouseenter.once="tab = '<?php echo $why_us_product['why_us_product_number']; ?>'">
                                <span class="font-jumble text-[26px] transition-all duration-300 hover:font-jumble hover:text-[27px]"><?php echo $why_us_product['why_us_product_number']; ?></span>
                                <span class="font-sofia-pro-medium text-[22px] transition-all duration-300 hover:font-jumble hover:text-[27px]"><?php echo $why_us_product['why_us_product_title']; ?></span>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="absolute bottom-[0px] left-[-180px]">
                            <img class="object-contain" src="<?php echo get_field('why_us_product_arrow_image')['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12 gap-y-[60px] xl:gap-[60px]">
            <div class="col-span-12 xl:col-start-2 xl:col-span-5">
                <div class="font-sofia-pro-light text-[14px] text-grey-02">
                    <?php the_field('why_us_content_1'); ?>
                </div>
            </div>
            <div class="col-span-12 xl:col-start-7 xl:col-span-5">
                <div class="font-sofia-pro-light text-[14px] text-grey-02">
                    <?php the_field('why_us_content_2'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/content', 'news'); ?>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
