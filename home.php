<?php

    $estilosPagina = ['home.css', 'content-header_home.css'];
    require_once 'header.php'; 
?>
    <main id="primary" class="site-main">
        <div class="content-home">
            <?php
                get_template_part( 'templates/components/content', 'header_home' );
            ?>

            <section class="body-home">
                <?php 
                    if(have_posts()):
                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                        ];
                        $posts = new WP_Query($args);

                        while($posts->have_posts()): $posts->the_post();

                            get_template_part( 'templates/content', 'home' );
                        endwhile;
                    endif;

                    // Exibir posts da categoria noticias
                    // $categories = get_categories();
                    $postsNews = get_posts(array('category__in' => 6, 'numberposts' => 2));
                    foreach($postsNews as $post):
                        get_template_part( 'templates/components/content', 'posts_new' );
                    endforeach;

                    get_template_part( 'templates/components/content', 'load_more' );
                ?>
            </section>
        </div>

        <?php get_sidebar(); ?>
    </main>


<?php 
    require_once 'footer.php';