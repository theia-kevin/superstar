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
            foreach(get_field('areas_products') as $area_product) {
                ?>
                <p><?php echo $area_product['areas_product_title']; ?></p>
                <p><?php echo $area_product['areas_product_subtitle']; ?></p>
                <p><?php echo $area_product['areas_product_image']['url']; ?></p>
                <?php
            }
        ?>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('playground_safety_title'); ?></p>
        <?php
        foreach (get_field('playground_safety_products') as $playground_safety_product) {
            ?>
            <p><?php echo $playground_safety_product['playground_safety_product_title']; ?></p>
            <p><?php echo $playground_safety_product['playground_safety_product_content']; ?></p>
            <p><?php echo $playground_safety_product['playground_safety_product_image']['url']; ?></p>
            <?php
        }
        ?>
    </div>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
