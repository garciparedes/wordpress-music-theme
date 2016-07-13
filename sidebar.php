<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <? if(get_option('facebook_url') ): ?>
            <li class="sidebar-brand">
                <a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><h2>Facebook</h2></a>
            </li>
        <?php endif; ?>

        <? if(get_option('twitter_url')): ?>
            <li class="sidebar-brand">
                <a href="<?php echo get_option('twitter_url'); ?>" target="_blank"><h2>Twitter</h2></a>
            </li>
        <?php endif; ?>

        <li class="sidebar-brand">
            <h2><?php _e('Albums'); ?></h2>
        </li>
        <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>

        <li class="sidebar-brand">
            <h2><?php _e('Archives'); ?></h2>
        </li>
        <?php wp_get_archives('type=yearly'); ?>
    </ul>
</div>
