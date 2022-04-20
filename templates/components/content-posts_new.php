<article id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink() ?>">
        <div class="home-thumbnail">
            <img src="<?php has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/not-found.png'; ?>" alt="<?php echo the_title(); ?>">
        </div>

        <div>
            <?php echo the_category(); ?>

            <a href="<?php the_permalink() ?>">
                <?php
                    echo the_title('<h4>', '</h4>');
                    echo the_excerpt();
                ?>    
            </a>
        </div>
    </a>
</article>