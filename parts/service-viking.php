<div class="full-width viking_temaer">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="full-width-banner" style="height:605px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline">
          <?php the_title(); ?>
        </h2>
      </div>
      <div class="small-12 medium-12 large-12 columns entry-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>