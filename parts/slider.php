<div class="showcase-article" style="display: none">
  <div class="row">
    <div class="small-12">
      <div class="row showcase">
        <div class="small-12">
          <ul class="slider">
            <?php $query = new WP_Query( 'order=asc&post_type=slide&post_status=publish&paged='. get_query_var('paged')); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <li class="singleSlide">
              <div class="small-12 medium-6 large-6 columns slideDescription">
                <?php the_title('<h2><a>' , '</a></h2>'); ?>
                <p class="price"> $<span><?php the_field('price'); ?></span></p>
                <?php the_content(); ?>
              </div>
              <div class="small-12 medium-6 large-6 columns fpbdslider" style="height:420px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
                <h2 class="sliderHdline trickyLinkToSLide"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              </div>
            </li>
            <?php endwhile;  wp_reset_postdata(); else : ?>
            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>