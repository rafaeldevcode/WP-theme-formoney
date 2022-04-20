<article id="post-<?php the_ID(); ?>" class="single-archive">
    <a href="<?php the_permalink() ?>">
        <div>
            <img src="<?php has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/not-found.png'; ?>" alt="<?php echo the_title(); ?>">
        </div>
    </a>
</article>