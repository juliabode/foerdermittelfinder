<footer class="content-info row" role="contentinfo">
    <?php $options = get_option('plugin_options');?>
    <div class="">
        <div class="col-lg-12">
            <?php dynamic_sidebar('sidebar-footer'); ?>
            <p>
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
                <?php if ($options['vobe_imprint_link']) :
                        echo '<a class="imprint" href="' . $options['vobe_imprint_link'] . '">';
                        _e('Imprint', 'roots');
                        echo '</a>' ;
                    endif;?>
            </p>
        </div>
    </div>
</footer>
