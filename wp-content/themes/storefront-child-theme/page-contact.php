<?php
get_header();
?>
    <div class="absolute z-0 h-[300px] xl:h-[500px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
        </div>
    </div>
    <div class="pt-[100px] xl:pt-[200px] mb-[100px]"></div>
    <div class="container mx-auto mb-[200px] px-4">
        <div class="grid grid-cols-12 h-[150px]">
            <div class="col-span-12 xl:col-span-5 flex items-start">
                <div class="font-jumble text-[70px] text-orange-01 uppercase"><?php the_field('contact_us_title'); ?></div>
            </div>
            <div class="col-span-12 xl:col-span-7 flex items-end flex-wrap">
                <div class="font-sofia-pro-medium text-[22px] xl:text-[36px] text-orange-01 mr-[60px]"><?php the_field('contact_us_subtitle'); ?></div>
                <a class="btn-yellow" href="<?php the_field('contact_us_link_url'); ?>"><?php the_field('contact_us_link_label'); ?></a>
            </div>
        </div>
    </div>
    <div class="container mx-auto relative z-10">
        <div class="absolute top-[-30px]">
            <div class="relative">
                <img src="<?php echo get_field('contact_us_image')['url']; ?>" alt="">
                <div class="absolute top-[100px] left-[100px]">
                    <div class="font-jumble text-white text-[22px] mb-[15px]"><?php the_field('contact_us_content_title_1'); ?></div>
                    <div class="font-sofia-pro-light text-white text-[16px] mb-[90px]"><?php the_field('contact_us_content_1'); ?></div>
                    <div class="font-jumble text-white text-[22px] mb-[15px]"><?php the_field('contact_us_content_title_2'); ?></div>
                    <div class="font-sofia-pro-light text-white text-[16px]"><?php the_field('contact_us_content_2'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[700px] w-full mb-[200px] relative z-0" id="map"></div>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php
get_footer();
