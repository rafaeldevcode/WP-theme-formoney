<?php 

    $estilosPagina = ['single.css'];
    require_once 'header.php';
?>

    <main id="primary" class="site-main">
        <?php 
            while(have_posts()): the_post();

                get_template_part( 'templates/content', 'single' );
                
                get_sidebar();
            endwhile;
        ?>
    </main>

<?php 
    require_once 'footer.php';
?>