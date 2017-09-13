<?php 
/*
Template Name: FAQs Page
*/
get_header(); ?>
<div class="full-width">
  <div class="full-width-banner" style="height:482px; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
    <div class="row">
    <div class="small-12 large-6 columns promoContent">
        <h2 class="innerTitle"><?php the_title(); ?></h2>
        
        <?php the_field('promo_summery'); ?>
        </div>
        </div>
  </div>
<div class="row">
  <div class="small-12 large-12 columns" role="main">
  <?php $query = new WP_Query( 'order=asc&post_type=faq&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="post-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>  
      </div>
      <div class="entry-content">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="row">
          <div class="column">
            <?php the_post_thumbnail( '', array('class' => 'th') ); ?>
          </div>
        </div>
      <?php endif; ?>
      <?php the_content(); ?>
    </div>
    <div class="post-footer">
      <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
      <p><?php the_tags(); ?></p>
    </div>
  </article>

<?php endwhile;?> <?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>