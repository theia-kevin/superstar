<?php
get_header();
?>
    <div class="pt-[100px] xl:pt-[200px]"></div>
    <div class="container mx-auto mb-[200px] px-4">
        <?php echo get_field('banner_image')['url']; ?>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('standard_fees_title'); ?></p>
        <p><?php the_field('standard_fees_subtitle'); ?></p>
        <p><?php the_field('standard_fees_link_label'); ?></p>
        <p><?php the_field('standard_fees_link_url'); ?></p>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('playground_title'); ?></p>
        <p><?php the_field('playground_promotion_title'); ?></p>
        <p><?php the_field('playground_promotion_content'); ?></p>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php echo get_field('playground_pricing_image')['url']; ?></p>
        <p><?php the_field('playground_category_title'); ?></p>
        <p><?php the_field('playground_price_title'); ?></p>
        <p><?php the_field('playground_extras_title'); ?></p>
        <?php
        foreach (get_field('playground_catalog_1') as $playground_catalog_1) {
            ?>
            <p><?php echo $playground_catalog_1['playground_catalog_1_title']; ?></p>
            <p><?php echo $playground_catalog_1['playground_catalog_1_price']; ?></p>
            <?php
        }
        ?>
        <?php
        foreach (get_field('playground_catalog_2') as $playground_catalog_2) {
            ?>
            <p><?php echo $playground_catalog_2['playground_catalog_2_title']; ?></p>
            <p><?php echo $playground_catalog_2['playground_catalog_2_price']; ?></p>
            <?php
        }
        ?>
        <?php
        foreach (get_field('playground_catalog_3') as $playground_catalog_3) {
            ?>
            <p><?php echo $playground_catalog_3['playground_catalog_3_title']; ?></p>
            <p><?php echo $playground_catalog_3['playground_catalog_3_price']; ?></p>
            <?php
        }
        ?>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('education_title'); ?></p>
        <p><?php the_field('education_content'); ?></p>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php echo get_field('education_pricing_image')['url']; ?></p>
        <p><?php the_field('education_category_title'); ?></p>
        <p><?php the_field('education_price_title'); ?></p>
        <p><?php the_field('education_extras_title'); ?></p>
        <?php
        foreach (get_field('education_catalog_1') as $education_catalog_1) {
            ?>
            <p><?php echo $education_catalog_1['education_catalog_1_title']; ?></p>
            <p><?php echo $education_catalog_1['education_catalog_1_price']; ?></p>
            <?php
        }
        ?>
        <?php
        foreach (get_field('education_catalog_2') as $education_catalog_2) {
            ?>
            <p><?php echo $education_catalog_2['education_catalog_2_title']; ?></p>
            <p><?php echo $education_catalog_2['education_catalog_2_price']; ?></p>
            <?php
        }
        ?>
        <?php
        foreach (get_field('education_catalog_3') as $education_catalog_3) {
            ?>
            <p><?php echo $education_catalog_3['education_catalog_3_title']; ?></p>
            <p><?php echo $education_catalog_3['education_catalog_3_price']; ?></p>
            <?php
        }
        ?>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('memberships_title'); ?></p>
        <p><?php the_field('memberships_subtitle'); ?></p>
        <p><?php the_field('memberships_content'); ?></p>
        <p><?php echo get_field('memberships_image')['url']; ?></p>
    </div>
<?php get_template_part('template-parts/content', 'news'); ?>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
