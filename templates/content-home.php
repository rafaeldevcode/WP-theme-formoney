<article id="post-<?php the_ID(); ?>" class="single-home">
    <a href="<?php the_permalink() ?>">
        <div class="home-image" style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/not-found.svg'; ?>')"></div>
    </a>
    
    
    <div class="content-body-home">
        <a href="<?php the_permalink() ?>">
            <?php the_title('<h2>', '</h2>') ?>
            <?php the_excerpt() ?>
        </a>

        <div class="author">
            <p>por <b><?php the_author(); ?></b></p>
            
            <ul>
                <li>-</li>
                <li><b><?php echo get_the_modified_date('D'); ?></b></li>
                <li>-</li>
                <li><b><?php echo get_the_modified_date('m'); ?></b> de</li>
                <li><b><?php echo get_the_modified_date('M'); ?></b> de</li>
                <li><b><?php echo get_the_modified_date('Y'); ?></b></li>
            </ul>
        </div>
    </div>
</article>