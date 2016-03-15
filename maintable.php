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

<div class="newmaintable2home"> 

            <div class="hpContainer"> 
                <div style="" id="topblock" class="topblock"> 

                    <div class="leftpanel"> 

                        <div id="lpanel1" class="activepanelleft Dark"> 



<div class="featured"><div style="margin-top:0px">
<div align="float:left"><h3>Latest News</h3></div>
<?php query_posts("showposts=3&category_name=News"); $i = 1; ?>
	
      	<?php while (have_posts()) : the_post(); ?>
<div class="info2"><div style="padding-top="10px"><h3><a href="<?php the_permalink() ?>" rel="bookmark" class="title"><?php the_title(); ?></h3></a>
<div class="meta2"><?php get_option('date_format') ?></div></div>
	<?php $values = get_post_custom_values("Image");
	if (isset($values[0])) { ?>
      <b><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"></b>
	<img src="<?php $values = get_post_custom_values("Image"); echo $values[0]; ?>"&w=200&h=120&zc=1&q=100
alt="<?php the_title(); ?>" class="left" width="200px" height="120px" /></a>
</div>
      <?php } ?>
 <?php endwhile; ?>

</div>
</div>
                        </div> 
<div rel="earth,2," id="rpanel2" class="rightpanelcontent"> 
                            <h2 class="Dark"> 
                              
                            </h2> 
                            <p></p> 
                        </div> 
                        <div rel="aubergine,3," id="rpanel3" class="rightpanelcontent">
                            <h2 class="Dark"> 
                              
                            </h2> 
                            <p></p> 
                        </div> 
                       <div rel="ocean,4," id="rpanel4" class="rightpanelcontent lastpanel">
                            <h2 class="Dark"> 
                             
                            </h2> 
                            <p></p>
                        </div> 
                    </div> 
                </div> 
</div>
</div>
</div>