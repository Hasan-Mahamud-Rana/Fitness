  <div class="full-width-banner" style="height:482px;background-position: bottom center; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);background-size: cover;"></div>
<div class="kontakt-page">
  <div class="row">
<div class="small-12 medium-8 large-8 columns ">
<h3>CONTACT FORM</h3>
  <?php echo do_shortcode( '[contact-form-7 id="843" title="contact form"]' ); ?>
</div>
<div class="small-12 medium-4 large-4 columns">
    <h3>OFFICE LOCATION</h3>
      <?php $query = new WP_Query( 'order=asc&category_name=kontakt&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="small-12 kontakt-block" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
            <div class=" kontakt-text-block">
              <h3>
                <?php the_title(); ?>
              </h3>
              <?php the_content(); ?>
            </div>
        </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
      <?php endif; ?>
    </div>
  </div>
</div>