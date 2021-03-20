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
    <div class="container mx-auto px-4 bg-gray-300">
        <div><?php the_field('who_title'); ?></div>
        <div><?php the_field('who_subtitle'); ?></div>
        <div><?php the_field('who_content'); ?></div>
        <a href="<?php the_field('who_link_url_01'); ?>"><?php the_field('who_link_label_01'); ?></a>
        <a href="<?php the_field('who_link_url_02'); ?>"><?php the_field('who_link_label_02'); ?></a>
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
                <div class="cursor-pointer" x-on:click="tab = '1'">Sentence One</div>
                <div class="cursor-pointer" x-on:click="tab = '2'">Sentence Two</div>
                <div class="cursor-pointer" x-on:click="tab = '3'">Sentence Three</div>
                <div class="cursor-pointer" x-on:click="tab = '4'">Sentence Four</div>
            </div>
        </div>
    </div>
    <div id="app"></div>
<?php
get_footer();
