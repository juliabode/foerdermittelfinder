<?php
/*
Template Name: Blog
*/
?>


<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header');
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          query_posts( 'post_type=post&orderby=date&posts_per_page=8&paged=' . $paged ); ?>

    <div class="row">
        <div class="small-9 medium-9 small-12 left">
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
