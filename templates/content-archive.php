<article id="post-<?php the_ID(); ?>" class="conteudo-archive">
    <a href="<?php the_permalink(); ?>">
        <div class="image-archive" style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/not-found.svg'; ?>')">

        </div>

        <div class="titulos">
            <?php the_title('<h2>', '</h2>') ?>

            <ul class="author">
                <li>por <b><?php echo the_author(); ?></b></li> 
                <li>-</li> 
                <li><b><?php echo get_the_modified_date('D'); ?></b></li> 
                <li>-</li> 
                <li><b><?php echo get_the_modified_date('m'); ?></b> de</li> 
                <li><b><?php echo get_the_modified_date('M'); ?></b> de</li> 
                <li><b><?php echo get_the_modified_date('Y'); ?></b></li> 
            </ul>

            <?php the_excerpt(); ?>
        </div>
    </a>
</article>