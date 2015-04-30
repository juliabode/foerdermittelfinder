<?php
/*
Template Name: FAQ
*/
?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>

    <div class="accordion vertical" id="accordion">

        <?php if( have_rows('faq_repeater') ) { ?>
        <ul>
            <?php while ( have_rows('faq_repeater') ) { the_row(); ?>
                <li>
                    <h2>
                        <a href="#"><i class="fa fa-chevron-right"></i><?php the_sub_field('faq_question'); ?></a>
                    </h2>
                    <div class="acc-content">
                        <?php the_sub_field('faq_answer'); ?>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <?php } ?>

    </div>

</div>