<?php

    $estilosPagina = ['archive.css', 'author.css'];
    require_once 'header.php';
?>

<main id="primary" class="site-main">
    <section class="tema-author">
        <div class="image-autor">
            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="<?php the_author(); ?>">
        </div>

        <h1><?php the_author(); ?></h1>
    </section>

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