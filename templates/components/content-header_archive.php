<section class="header-archive">
    <?php 

        $current_cat = get_the_category();
        $cat_ID = $current_cat[0]->cat_ID;
        $related = get_posts(array('category__in' => $cat_ID, 'numberposts' => 4));

        foreach($related as $post): ?>
            <article id="post-<?php the_ID(); ?>" class="single-archive">
                <a href="<?php the_permalink() ?>">
                    <div class="image-header" style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/not-found.png'; ?>')">
                        <div>
                            <?php the_title('<h2>', '</h2>'); ?>

                            <ul class="autor">
                                <li><b><?php echo get_the_modified_date('D'); ?></b></li>
                                <li>-</li>
                                <li><b><?php echo get_the_modified_date('m'); ?></b> de</li>
                                <li><b><?php echo get_the_modified_date('M'); ?></b> de</li>
                                <li><b><?php echo get_the_modified_date('Y'); ?></b></li>
                            </ul>

                            <ul class="post-categories">
	                            <li>
                                    <a rel="category tag"><?php echo $category = wp_get_object_terms($post->ID, 'category')[0]->name;?></a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </a>
            </article>
        <?php endforeach;
    ?>
</section>