<div class="full-width viking_temaer">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h1 class="PageHdline">
          <?php the_title(); ?>
        </h1>
      </div>
      <div class="small-12 medium-12 large-12 columns entry-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>

<div class="campaign-panel campaigns-page show-for-medium-up">
  <div class="row" >
    <div class="large-12 columns text-center campaign-container">
      <div class="campaign">
        <ol>
          <?php $query1 = new WP_Query( 'order=asc&category_name=viking-loyalty-campaign&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
          <?php if ( $query1->have_posts() ) : while ( $query1->have_posts() ) : $query1->the_post(); ?>
          <li>
            <h2><span class="campaign-thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></span></h2>
            <div class="large-12 columns campaign-slide-text">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a></div>
          </li>
          <?php endwhile;  wp_reset_postdata(); else : ?>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
          <?php endif; ?>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="campaign-panel campaigns-page show-for-medium-up">
  <div class="row" >
    <div class="large-12 columns text-center campaign1-container">
      <div class="campaign1">
        <ol>
          <?php $query = new WP_Query( 'order=asc&category_name=viking-loyalty-campaign&post_status=publish&posts_per_page=3&offset=3&paged='. get_query_var('paged')); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <li>
            <h2><span class="campaign-thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></span></h2>
            <div class="large-12 columns campaign-slide-text">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere her</a></div>
          </li>
          <?php endwhile;  wp_reset_postdata(); else : ?>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
          <?php endif; ?>
        </ol>
      </div>
    </div>
  </div>
</div>


<div class="campaign-mobile-panel columns campaign-mobiles-page hide-for-medium-up">
  <?php $query = new WP_Query( 'order=asc&category_name=viking-loyalty-campaign&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="row">
    <div class="small-12 medium-8 large-8 columns panel text-left campaign-mobile-text">
      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>
      <a class="button ser reWrite" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Læs mere</a> <span class="clear"></span> </div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>

<div class="full-width Bordas_download">
  <?php $query = new WP_Query( 'order=asc&category_name=temaer-download&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="row" data-equalizer="bar">
    <div class="small-12 medium-6 large-6 columns" data-equalizer-watch="bar">
      <?php the_content(); ?>
    </div>
    <div class="small-12 medium-6 large-6 columns brochear" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer-watch="bar">&nbsp;</div>
  </div>
  <?php endwhile;  wp_reset_postdata(); else : ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
<div class="full-width Bordas_digital kontakt">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h2>kontakt</h2>
      <p>Du kan skrive til Bording Data A/S via vores kontaktformular nedenunder. <br>
        Vi glæder os til at høre fra dig.</p>
    </div>
    <div class="small-12 medium-12 large-12 text-left"> <?php echo do_shortcode( '[contact-form-7 id="105" title="Bordus Digital form"]' ); ?> </div>
  </div>
</div>