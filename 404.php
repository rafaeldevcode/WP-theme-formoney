<?php

    $estilosPagina = ['404.css'];
    require_once 'header.php';
?>

    <main class="formoney-error">
        <section>
            <div class="form-search-error">
                <form role="search" method="GET" action="<?php echo home_url('/'); ?>">
                    <input type="search" placeholder="Persquisar..." value="<?php echo get_search_query(); ?>">
                    <input type="submit" value="Pesquisar">
                </form>
            </div>

            <div class="titulo-error">
                <h1>Desculpa mas não encontramos o que estava procurando!</h1>
                <h2>Quem sabe queira pesquisar outro assunto.</h2>
            </div>

            <div class="image-error">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/404.svg' ?>" alt="Página não encontrada">
            </div>
        </section>

        <?php 
            get_sidebar();
        ?>
    </main>

<?php  
    require_once 'footer.php';
?>