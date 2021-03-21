<?php
get_header();
?>
    <div class="absolute z-0 h-[600px] xl:h-[900px] inset-0 bg-no-repeat bg-cover bg-left-bottom" style="background-image:url('<?php echo get_field('banner_image')['url']; ?>');">
        <div class="w-full h-full container mx-auto pt-[200px] xl:pt-[300px] px-4 grid grid-cols-12">
            <div class="col-span-12 xl:col-span-5 flex flex-col items-start justify-center">
                <div class="font-jumble text-[54px] xl:text-[72px] text-white uppercase leading-[60px] xl:leading-[80px] animate__animated animate__bounce animate__delay-1s animate__repeat-3"><?php the_field('banner_title'); ?></div>
                <div class="font-sofia-pro-light text-[14px] xl:text-[18px] text-white leading-[19px] xl:leading-[25px] py-[30px]"><?php the_field('banner_content'); ?></div>
                <a class="flex items-center justify-center font-jumble text-[20px] text-white bg-transparent uppercase leading-[31px] py-[4px] px-[24px] border-2 border-white rounded-[15px] transition-all duration-300 hover:bg-yellow-01 hover:border-yellow-01 hover:text-purple-01 hover:transform hover:-translate-y-2 hover:translate-x-2 hover:shadow-xl" href="<?php the_field('banner_link_url'); ?>"><?php the_field('banner_link_label'); ?></a>
            </div>
        </div>
    </div>
    <div class="pt-[400px] xl:pt-[600px]"></div>
<?php get_template_part('template-parts/content', 'contact'); ?>
<?php get_template_part('template-parts/content', 'news'); ?>
    <div class="container mx-auto px-4">
        <p><?php the_field('who_title'); ?></p>
        <p><?php the_field('who_subtitle'); ?></p>
        <p><?php the_field('who_content'); ?></p>
        <a class="inline-block" href="<?php the_field('who_link_url_1'); ?>"><?php the_field('who_link_label_1'); ?></a>
        <a class="inline-block" href="<?php the_field('who_link_url_2'); ?>"><?php the_field('who_link_label_2'); ?></a>
        <img src="<?php the_field('who_product_arrow_image'); ?>" alt="">
        <?php
        foreach (get_field('who_products', get_the_ID()) as $who_product) {
            ?>
            <div><?php echo $who_product['who_product_title']; ?></div>
            <img src="<?php echo $who_product['who_product_image']['url']; ?>" alt="">
            <?php
        }
        ?>
    </div>
    <div class="container mx-auto py-4">
        <div class="flex" x-data="{ tab: '1' }">
            <div>
                <div x-show="tab === '1'">
                    Image One
                </div>
                <div x-show="tab === '2'">
                    Image Two
                </div>
                <div x-show="tab === '3'">
                    Image Three
                </div>
                <div x-show="tab === '4'">
                    Image Four
                </div>
            </div>
            <div>
                <div class="cursor-pointer" x-on:click="tab = '1'">Content One</div>
                <div class="cursor-pointer" x-on:click="tab = '2'">Content Two</div>
                <div class="cursor-pointer" x-on:click="tab = '3'">Content Three</div>
                <div class="cursor-pointer" x-on:click="tab = '4'">Content Four</div>
            </div>
        </div>
    </div>
<?php
get_footer();
