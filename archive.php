<?php

    $estilosPagina = ['archive.css', 'content-header_archive.css'];
    require_once 'header.php';
?>
    <main id="primary" class="site-main">
        <?php
            get_template_part( 'templates/content', 'header_archive' );
        ?>

        <section class="sessao-archive">
            <div class="tema-archive">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();

                        get_template_part( 'templates/content', 'archive' );
                        endwhile;
                    endif;
                ?>
            </div>

            <?php get_sidebar(); ?>
        </section>
    </main>
<?php 
    require_once 'footer.php';
?>