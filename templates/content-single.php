<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="conteudo">
        <div class="formoney-titulos">
            <?php the_title('<h1>', '</h1>'); ?>

            <h2><?php the_excerpt(); ?> </h2>
        </div>

        <div class="formoney-thumbnail">
            <?php
                the_post_thumbnail();
            ?>
        </div>

        <div class="site-content">
            <?php
                the_content();
                wp_link_pages([
                    'before'           => '<div class="post-nav-links">' . __( '' ),
                    'after'            => '</div>',
                    'link_before'      => '',
                    'link_after'       => '',
                    'aria_current'     => 'page',
                    'next_or_number'   => 'next',
                    'separator'        => ' ',
                    'nextpagelink'     => __( 'Próxima' ),
                    'previouspagelink' => __( 'Anterior' ),
                    'pagelink'         => '%',
                    'echo'             => 1,
                ]);
            ?>
        </div>
    </section>

    <section class="formoney-author">
        <div class="author">
            <div class="image-author">
                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="<?php the_author(); ?>">
            </div>

            <div class="author-date">
                <p>por <b><a href="<?php echo get_author_posts_url('ID') . get_the_author_meta( 'user_nicename' ); ?>"><?php the_author(); ?></a></b></p>
                
                <ul>
                    <li>-</li>
                    <li>Última atualização:</li>
                    <li><b><?php echo get_the_modified_date('D'); ?></b></li>
                    <li>-</li>
                    <li><b><?php echo get_the_modified_date('m'); ?></b> de</li>
                    <li><b><?php echo get_the_modified_date('M'); ?></b> de</li>
                    <li><b><?php echo get_the_modified_date('Y'); ?></b></li>
                </ul>
            </div>
        </div>

        <div class="categoria">
            <?php the_category(); ?>
        </div>
    </section>
    <?php get_template_part( 'templates/components/content', 'next_prev' ); ?>
</article>