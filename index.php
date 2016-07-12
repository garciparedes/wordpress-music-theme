<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">
    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="song" style="background-image: url(<?php echo z_taxonomy_image_url(get_the_category()[0]->term_id); ?> );">
                <h1><?php the_title(); ?></h1>


                <div class="player">
                    <?php
                        $post_meta_value = "http://wordpress.localhost/wp-content/uploads/2016/07/Allegro-from-Duet-in-C-Major.mp3";
                        echo do_shortcode('[sc_embed_player fileurl='.$post_meta_value.']');
                    ?>
                </div>
            </div>
         <?php endwhile; else: ?>
             <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
