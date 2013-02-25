<?php 
/**
 * The template for displaying Single Posts.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="container">
<!-- <div id="content" class="container">-->
  <div class="primary post-listing left">
<div class="flex_66">

  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <div class="bread-crumb"><?php simonwpframework_breadcrumb();?></div>

    <h1>
      <?php the_title(); ?>
    </h1>
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <div class="postmetadata">
        <?php get_template_part( '/inc/meta' );?>

      <span class="categories">Filed Under:
      <?php the_category(', '); ?>
      </span>
      <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
    </div>
  </div>
<div id="comment-block">
<?php comments_template(); ?>
</div>
<?php endwhile; endif; ?>
<div><?php wp_link_pages(); ?></div>
</div>

<?php get_sidebar(); ?></div>
<?php get_footer(); ?>
</div>