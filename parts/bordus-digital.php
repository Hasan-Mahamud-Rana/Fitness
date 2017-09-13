<div class="full-width Bordas_digital">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h1 class="PageHdline"><?php the_title(); ?></h1>
      </div>
      <div class="small-12 medium-12 large-12 columns">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="full-width Bordas_download">
      <div class="row">
        <?php $query = new WP_Query( 'order=asc&category_name=bordus&post_status=publish&paged='. get_query_var('paged')); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="small-12 medium-6 large-6 columns">
         <div class="panel text-left">
            <?php the_content(); ?>
         </div>
        </div>
        <div class="small-12 medium-6 large-6 columns brochear" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
        </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    <?php endif; ?>
  </div>
</div>
<div class="full-width Bordas_digital kontakt">
  <div class="row">
  <div class="small-12 medium-12 large-12 columns">
  <h2>kontakt</h2>
  <p>Du kan skrive til Bording Data A/S via vores kontaktformular nedenunder. <br>
Vi glæder os til at høre fra dig.</p>
  </div>
  <div class="small-12 medium-12 large-12 text-left">
    <?php echo do_shortcode( '[contact-form-7 id="105" title="Bordus Digital form"]' ); ?>
  </div>
  </div>
</div>