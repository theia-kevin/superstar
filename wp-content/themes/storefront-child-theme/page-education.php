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
        <p><?php the_field('our_programmes_title'); ?></p>
        <?php
        foreach (get_field('our_programmes_products') as $our_programmes_product) {
            ?>
            <p><?php echo $our_programmes_product['our_programmes_product_title']; ?></p>
            <p><?php echo $our_programmes_product['our_programmes_product_subtitle']; ?></p>
            <p><?php echo $our_programmes_product['our_programmes_content']; ?></p>
            <p><?php echo $our_programmes_product['our_programmes_product_link_label']; ?></p>
            <p><?php echo $our_programmes_product['our_programmes_link_url']; ?></p>
            <p><?php echo $our_programmes_product['our_programmes_product_image']['url']; ?></p>
            <?php
        }
        ?>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('ages_title'); ?></p>
        <p><?php the_field('ages_subtitle'); ?></p>
        <?php
            foreach(get_field('ages_products') as $ages_product) {
                ?>
                <p><?php echo $ages_product['ages_product_title']; ?></p>
                <p><?php echo $ages_product['ages_product_content']; ?></p>
                <p><?php echo $ages_product['ages_product_image']['url']; ?></p>
                <?php
            }
        ?>
    </div>
    <div class="container mx-auto mb-[200px] px-4">
        <p><?php the_field('why_us_title'); ?></p>
        <p><?php echo get_field('why_us_product_arrow_image')['url']; ?></p>
        <?php
        foreach (get_field('why_us_products') as $why_us_product) {
            ?>
            <p><?php echo $why_us_product['why_us_product_number'] ?></p>
            <p><?php echo $why_us_product['why_us_product_title'] ?></p>
            <p><?php echo $why_us_product['why_us_product_image'] ?></p>
            <?php
        }
        ?>
        <p><?php the_field('why_us_content_1'); ?></p>
        <p><?php the_field('why_us_content_2'); ?></p>
    </div>
<?php get_template_part('template-parts/content', 'news'); ?>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
