<div id="sidebar">
    <h2 ><a href="<?php echo esc_url( home_url( '/' )); ?>">Home</a></h2>
    <h2 ><?php _e('Albums'); ?></h2>
    <ul >
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
        <h2 ><?php _e('Archives'); ?></h2>
    <ul >
        <?php wp_get_archives('type=yearly'); ?>
    </ul>
</div>
