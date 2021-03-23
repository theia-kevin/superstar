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
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <p><?php the_field('who_we_are_title_1'); ?></p>
        <p><?php the_field('who_we_are_subtitle_1'); ?></p>
        <p><?php the_field('who_we_are_content_1'); ?></p>
        <p><?php the_field('who_we_are_link_label_1'); ?></p>
        <p><?php the_field('who_we_are_link_url_1'); ?></p>
        <p><?php echo get_field('who_we_are_image_1')['url']; ?></p>
        <?php
        foreach (get_field('who_we_are_products', get_the_ID()) as $who_we_are_product) {
            ?>
            <p><?php echo $who_we_are_product['who_we_are_product_title']; ?></p>
            <p><?php echo $who_we_are_product['who_we_are_product_subtitle']; ?></p>
            <p><?php echo $who_we_are_product['who_we_are_product_image']['url']; ?></p>
            <?php
        }
        ?>
        <p><?php the_field('who_we_are_subtitle_2'); ?></p>
        <p><?php the_field('who_we_are_content_2'); ?></p>
        <p><?php the_field('who_we_are_link_label_2'); ?></p>
        <p><?php the_field('who_we_are_link_url_2'); ?></p>
        <p><?php echo get_field('who_we_are_image_2')['url']; ?></p>
    </div>
    <div class="container mx-auto mb-[100px] xl:mb-[200px] px-4">
        <p><?php the_field('our_values_title'); ?></p>
        <?php
        foreach (get_field('our_values_products', get_the_ID()) as $our_values_products) {
            ?>
            <p><?php echo $our_values_products['our_values_product_number']; ?></p>
            <p><?php echo $our_values_products['our_values_product_title']; ?></p>
            <p><?php echo $our_values_products['our_values_product_content']; ?></p>
            <?php
        }
        ?>
        <p><?php echo get_field('our_values_image')['url']; ?></p>
    </div>
<?php get_template_part('template-parts/content', 'news'); ?>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
