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

$host = $_SERVER['REQUEST_URI'];

// Ifs and elseifs give us explicitly defined backgrounds
if($host == '/beavers')
	{ 
		$selectedBg = ('beaverchars.png');
	}

/*elseif($host == '/anyotherpage')
	{
		$selectedBg = ('animage');
	}*/

// Array of backgrounds for non-defined pages
else
	{
	$availableBGs = [
		["bg" => "rucksack.jpg", "position" => "bottom"],
		["bg" => "grylls.png", "position" => "bottom"],
		["bg" => "abseil.jpg", "position" => "top"]
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

<title><?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<link rel="icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/favicon.ico" />
<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/favicon.ico" />

<?php wp_head(); ?>
<style type="text/css">
<!--
body{
background: url(<?php echo get_stylesheet_directory_uri() , "/images/bg/" , $selectedBg; ?>) no-repeat fixed <?php echo $selectedBgPos; ?> right;
}
-->
</style>
</head>
<body <?php body_class( $class ); ?>>

<div id="head" class="clearfloat">

<div class="clearfloat">
	<div id="logo" class="left">
	<a href="<?php echo home_url(); ?>/"><h1 class="name"><?php bloginfo('name'); ?></h1><h1 class="desc"><?php bloginfo('description'); ?></h1></a>
</div>
	<div class="right">
<a href="http://scouts.org.uk" target="_blank"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/scout-logo-small.jpg" alt="Scouts Logo" /></a><br />
	</div>

</div>

<div id="navbar" class="clearfloat">
<div id="page-bar" class="left clearfloat">
<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>

<ul id="login" style="float:right">
<?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
</ul>


</div>
</div>

<div id="page" class="clearfloat">