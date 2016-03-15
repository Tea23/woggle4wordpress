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
	
 	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

 	<?php /* If this is a category archive */ if (is_category()) { ?><h2 class="title"><?php single_cat_title(); ?></h2>

	<?php /* If this is a tagged archive */ } elseif (is_tag()) { ?>	<h2 class="title">Articles tagged with: <?php single_tag_title(); ?></h2>

 	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>	<h2 class="title">Articles Archive for <?php get_option('date_format'); ?></h2>

 	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?><h2 class="title">Articles Archive for <?php get_option('date_format'); ?></h2>
 	
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2 class="title">Articles Archive for Year <?php get_option('date_format'); ?></h2>

 	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2 class="title">The Archives</h2>
 	 <?php } ?>

	<div id="archive">
		
	<?php while (have_posts()) : the_post(); ?>
	
			<div class="clearfloat">
	<div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
	<div class="meta"><?php get_option('date_format') ?></div>	
	
	<div class="spoiler">
	

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
	
	<?php else : ?>
	
	<h2 class="title">No posts found. Try a different search?</h2>
	
	<?php endif; ?>

	</div>
	
	</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
