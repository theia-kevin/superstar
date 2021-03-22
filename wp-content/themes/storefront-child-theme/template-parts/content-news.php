<?php
$recent_newses = wp_get_recent_posts([
    'numberposts' => '3',
    'post_status' => 'publish',
    'orderby'     => 'post_date',
    'order'       => 'DESC',
]);
?>
    <div class="container mx-auto px-4 mb-[200px]">
        <p><?php echo get_field('recent_news_title', 'option'); ?></p>
        <p><?php echo get_field('recent_news_link_label', 'option'); ?></p>
        <p><?php echo get_field('recent_news_link_url', 'option'); ?></p>
        <p><?php echo get_field('recent_news_background', 'option')['url']; ?></p>
        <?php
        foreach ($recent_newses as $recent_news) {
            ?>
            <div>
                <p><?php echo $recent_news['post_title']; ?></p>
                <p><?php echo $recent_news['post_content']; ?></p>
                <p><?php echo get_permalink($recent_news['ID']); ?></p>
                <img src="<?php echo get_the_post_thumbnail_url($recent_news['ID']); ?>" alt="">
            </div>
            <?php
        }
        ?>
    </div>
<?php
