<h2>Archive stage.php</h2>
<?php
    $args = array(
        'post_type'      => 'stage',
        'posts_per_page' => 10,
    );
    $loop = new WP_Query($args);
    while ( $loop->have_posts() ) {
        $loop->the_post();
        ?>
        <div class="entry-content">
            <?php the_title(); ?>
            <?php the_content(); ?>
        </div>
        <?php
    }
?>