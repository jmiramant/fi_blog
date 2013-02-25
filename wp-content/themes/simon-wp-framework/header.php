<?php
/**
 * The template for Header.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } ?>
 <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title><link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
<div id="container">
    
    <div id="header" class="container">
            
              <a href="/" class="alt logo">EverFi<span class="eye"></span></a>
        <strong class="homepage"><a href="http://everfi.com">Home</a></strong>
        <strong class="tagline">Blog</strong>
        
                  
    </div> 
<div class="contain">
<div class="inner_wrap">
</div>