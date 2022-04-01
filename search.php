<?php 

    $estilosPagina = ['archive.css', 'search.css'];
    require_once 'header.php';
?>
    <main id="primary" class="site-main">
        <div class="conteudo-search">
            <?php 
                if(have_posts()): ?>
                    <p>
                        Aqui estão os principais resultados para: <br> 
                        <span><b><?php echo get_search_query() ?></b></span>
                    </p>
                <?php else: ?>
                    <p>
                        Desculpe mas não encontramos nada relacionado a: <br> 
                        <span><b><?php echo get_search_query() ?>.</b></span>
                    </p>
                <?php endif;
            ?>
        </div>

        <section class="sessao-archive">
            <div class="tema-archive">
                <?php 
                    if(have_posts()):
                        while(have_posts()):the_post();

                        get_template_part( 'templates/content', 'archive' );
                        endwhile;
                    else: ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/search-2.svg' ?>" alt="Pesquisa Não encontrada">
                    <?php endif;
                ?>
            </div>

            <?php get_sidebar(); ?>
        </section>
    </main>
<?php
    require_once 'footer.php';
?>