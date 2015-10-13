<div class="bg--red mobile-header">
    <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
</div>

<header class="banner row" role="banner">
    <div class="small-12 medium-4 large-5 columns">
        <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <nav class="social-nav hide-small medium-8 large-7 columns alignright">
        <div class="social-media-wrapper">
            <?php get_template_part('templates/social_media_icons'); ?>
        </div>
    </nav>
</header>

<div class="navigation">
    <div class="small-12 pos--init">
        <nav class="nav-main left-off-canvas-menu" role="navigation">
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu( array( 'theme_location'    => 'primary_navigation',
                                        'menu_class'        => 'nav nav-pills off-canvas-list medium-block-grid-6',
                                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'));
                endif;
            ?>
            <?php get_template_part('templates/social_media_icons-offcanvas'); ?>
        </nav>
    </div>
</div>