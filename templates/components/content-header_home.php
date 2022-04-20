<section class="home-header">
    <?php 
        $current_cat = get_the_category();
        $cat_ID = $current_cat[0]->cat_ID;
        $related = get_posts(array('category__in' => $cat_ID, 'numberposts' => 1));

        foreach($related as $post){ ?>
            <article id="post-<?php the_ID(); ?>" class="single-post">
                <a href="<?php the_permalink() ?>">
                    <div class="post-image" style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/not-found.png'; ?>')">
                        <div>
                            <?php the_title('<h2>', '</h2>'); ?>

                            <p><?php the_excerpt() ?></p>

                            <ul class="autor">
                                <li><b><?php echo get_the_modified_date('D'); ?></b></li>
                                <li>-</li>
                                <li><b><?php echo get_the_modified_date('m'); ?></b> de</li>
                                <li><b><?php echo get_the_modified_date('M'); ?></b> de</li>
                                <li><b><?php echo get_the_modified_date('Y'); ?></b></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </article>
        <?php }
    ?>
</section>