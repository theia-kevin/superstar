<?php
$recent_newses = wp_get_recent_posts([
    'numberposts' => '3',
    'post_status' => 'publish',
    'orderby'     => 'post_date',
    'order'       => 'DESC',
]);
?>
<div class="h-[1500px] xl:h-[1000px] bg-no-repeat bg-cover bg-center flex items-center mb-[200px]" style="background-image: url('<?php echo get_field('recent_news_background', 'option')['url']; ?>');">
    <div class="container mx-auto px-4">
        <div class="font-jumble text-[45px] text-white uppercase text-center pb-[80px]"><?php echo get_field('recent_news_title', 'option'); ?></div>
        <div class="grid grid-cols-12 gap-y-[60px] gap-x-[30px]">
            <?php
            foreach ($recent_newses as $recent_news) {
                ?>
                <div class="col-span-12 xl:col-span-4 text-center">
                    <a href="<?php echo get_permalink($recent_news['ID']); ?>">
                        <img class="mx-auto object-contain" src="<?php echo get_the_post_thumbnail_url($recent_news['ID']); ?>" alt="">
                    </a>
                    <div class="font-jumble text-[14px] text-white uppercase0 pt-[30px] pb-[15px] uppercase"><?php echo $recent_news['post_title']; ?></div>
                    <div class="font-sofia-pro-light text-[14px] text-white"><?php echo wp_trim_words($recent_news['post_content'], 20); ?></div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="flex justify-center pt-[120px]">
            <a class="btn-blank-small-white" href="<?php echo get_field('recent_news_link_url', 'option'); ?>">
                <?php echo get_field('recent_news_link_label', 'option'); ?>
            </a>
        </div>
    </div>
</div>
<?php
