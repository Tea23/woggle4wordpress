<div id="front-popular" class="clearfloat">

	<div id="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div class="post" id="post_<?php the_ID(); ?>">

<?php 

// Skip using the_title() for specific pages and give a custom header instead
// GNU GPL 3 or later.
// Once again we give thanks unto Daniel

// REQUEST_URI is /page
$path = $_SERVER['REQUEST_URI'];

// Define pages to have custom headers
	$search_array = [

		// format
		// "/page" => 'full html',

		"/beavers" => '<img src="/images/beavers.jpg" alt="Beavers" />',
		"/cubs" => '<img src="/images/cubs.jpg" alt="Cubs" />',
		"/scouts" => '<img src="/images/scouts.jpg" alt="Scouts" />',
		"/volunteer" => '<img src="/images/gryllykins.png" alt="Bear Grylls volunteers... could you?" />'

	];

// If $search_array matches $path, give the value as page title

	if (array_key_exists($path, $search_array)) {
		echo $search_array[$path];
	}

// If it doesn't, just do the regular title

	else {
		echo '<h2 class="title">'; the_title(); echo '</h2>';
	}

?>
			
		<div class="entry clearfloat">
		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>
		
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</div>
		
	<?php endwhile; endif; ?>

	</div>
<?php get_sidebar(); ?>

</div>
</div>

