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

	<!--<div id="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div class="post" id="post_<?php the_ID(); ?>">

<span class="breadcrumbs"><?php the_category(', ') ?></span>

<h2 class="title"> <?php the_title(); ?></h2>
<div id="stats">
<span><?php the_time('j F Y') ?></span>
</div>
			
		<div class="entry clearfloat">
		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>
		
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</div>
		
	<?php endwhile; endif; ?>

	</div>-->


<?php get_footer(); ?>
