<?php
/*
Template Name: Team Page Three
*/
?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="m-b-xxxl">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>

    <?php
        for ( $i = 1; $i <= 6; $i++ ) {
            $memberName        = get_field('member_' . $i . '_name');
            $memberImage       = get_field('member_' . $i . '_image');
            $memberPosition    = get_field('member_' . $i . '_position');
            $memberDescription = get_field('member_' . $i . '_description'); 

            if ( !empty($memberName) ) {

                if ( $i % 2 !== 0 ) { ?>

                    <ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1 alternative-list">
                        <li class="alignleft">
                            <?php
                            if ( !is_null($memberImage['sizes']['member-fotos']) ) : ?>
                                <div class="member-page-3__image-container">
                                    <img class="left" src="<?php echo $memberImage['sizes']['member-fotos']; ?>" alt="<?php echo $memberImage; ?>">
                                </div>
                            <?php endif ?>
                        </li>

                        <li class="member-page-3__infos">
                            <h3><?php echo $memberName; ?></h3>
                            <p class="cursive"><?php echo $memberPosition; ?></p>
                            <div>
                                <?php echo $memberDescription; ?>
                            </div>
                        </li>
                    </ul>

            <?php } else { ?>

                    <ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1 alternative-list">
                        <li class="member-page-3__infos">
                            <h3><?php echo $memberName; ?></h3>
                            <p class="cursive"><?php echo $memberPosition; ?></p>
                            <div>
                                <?php echo $memberDescription; ?>
                            </div>
                        </li>

                        <li class="alignright">
                            <?php
                            if ( !is_null($memberImage['sizes']['member-fotos']) ) : ?>
                                <div class="member-page-3__image-container">
                                    <img class="right" src="<?php echo $memberImage['sizes']['member-fotos']; ?>" alt="<?php echo $memberImage; ?>">
                                </div>
                            <?php endif ?>
                        </li>
                    </ul>

            <?php }
            }
        }
    ?>

</div>
