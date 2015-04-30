<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <p>
            <?php the_post_thumbnail('full'); ?>
        </p>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <div class="entry-categories">
            <?php _e('Categories: ', 'roots'); the_category( ', '); ?>
        </div>
        <footer>
            <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>
