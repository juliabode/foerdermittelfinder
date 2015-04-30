<?php
/*
Template Name: Referenzen
*/
?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>

    <div class="reference-list">

        <?php if( have_rows('reference_list') ) { ?>
        <ul class="alternative-list">
            <?php while ( have_rows('reference_list') ) { the_row(); ?>
                <li>
                    <div class="small-7">
                        <?php the_sub_field('reference'); ?>
                    </div>
                    <div class="small-4 aligncenter">
                        <?php $sub = get_sub_field('logos'); ?>
                        <img src="<?php echo $sub['url']; ?>">
                    </div>
                </li>
            <?php } ?>
        </ul>
        <?php } ?>

    </div>

</div>