    <?php get_header(); ?>
        <main>
            <p>Vinden en gevonden worden, meld je aan voor de marktplaats voor jong en oud talent.</p>    
            <?php
            
            
            $args = array(
                'post_type'      => 'onstage_stage',
                'posts_per_page' => 10,
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) { ?>
                <section class="cards alles">
                    <?php while ($loop->have_posts()) {
                        $loop->the_post(); ?>
                        <article class="card">
                        <section class="card-body">
                            <h5 class="card-title"><i class="fas fa-building"></i> <?php the_title(); ?></h5>
                            <p class="card-text"><?php the_content(); ?></p>
                            <img src="<?= get_the_post_thumbnail() ?>" alt="op de HAN">
                            <a href="onderwijs-detail.html" class="btn btn-secondary">Bekijk <i class="fas fa-angle-right"></i></a>
                        </section>
                    </article>
                    <?php } ?>
                </section>
            <?php } else { ?>
                <h2>Geen opdrachten gevonden</h2>
                <p>Er zijn momenteel geen stage- of afstudeeropdrachten. Kom later nog eens terug.</p>
            <?php } ?>
                <?php 
                    // if (have_posts()) {
                    //     while(have_posts()) {
                    //         the_post();
                    //         the_comment();
                    //     }
                    // }
                ?>
        </main>
        <?php get_footer(); ?>
    </body>
</html>