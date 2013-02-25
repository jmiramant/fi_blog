<?php
/**
 * The template for displaying Index.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */

get_header(); ?>
<div id="container">
  <?php wowslider(1); ?>
<!-- <div id="content" class="container">-->
  <div class="primary post-listing left">
<div class="alpha flex_66">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="postdate">
      <div class="postmonth">
        <?php the_time('M') ?>
      </div>
      <div class="postday">
        <?php the_time('d') ?>
      </div>
    </div>  
     <span id="cat_bubble"><?php the_category(', '); ?></span>
      <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
    <h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
      <?php if ( get_the_title() == '' ) { ?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link">No Title</a>
      <?php } else { ?>
      <?php the_title(); ?>
      <?php } ?>
      </a></h1>
      <div class="postmetadata">
      <?php get_template_part( '/inc/meta' );?> 
      <div class="entry">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php get_template_part( '/inc/nav' );?>
  <?php else : ?>
  <h2>Not Found</h2>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?></div>
<?php get_footer(); ?>
</div>