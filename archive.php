<?php

    $estilosPagina = ['archive.css', 'content-header_archive.css'];
    require_once 'header.php';
?>
    <main id="primary" class="site-main">
        <?php
            get_template_part( 'templates/components/content', 'header_archive' );
        ?>

        <section class="sessao-archive">
            <div class="tema-archive">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();

                        get_template_part( 'templates/content', 'archive' );
                        endwhile;
                    endif;

                    get_template_part( 'templates/components/content', 'load_more' );
                ?>
            </div>

            <?php get_sidebar(); ?>
        </section>
    </main>
<?php 
    require_once 'footer.php';
?>