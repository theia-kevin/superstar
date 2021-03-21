<?php

$recent_newses = wp_get_recent_posts([
    'numberposts' => '3',
    'post_status' => 'publish',
    'orderby'     => 'post_date',
    'order'       => 'DESC',
]);

foreach ($recent_newses as $recent_news) {
    ?>
    <div>
        <p><?php echo $recent_news['post_title'] ?></p>
        <p><?php echo $recent_news['post_content'] ?></p>
        <img src="<?php echo get_the_post_thumbnail_url($recent_news['ID']); ?>" alt="">
    </div>
    <?php
}

?>
    <p>TESTTTTTTTT</p>
<p><?php echo get_field('recent_news_title', 'option') ?></p>
<p><?php echo get_field('recent_news_link_label', 'option') ?></p>
<p><?php echo get_field('recent_news_link_url', 'option') ?></p>
<p><?php echo get_field('recent_news_link_background', 'option') ?></p>
<p><?php echo get_post_type_archive_link( 'post' ); ?></p>
<p>TESTTTTTTTT</p>
<?php
