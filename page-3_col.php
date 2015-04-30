<?php
/*
Template Name: 3 Spalten
*/
?>

<div class="large-12 medium-12 small-12 column">
  <?php get_template_part('templates/page', 'header'); ?>

  <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1 alternative-list">
    <li>
      <?php get_template_part('templates/content', 'page'); ?>
    </li>

    <li>
      <?php the_field('3-col-text_col2'); ?>
    </li>

    <li>
      <?php the_field('3-col-text_col3'); ?>
    </li>
  </ul>
</div>
