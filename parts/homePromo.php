<div class="homePromo" style="display: none">
  <div class="row">
    <div class="small-12">
      <div class="row showcase">
        <div class="small-12 promoText">
        <?php while ( have_posts() ) : the_post(); ?>
        <h2 class="client"><?php the_field('promo'); ?></h2>
         <?php endwhile; ?>
          <ul class="slider">
            <?php $query = new WP_Query( 'order=asc&post_type=slide&post_status=publish&paged='. get_query_var('paged')); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <li class="singleSlide">
              <div class="small-12 columns slideDescription">
                <?php the_title('<h1 class="slidingPromo">' , '</h1>'); ?>
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