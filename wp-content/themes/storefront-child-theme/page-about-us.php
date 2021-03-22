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
    <div class="container mx-auto mb-[200px] px-4">
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
