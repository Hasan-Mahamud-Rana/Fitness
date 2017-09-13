<div class="service-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns service-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="service-panel services-page">
  <div class="row" >
    <div class="large-12 columns text-center">
      <div class="service" data-equalizer="ser">
        <?php $query = new WP_Query( 'order=asc&post_type=service&post_status=publish&paged='. get_query_var('paged')); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="small-12 medium-12 large-12 text-right services-page-bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer-watch="ser">
          <div class="small-12 medium-6 large-6 panel text-left service-text" data-equalizer-watch="ser">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?>
              </a></h3>
            <?php the_excerpt(); ?>
            <a class="button ser" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere</a> <span class="clear"></span> </div>
        </div>
        <?php endwhile;  wp_reset_postdata(); else : ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>