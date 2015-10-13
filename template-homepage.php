<?php
/*
Template Name: Homepage
*/
?>

<div class="large-8 medium-8 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
    <?php /*
        for ( $i = 1; $i <= 4; $i++ ) {
            $tabHeader  = get_field('home-box_' . $i . '_title');
            $tabContent = get_field('home-box_' . $i . '_text');
            $tabImage   = get_field('home-box_' . $i . '_image'); ?>

            <div class="service-tile">
                <h3><?php echo $tabHeader; ?></h3>
                <div class="tile-box">
                    <?php if ( !is_null($tabImage['sizes']['service-tile-thumb']) ) : ?>
                        <img class="hide-small right" src="<?php echo $tabImage['sizes']['service-tile-thumb']; ?>" alt="<?php echo $tabHeader; ?>">
                    <?php endif ?>
                    <?php echo $tabContent; ?>
                </div>
            </div>
        <?php
        }*/
    ?>

</div>

<aside class="sidebar column large-4 medium-4 small-12" role="complementary">
    <?php dynamic_sidebar('sidebar-homepage'); ?>
</aside><!-- /.sidebar -->
