<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <h2><?php _e('Albums'); ?></h2>
        </li>
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>

        <li class="sidebar-brand">
            <h2><?php _e('Archives'); ?></h2>
        </li>
        <?php wp_get_archives('type=yearly'); ?>
    </ul>
</div>
