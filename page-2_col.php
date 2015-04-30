<?php
/*
Template Name: 2 Spalten
*/
?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>

    <ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1 alternative-list">
        <li>
            <?php get_template_part('templates/content', 'page'); ?>
        </li>

        <li>
            <?php the_field('2-col-text_col2'); ?>
        </li>
    </ul>
</div>
