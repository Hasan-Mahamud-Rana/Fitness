<div class="solution-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns solution-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="solution-panel solutions-page show-for-medium-up">
  <div class="row" >
    <div class="large-12 columns text-center solution-container">
      <div class="solution1">
        <ol>
          <?php $query = new WP_Query( 'order=asc&post_type=solution&tag=firstRow&post_status=publish&paged='. get_query_var('paged')); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <li>
            <h2><span class="s-thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"><p class="s-name"><?php the_title(); ?></p></span></h2>
            <div class="large-12 columns s-slide-text">
              <?php the_excerpt(); ?>
              <a class="reWrite" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a></div>
          </li>
          <?php endwhile;  wp_reset_postdata(); else : ?>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
          <?php endif; ?>
        </ol>
      </div>
    </div>
    <div class="large-12 columns text-center solution-container">
      <div class="solution2">
        <ol>
          <?php $query = new WP_Query( 'order=asc&post_type=solution&tag=2ndRow&post_status=publish&paged='. get_query_var('paged')); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <li>
            <h2><span class="s-thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"><p class="s-name"><?php the_title(); ?></p></span></h2>
            <div class="large-12 columns s-slide-text">
              <?php the_excerpt(); ?>
              <a class="reWrite" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a></div>
          </li>
          <?php endwhile;  wp_reset_postdata(); else : ?>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
          <?php endif; ?>
        </ol>
      </div>
    </div>
    <div class="large-12 columns text-center solution-container">
      <div class="solution3">
        <ol>
          <?php $query = new WP_Query( 'order=asc&post_type=solution&tag=3rdRow&post_status=publish&paged='. get_query_var('paged')); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <li>
            <h2><span class="s-thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"><p class="s-name"><?php the_title(); ?></p></span></h2>
            <div class="large-12 columns s-slide-text">
              <?php the_excerpt(); ?>
              <a class="reWrite" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a></div>
          </li>
          <?php endwhile;  wp_reset_postdata(); else : ?>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
          <?php endif; ?>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="solution-mobile-panel solution-mobiles-page hide-for-medium-up">
  <?php $query = new WP_Query( 'order=asc&post_type=solution&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="row" data-equalizer>
    <div class="small-12 medium-4 large-4 columns solution-mobiles-page-bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer-watch>
      <p class="s-name">
        <?php the_title(); ?>
      </p>
    </div>
    <div class="small-12 medium-8 large-8 columns panel text-left solution-mobile-text" data-equalizer-watch>
      <?php the_excerpt(); ?>
      <a class="button ser reWrite" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere</a> <span class="clear"></span> </div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>