<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage">

<?php
// Terrible script that isn't used yet (see area51)
// I wrote this while drunk and then Miika and Daniel fixed it for me.
// 
// @author Joe Davison
// @contributor Miika Virtanen
// @contributor Daniel Evans
// @license https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL 3.0

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

// Ifs and elseifs give us explicitly defined backgrounds
if($host == 'area51.8thportsmouth.org.uk/beavers')
	{ 
		$selectedBg = ('//8thportsmouth.org.uk/images/bg/beaverchars.png');
	}

/*elseif($host == '8thportsmouth.org.uk/anyotherpage')
	{
		$selectedBg = ('//animage');
	}*/

// Array of backgrounds for non-defined pages
else
	{
	$availableBGs = [
		["bg" => "//8thportsmouth.org.uk/images/bg/rucksack.jpg", "position" => "bottom"],
		["bg" => "//8thportsmouth.org.uk/images/bg/grylls.png", "position" => "bottom"],
		["bg" => "//8thportsmouth.org.uk/images/bg/abseil.jpg", "position" => "top"]
	];

		// Assign backgrounds a number, pick a random one and then define
		$index = mt_rand(0, count($availableBGs) - 1);
		$selectedBg = $availableBGs[$index]['bg'];
		$selectedBgPos = $availableBGs[$index]['position'];
		
	}
?>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="keywords" content="Scouting, Portsmouth Scouts, Portsmouth, Everyday Fun, Everyday Challenge, Everyday Adventure, Scouts, 8th Portsmouth" />
<meta name="description" content="The 8th Portsmouth is a Scout Group in Southsea which provides fun and adventure to any child from the ages 6 - 14." />

<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?> <?php if ( is_single() ) { ?> &raquo; Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<link rel="icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

<?php wp_head(); ?>
<style type="text/css">
<!--
body{
/*background: url(<?php echo $selectedBg; ?>) no-repeat fixed bottom right;
background-attachment: fixed;
background-position: right;*/
}
-->
</style>
</head>
<body>

<div id="head" class="clearfloat">

<div class="clearfloat">
	<div id="logo" class="left">
	<a href="<?php echo get_option('home'); ?>/"><h1 class="name"><?php bloginfo('name'); ?></h1><h1 class="desc"><?php bloginfo('description'); ?></h1></a>
</div>
	<div class="right">
<a href="http://scouts.org.uk" target="_blank"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/scout-logo-small.jpg" alt="Scouts Logo" /></a><br />
	</div>

</div>

<div id="navbar" class="clearfloat">
<div id="page-bar" class="left clearfloat">


<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
<ul id="login" style="float:right"><li><a href="https://twitter.com/8thPortsmouth"><img style="float:left;margin-right:5px;" src="/images/tw.png" alt="TW" /> Twitter</a></li><li><a href="https://www.facebook.com/8thPortsmouth"><img style="float:left;margin-right:5px;" src="/images/fb.png" alt="FB" /> Facebook</a></li><li><a href="https://8thportsmouth.org.uk/members-area">Members Area</a></li></ul>


</div>
</div>

<div id="page" class="clearfloat">