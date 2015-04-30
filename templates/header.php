<div class="bg--red mobile-header">
    <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    <div class="choose-lang">
        <?php if ( function_exists(qtrans_generateLanguageSelectCode) ) echo qtrans_generateLanguageSelectCode(); ?>
    </div>
</div>

<header class="banner row" role="banner">
    <div class="small-12 medium-4 large-5 columns">
        <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <div class="small-12 medium-8 large-7 columns pos--init">

        <nav class="social-nav">
            <div class="social-media-wrapper">
                <?php get_template_part('templates/social_media_icons'); ?>
                <?php if ( function_exists(qtrans_generateLanguageSelectCode) ) echo qtrans_generateLanguageSelectCode(); ?>
            </div>
        </nav>
        <nav class="nav-main left-off-canvas-menu" role="navigation">
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu( array( 'theme_location'    => 'primary_navigation',
                                        'menu_class'        => 'nav nav-pills off-canvas-list',
                                        'items_wrap'        => '<ul id="%1$s" class="%2$s"><li class="hide-large hide-med"><a class="icon-close exit-off-canvas"></a></li>%3$s</ul>'));
                endif;
            ?>
            <?php get_template_part('templates/social_media_icons-offcanvas'); ?>
        </nav>
    </div>
</header>
