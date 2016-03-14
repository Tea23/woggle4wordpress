<?php
/* Woggle 4 Wordpress Remix
 *
 * Woggle 4 Wordpress Remix is a free Wordpress theme derived from Woggle 4 Wordpress
 * developed by hawesWeb Productions available at iscout4wordpress.org.uk
 *
 * Woggle 4 Wordpress Remix is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Woggle 4 Wordpress Remix is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Woggle 4 Wordpress Remix.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
?>

<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>
	
	<span class="breadcrumbs"><a href="<?php echo get_option('home'); ?>/">Home</a> &raquo; Search</span>

	<h2 class="title">Search <strong>Results</strong></h2>

	<div id="archive">	

	<?php while (have_posts()) : the_post(); ?>

	<div class="clearfloat">
	<h3 class="cat_title"><?php the_category(', '); ?> &raquo;</h3>
	<div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
	<div class="meta">[<?php the_time('j M Y') ?> | <?php comments_popup_link('No Comment', 'One Comment', '% Comments');?> | <?php if(function_exists('the_views')) { the_views(); } ?>]</div>	
	
	<div class="spoiler">
	<?php	$values = get_post_custom_values("Image");
	if (isset($values[0])) { ?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
	<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
$values = get_post_custom_values("Image"); echo $values[0]; ?>&w=150&h=150&zc=1&q=100"
alt="<?php the_title(); ?>" class="left" width="150px" height="150px"  /></a>
      <?php } ?>

	<?php the_excerpt(); ?>
	</div>

	</div>

		
<?php endwhile; ?>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
			else { ?>

			<div class="right"><?php next_posts_link('Next Page &raquo;') ?></div>
			<div class="left"><?php previous_posts_link('&laquo; Previous Page') ?></div>
			<?php } ?>

		</div>

	</div>

	<?php else : ?>
	

	<span class="breadcrumbs"><a href="<?php echo get_option('home'); ?>/">Home</a> &raquo; Not Found</span>
	<h2 class="title">No posts found. Try a different search?</h2>
	

	<?php endif; ?>

	</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>
