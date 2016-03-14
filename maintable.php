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
<div class="meta2"><?php the_time('j M Y') ?></div></div>
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