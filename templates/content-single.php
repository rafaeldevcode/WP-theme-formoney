<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="conteudo">
        <div class="formoney-titulos">
            <?php the_title('<h1>', '</h1>'); ?>

            <h2><?php the_excerpt(); ?> </h2>
        </div>

        <div class="formoney-thumbnail">
            <?php
                // the_post_thumbnail();
            ?>
        </div>

        <div class="site-content">
            <?php
                the_content();
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

    <section class="next-prev-post">
        <div class="anterior">
            <p><?php previous_post_link( '%link', '%title', true ); ?></p>
        </div>
        
        <div class="proximo">
            <p><?php next_post_link( '%link', '%title', true ); ?></p>
        </div>
    </section>
</article>