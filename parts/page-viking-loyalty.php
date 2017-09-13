<div class="full-width viking_loyalty">
  <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
  <?php $query = new WP_Query( 'order=asc&category_name=viking-loyalty-campaign&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="row">
    <div class="small-12 medium-12 large-12 columns entry-content">
      <h2 class="PageHdline">
        <?php the_title(); ?>
      </h2>
    </div>
  <div class="small-12 medium-12 large-12 text-center" data-equalizer="bar">
    <div class="small-12 medium-2 large-2 columns text-center" data-equalizer-watch="bar">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="small-12 medium-10 large-10 columns text-center italicPara" data-equalizer-watch="bar">
      <?php the_excerpt(); ?>
    </div> 
    <div class="small-12 medium-12 large-12 columns text-center">
      <?php the_content(); ?>
    </div> 
  </div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>