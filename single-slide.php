<?php get_header();
// content goes here Slide-->
global $post;
$postID = get_the_ID(); ?>
<div class="full-width">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <div class="small-12 medium-6 large-6 columns full-width-banner" style="height:420px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
  </div>
  <div class="small-12 medium-6 large-6 columns">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns full-width-text">
        <p><?php the_field('price'); ?></p>
        <?php the_content(); ?>
      </div>
    </article>
  </div>
    <?php endwhile;?>
     <div class="relevant-portfolio-panel products-page">
          <div class="large-12 columns">
            <h4>Related Products</h4>
          </div>
          <div class="large-12 columns">
            <div class="portfolio grid">
              <?php $query = new WP_Query( array( 'post__not_in' => array($postID),'order' => 'ASC', 'category_name' => $post_categories, 'post_type' => 'slide', 'post_status' => 'publish', 'posts_per_page' => -1 )); ?>
              <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="small-12 medium-4 large-4 float-left cc">
                <a class="medium-12 large-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
                  <h3 class="rpTitle"><?php the_title(); ?></h3>
                </a>
                <div class="small-12">
                <a class="small-12" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
                <div class="full-width-banner" style="height:330px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div></a>
                </div>
              </div>
              <?php endwhile;  wp_reset_postdata(); else : ?>
              <?php endif; ?>
            </div>
          </div>
      </div>
  </div>
</div>
<?php get_footer(); ?>