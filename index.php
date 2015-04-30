<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="row">
        <div class="small-9 medium-9 small-12 left">

            <?php if (!have_posts()) : ?>
              <div class="alert alert-warning">
                <?php _e('Sorry, no results were found.', 'roots'); ?>
              </div>
              <?php get_search_form(); ?>
            <?php endif; ?>

            <?php
                get_template_part('templates/content', 'single');
            ?>
            <div class="nav-previous left"><?php next_posts_link( 'Older posts' ); ?></div>
            <div class="nav-next right"><?php previous_posts_link( 'Newer posts' ); ?></div>
        </div>

        <aside class="sidebar column small-3 medium-3 small-12 special-box" role="complementary">
            <?php dynamic_sidebar('sidebar-blog'); ?>
        </aside><!-- /.sidebar -->
    </div>
</div>

<?php wp_reset_query(); ?>
