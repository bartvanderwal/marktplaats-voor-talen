    <?php get_header(); ?>
        <main>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Welkom bij OnStage!</h1>
                </div>
                <div class="col-12">
                    <p>Vinden en gevonden worden, meld je aan voor de marktplaats voor jong en oud talent.</p>
                </div>
            </div>
                <?php
            $args = array(
                'post_type'      => 'onstage_stage',
                'posts_per_page' => 10,
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) { ?>
                <section>
                    <div class="row mt-4">
                    <?php while ($loop->have_posts()) {
                        $loop->the_post(); ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <article class="card card-home mb-3">
                                <section>
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-building me-2"></i> <?php the_title(); ?></h5>
                                        <p class="mb-0"><?php echo  get_the_excerpt(); ?></p> 
                                    </div>
                                    <div class="card-footer card-footer-background">
                                        <?= get_the_post_thumbnail() ?>
                                        <a href="<?= the_permalink() ?>" class="btn btn-secondary">Bekijk <i class="fas fa-angle-right" class="ml-2"></i></a>
                                    </div>
                                </section>
                            </article>
                        </div>
                    <?php } ?>
                </section>
                <?php
            $args = array(
                'post_type'      => 'onstage_open_cv',
                'posts_per_page' => 10,
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) { ?>
                <section>
                    <div class="row mt-4">
                    <?php while ($loop->have_posts()) {
                        $loop->the_post(); ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <article class="card card-home mb-3">
                                <section>
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-user-graduate me-2"></i> <?php the_title(); ?></h5>
                                        <p class="mb-0"><?php echo  get_the_excerpt(); ?></p> 
                                    </div>
                                    <div class="card-footer card-footer-cv">
                                        <div class="row">
                                            <div class="col-3">
                                                <?= get_the_post_thumbnail() ?>
                                            </div>
                                            <div class="col-9">
                                                <a href="<?= the_permalink() ?>" class="btn btn-secondary">Bekijk <i class="fas fa-angle-right" class="ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </article>
                        </div>
                    <?php } ?>
                </section>
            <?php } else { ?>
                <h2>Geen opdrachten gevonden</h2>
                <p>Er zijn momenteel geen stage- of afstudeeropdrachten. Kom later nog eens terug.</p>
            <?php } ?>

            <?php } else { ?>
                <h2>Geen opdrachten gevonden</h2>
                <p>Er zijn momenteel geen stage- of afstudeeropdrachten. Kom later nog eens terug.</p>
            <?php } ?>
                    </div>
                <?php 
                    // if (have_posts()) {
                    //     while(have_posts()) {
                    //         the_post();
                    //         the_comment();
                    //     }
                    // }
                ?>
        </div>
        </main>
        <?php get_footer(); ?>
    </body>
</html>