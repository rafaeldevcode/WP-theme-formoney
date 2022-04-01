<?php 

    ////// FUNCIONALIDADES DO TEMA /////
    function formoney_recusrsos_tema()
    {
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
    }
    add_action('after_setup_theme', 'formoney_recusrsos_tema');

    ///// REGISTRAR MENU /////
    function foemoney_registrar_menu()
    {
        register_nav_menu('menu-navegacao', 'Menu Principal');
    }
    add_action('init', 'foemoney_registrar_menu');

    ///// ADICIONAR SCRIPTS NO RODAPÉ /////
    function adicionar_scripts()
    {
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
    }
    add_action('wp_enqueue_script', 'adicionar_scripts');