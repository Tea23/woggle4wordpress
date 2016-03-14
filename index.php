<?php get_header(); ?>

<div id="frontpage">

<div id="top" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(10) ) : ?> 

<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/top.gif">
<?php endif; ?>
</div>

<div id="side" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(9) ) : ?> 

<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/side.gif">
<?php endif; ?>
</div>

<?php include(TEMPLATEPATH . '/maintable.php'); ?>
</div>	

<?php get_footer(); ?>
