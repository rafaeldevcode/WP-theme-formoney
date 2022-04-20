<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Rafael Vieira">
    <meta name="description" content="Formoney">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/all.css';  ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/header.css';  ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/sidebar.css';  ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/footer.css';  ?>">
    
    <?php
        foreach($estilosPagina as $estiloPagina){ ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/' . $estiloPagina;  ?>">
        <?php } 
    ?>

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <section class="tema-logo">
        <?php 
            if(has_custom_logo()):
                echo the_custom_logo();
            else: ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.webp' ?>" alt="Formoney" style="width:220px"></img>
            <?php endif;
        ?>
    </section>

    <section class="tema-menu">
        <nav class="tema-nav">
            <?php 
                wp_nav_menu(
                    array(
                        'menu'    => 'menu-navegacao',
                        'menu_id' => 'menu-principal'
                    )
                )
            ?>
        </nav>

        <div class="tema-search">
            <button id="abrir-pesquisa">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </section>

    <section class="menu-mobile">
        <input type="checkbox" id="checkboxMenu">

        <label for="checkboxMenu">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </section>
</header>

<section class="sessao-pesquisa">
    <div class="form-search" id="form-search">
        <form role="search" method="GET" action="<?php echo home_url('/'); ?>">
            <input type="search" name="s" id="s" placeholder="Persquisar..." value="<?php echo get_search_query(); ?>">
            <input type="submit" id="searchsubmit" value="Pesquisar">
        </form>
    </div>
</section>