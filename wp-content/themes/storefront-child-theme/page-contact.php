<?php
get_header();
?>
    <div class="absolute z-0 h-[300px] xl:h-[500px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
        </div>
    </div>
    <div class="pt-[100px] xl:pt-[200px] mb-[100px]"></div>
    <div data-aos="fade-up" class="container mx-auto mb-[100px] xl:mb-[200px] px-4 text-center">
        <div class="font-jumble text-[53px] xl:text-[70px] text-orange-01 uppercase"><?php the_field('contact_us_title'); ?></div>
        <div class="font-sofia-pro-medium text-[22px] xl:text-[36px] text-orange-01"><?php the_field('contact_us_subtitle'); ?></div>
    </div>
    <div data-aos="fade-down" class="container mx-auto relative z-10">
        <div class="absolute top-[-30px]">
            <div class="relative">
                <img class="object-contain" src="<?php echo get_field('contact_us_image')['url']; ?>" alt="">
                <div class="absolute top-[100px] left-[100px]">
                    <div class="font-jumble text-white text-[22px] mb-[15px]"><?php the_field('contact_us_content_title_1'); ?></div>
                    <div class="font-sofia-pro-light text-white text-[16px] mb-[90px]"><?php the_field('contact_us_content_1'); ?></div>
                    <div class="font-jumble text-white text-[22px] mb-[15px]"><?php the_field('contact_us_content_title_2'); ?></div>
                    <div class="font-sofia-pro-light text-white text-[16px]"><?php the_field('contact_us_content_2'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" class="h-[700px] w-full mb-[100px] xl:mb-[200px] relative z-0" id="map"></div>
    <div data-aos="fade-down">
        <?php get_template_part('template-parts/content', 'contact'); ?>
    </div>
<?php
get_footer();
