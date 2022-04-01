<?php

    $estilosPagina = ['home.css', 'content-header_home.css'];
    require_once 'header.php'; 
?>
    <main id="primary" class="site-main">
        <?php
            get_template_part( 'templates/content', 'header_home' );
        ?>

        <section class="body-home">
            <section class="home-site-main">
                <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();

                            get_template_part( 'templates/content', 'home' );
                        endwhile;
                    endif;
                ?>
            </section>

            <?php get_sidebar(); ?>
        </section>
    </main>


<?php 
    require_once 'footer.php';