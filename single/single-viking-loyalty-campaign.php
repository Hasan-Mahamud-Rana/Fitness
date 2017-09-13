<?php get_header(); ?>
<!-- viking loyalty campaign content goes here Slide-->
<div class="full-width viking_loyalty">
    <?php while ( have_posts() ) : the_post(); ?>
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
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>