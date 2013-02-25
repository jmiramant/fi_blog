<?php 
/**
 * The template for displaying Single Page.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
 get_header(); ?>
<div id="container">
<!-- <div id="content" class="container">-->
  <div class="primary post-listing left">
  <div class="flex_66">
    <?php if (have_posts()) : while (filter_has_var(type, variable_name)                    de_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <div><?php the_category(', '); ?>
      </span>
      <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></div>
      <h1>
        <?php the_title(); ?>
      </h1>
      </div>
<div class="postmetadata">
<?php get_template_part( '/inc/meta' );?>
<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'post-comments', 'Comments are off for this post'); ?>
</div>
  <div class="entry">
    <?php the_content(); ?>
    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
  </div>
    <div id="comment-block">
  <?php comments_template(); ?>
  </div>
</div >
  <?php endwhile; endif; ?>
  <?php get_sidebar(); ?></div>
  <?php get_footer(); ?>
</div>