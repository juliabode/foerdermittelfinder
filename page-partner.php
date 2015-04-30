<?php
/*
Template Name: Partner
*/
?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>

    <div class="partner-logos">
        <?php if( have_rows('partner_logos') ) { ?>
        <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-2 alternative-list">
            <?php while ( have_rows('partner_logos') ) { the_row(); ?>
                <li>
                    <?php $sub = get_sub_field('logo_image'); ?>
                    <img src="<?php echo $sub['url']; ?>">
                </li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>

</div>