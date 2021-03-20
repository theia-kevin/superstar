<?php
get_header();
?>
    <div class="absolute z-0 h-[300px] xl:h-[500px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
        </div>
    </div>
    <div class="pt-[100px] xl:pt-[200px]"></div>
    <div class="h-[700px] w-full" id="map"></div>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
