<?php get_header(); ?>
<?php get_sidebar(); ?>
<main>
    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="song" style="background-image: url(<?php echo z_taxonomy_image_url(get_the_category()[0]->term_id); ?> );"
                data-toggle="modal" data-target="#post-<?php the_ID(); ?>" type="button">
                <h3 class="stroke"><?php the_title(); ?></h3>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="post-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                  </div>
                  <div class="modal-body">
                    <div class="image">
                        <img src="<?php echo z_taxonomy_image_url(get_the_category()[0]->term_id); ?>"
                            class="img img-responsive full-width" />
                    </div>
                     <p><?php the_content(); ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
         <?php endwhile; else: ?>
             <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
