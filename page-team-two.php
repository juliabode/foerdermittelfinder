<?php
/*
Template Name: Team Page Two
*/
?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="m-b-xxxl">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>

    <ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1 alternative-list">
    <?php
        for ( $i = 1; $i <= 6; $i++ ) {
            $memberName        = get_field('member_' . $i . '_name');
            $memberImage       = get_field('member_' . $i . '_image');
            $memberPosition    = get_field('member_' . $i . '_position');
            $memberDescription = get_field('member_' . $i . '_description'); 

            if ( !empty($memberName) ) { ?>

                <li>
                    <div class="member-page-2__wrapper pos--rel">
                        <div class="member-page-2__image-wrapper pos--rel">
                            <img src="<?php echo $memberImage['sizes']['member-fotos']; ?>" alt="<?php echo $memberImage; ?>">
                            <h3 class="pos--abs"><?php echo $memberName; ?></h3>
                        </div>
                        <div class="member-page-2__infos pos--abs special-box">
                            <p class="cursive"><?php echo $memberPosition; ?></p>
                            <div>
                                <?php echo $memberDescription; ?>
                            </div>
                        </div>
                    </div>
                </li>

            <?php }
        }
    ?>
    </ul>

</div>
