<div class="full-width">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="full-width-banner" style="height:482px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
       <div class="row">
        <div class="small-12 large-6 columns promoContent">
        <h2 class="innerTitle"><?php the_title(); ?></h2>
        
        <?php the_field('promo_summery'); ?>
        </div>
        </div>
  </div>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>