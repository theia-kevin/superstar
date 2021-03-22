<?php
get_header();
?>
    <div class="absolute z-0 h-[300px] xl:h-[500px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
        </div>
    </div>
    <div class="pt-[100px] xl:pt-[200px]"></div>
    <div class="container mx-auto mb-[200px] px-4">
        <?php the_field('contact_us_title'); ?>
        <?php the_field('contact_us_subtitle'); ?>
        <?php the_field('contact_us_link_label'); ?>
        <?php the_field('contact_us_link_url'); ?>
        <?php the_field('contact_us_content_title_1'); ?>
        <?php the_field('contact_us_content_1'); ?>
        <?php the_field('contact_us_content_title_2'); ?>
        <?php the_field('contact_us_content_2'); ?>
        <?php echo get_field('contact_us_image')['url']; ?>
    </div>
    <div class="h-[700px] w-full mb-[200px]" id="map"></div>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
