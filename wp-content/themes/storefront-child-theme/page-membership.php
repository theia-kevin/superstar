<?php
get_header();
?>
    <div class="absolute z-0 h-[300px] xl:h-[500px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
        </div>
    </div>
    <div class="pt-[100px] xl:pt-[200px] mb-[100px]"></div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12 h-[150px]">
            <div class="col-span-12 xl:col-span-6 flex items-start">
                <div class="font-jumble text-[53px] xl:text-[70px] text-orange-01 uppercase"><?php the_field('standard_fees_title'); ?></div>
            </div>
            <div class="col-span-12 xl:col-start-7 xl:col-span-6 flex items-end">
                <div class="grid grid-cols-12">
                    <div class="col-span-8 flex items-center mr-[60px]">
                        <div class="font-sofia-pro-medium text-[22px] xl:text-[36px] text-orange-01"><?php the_field('standard_fees_subtitle'); ?></div>
                    </div>
                    <div class="col-span-4 flex items-center">
                        <a class="btn-yellow" href="<?php the_field('standard_fees_link_url'); ?>"><?php the_field('standard_fees_link_label'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] px-4">
        <div class="grid grid-cols-12 gap-y-[60px] xl:gap-y-0">
            <div class="col-span-12 xl:col-start-2 xl:col-span-4">
                <div class="font-jumble text-[60px] text-orange-01 mb-[30px]"><?php the_field('playground_title'); ?></div>
                <div class="font-jumble text-[22px] text-red-02 mb-[15px]"><?php the_field('playground_promotion_title'); ?></div>
                <div class="font-sofia-pro-light text-[16px] text-red-02"><?php the_field('playground_promotion_content'); ?></div>
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div class="relative inline-block">
                    <img class="object-contain" src="<?php echo get_field('playground_pricing_image')['url']; ?>" alt="">
                    <div class="absolute top-[100px] xl:top-[120px] left-0 w-full">
                        <div class="w-[300px] xl:w-[400px] mx-auto">
                            <div class="flex justify-between border-b-2 border-white xl:mb-[15px]">
                                <div class="font-jumble text-[22px] text-white"><?php the_field('playground_category_title'); ?></div>
                                <div class="font-jumble text-[22px] text-white"><?php the_field('playground_price_title'); ?></div>
                            </div>
                            <?php
                            foreach (get_field('playground_catalog_1') as $playground_catalog_1) {
                                ?>
                                <div class="flex justify-between">
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $playground_catalog_1['playground_catalog_1_title']; ?></div>
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $playground_catalog_1['playground_catalog_1_price']; ?></div>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="xl:pt-[15px] pb-[15px] xl:pb-[30px]">
                                <?php
                                foreach (get_field('playground_catalog_2') as $playground_catalog_2) {
                                    ?>
                                    <div class="flex justify-between">
                                        <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $playground_catalog_2['playground_catalog_2_title']; ?></div>
                                        <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $playground_catalog_2['playground_catalog_2_price']; ?></div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="flex justify-between xl:mb-[15px]">
                                <div class="font-jumble text-[22px] text-white"><?php the_field('playground_extras_title'); ?></div>
                            </div>
                            <?php
                            foreach (get_field('playground_catalog_3') as $playground_catalog_3) {
                                ?>
                                <div class="flex justify-between">
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $playground_catalog_3['playground_catalog_3_title']; ?></div>
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $playground_catalog_3['playground_catalog_3_price']; ?></div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12 gap-y-[60px] xl:gap-y-0">
            <div class="col-span-12 xl:col-span-6 order-1 xl:order-0">
                <div class="relative inline-block">
                    <img class="object-contain" src="<?php echo get_field('education_pricing_image')['url']; ?>" alt="">
                    <div class="absolute top-[100px] xl:top-[120px] left-0 w-full">
                        <div class="w-[300px] xl:w-[400px] mx-auto">
                            <div class="flex justify-between border-b-2 border-white xl:mb-[15px]">
                                <div class="font-jumble text-[22px] text-white"><?php the_field('education_category_title'); ?></div>
                                <div class="font-jumble text-[22px] text-white"><?php the_field('education_price_title'); ?></div>
                            </div>
                            <?php
                            foreach (get_field('education_catalog_1') as $education_catalog_1) {
                                ?>
                                <div class="flex justify-between">
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $education_catalog_1['education_catalog_1_title']; ?></div>
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $education_catalog_1['education_catalog_1_price']; ?></div>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="xl:pt-[15px] pb-[15px] xl:pb-[30px]">
                                <?php
                                foreach (get_field('education_catalog_2') as $education_catalog_2) {
                                    ?>
                                    <div class="flex justify-between">
                                        <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $education_catalog_2['education_catalog_2_title']; ?></div>
                                        <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $education_catalog_2['education_catalog_2_price']; ?></div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="flex justify-between xl:mb-[15px]">
                                <div class="font-jumble text-[22px] text-white"><?php the_field('education_extras_title'); ?></div>
                            </div>
                            <?php
                            foreach (get_field('education_catalog_3') as $education_catalog_3) {
                                ?>
                                <div class="flex justify-between">
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $education_catalog_3['education_catalog_3_title']; ?></div>
                                    <div class="font-sofia-pro-light text-[16px] text-white"><?php echo $education_catalog_3['education_catalog_3_price']; ?></div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-start-8 xl:col-span-6 order-0 xl:order-1">
                <div class="font-jumble text-[60px] text-orange-01 mb-[30px]"><?php the_field('education_title'); ?></div>
                <div class="font-sofia-pro-light text-[16px] text-grey-02"><?php the_field('education_content'); ?></div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 flex justify-center">
                <img class="object-contain" src="<?php echo get_field('memberships_image')['url']; ?>" alt="">
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div class="font-jumble text-[53px] xl:text-[70px] text-orange-01 uppercase"><?php the_field('memberships_title'); ?></div>
                <div class="font-sofia-pro-medium text-[22px] xl:text-[36px] text-orange-01 mb-[30px]"><?php the_field('memberships_subtitle'); ?></div>
                <div class="font-sofia-pro-light text-[14px] text-grey-02"><?php the_field('memberships_content'); ?></div>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/content', 'news'); ?>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
