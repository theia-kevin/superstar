<?php
get_header();
?>
    <div class="pt-[100px] xl:pt-[200px]"></div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('banner_title'); ?></p>
        <p><?php the_field('banner_content'); ?></p>
        <p><?php echo get_field('banner_image')['url']; ?></p>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('explore_title'); ?></p>
        <p><?php the_field('explore_subtitle'); ?></p>
        <p><?php the_field('explore_content_1'); ?></p>
        <?php
        foreach (get_field('explore_products') as $explore_product) {
            ?>
            <p><?php echo $explore_product['explore_product_number']; ?></p>
            <p><?php echo $explore_product['explore_product_title']; ?></p>
            <p><?php echo $explore_product['explore_product_image']['url']; ?></p>
            <?php
        }
        ?>
        <p><?php the_field('explore_content_2'); ?></p>
        <p><?php the_field('explore_content_3'); ?></p>
        <p><?php echo get_field('explore_image_1')['url']; ?></p>
        <p><?php echo get_field('explore_image_2')['url']; ?></p>
        <p><?php echo get_field('explore_image_3')['url']; ?></p>
        <p><?php echo get_field('explore_image_4')['url']; ?></p>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('areas_title'); ?></p>
        <p><?php the_field('areas_subtitle'); ?></p>
        <?php
        foreach (get_field('areas_products') as $area_product) {
            ?>
            <p><?php echo $area_product['areas_product_title']; ?></p>
            <p><?php echo $area_product['areas_product_subtitle']; ?></p>
            <p><?php echo $area_product['areas_product_image']['url']; ?></p>
            <?php
        }
        ?>
    </div>
    <div class="h-[3000px] xl:h-[1500px] bg-no-repeat bg-cover bg-center flex items-center mb-[200px]" style="background-image: url('<?php echo get_field('playground_safety_background')['url']; ?>');">
        <div class="container mx-auto px-4">
            <div class="font-jumble text-[45px] text-white uppercase text-center pb-[80px]"><?php the_field('playground_safety_title'); ?></div>
            <div class="grid grid-cols-12 gap-y-[60px] gap-x-[30px]">
                <?php
                foreach (get_field('playground_safety_products') as $playground_safety_product) {
                    ?>
                    <div class="col-span-12 xl:col-span-4 text-center">
                        <img class="mx-auto object-contain" src="<?php echo $playground_safety_product['playground_safety_product_image']['url']; ?>" alt="">
                        <div class="font-jumble text-[14px] text-white uppercase0 pt-[30px] pb-[15px] uppercase"><?php echo $playground_safety_product['playground_safety_product_title']; ?></div>
                        <div class="font-sofia-pro-light text-[14px] text-white"><?php echo $playground_safety_product['playground_safety_product_content']; ?></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
