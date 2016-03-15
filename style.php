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

/* Slideshow Styles */

#slide-wrapper {
background: url(images/slider-bg.gif) no-repeat;
width: 921px;
height: 365px;
margin-top: 10px;
padding-top:5px;
z-index:1;
margin-left: 10px;
clear: both;
float: left;
}

.featurebox {
width: 921px;
height: 365px;
clear:both;
margin:auto;
}


#image-wrapper {
margin:0 auto;
display:none;
padding:0;
width: 921px;
padding-top:5px;
}

#image-wrapper * {
margin:0;
padding:0;
}
	
#full-image {
position:relative;
padding:0;
width: 860px;
}

.frontslide {
display: none;
}

#text {
float:right;
position:absolute;
top:10px;
width:390px;
height:0;
color:#6e6e6e;
overflow:hidden;
z-index:4;
padding:0px;
left: 490px;
padding-left:10px;
padding-right:10px;
}

#text h3 a {
padding:2px 0 15px 3px;
color: #<?php echo $color;?>;
font-size: 24px;
font-weight:bold;
letter-spacing:-1px;
text-decoration: none;
}

#text h3 a:hover {
text-decoration: underline;
}

#text p {
padding:0 0 5px 3px;
color:#6e6e6e;
float:right;
font-size:12px;
text-align: justify;
margin: 0px;
}

#text p a {
color:#993399;
}

.date {
color:#9d9c9c;
font-size: 10px;
font-style: italic;
}


#image {
width:440px;
height:250px;
}

#image img {
position:absolute;
z-index:2;
width:440px;
height:200px;
left:20px;
top:10px;
border:0px solid #bfbfbf;
}

.imgnav {
position:absolute;
width:25%;
height:180px;
cursor:pointer;
z-index:3;
}

#imgprev {left:0;background:none;}
#imgnext {right:0;background:none;}

#imglink {
position:absolute;
height:150px;
width:100%;
z-index:5;
opacity:.4;
filter:alpha(opacity=40);
}

.linkhover { }

#thumbnails {margin-top:20px;height:38px;}

#arrowleft {
float:left;
width:26px;
height:49px;
background:url(images/left.png) top center no-repeat;
padding-left:40px;
margin-top: 30px;
z-index:6;
}

#slideleft:hover {}

#arrowright {
float:right;
width:26px;
height:49px;
background:url(images/right.png) top center no-repeat;
padding-right:40px;
margin-top: 30px;
z-index:7;
}

#slideright:hover {	}

#frontarea {
float:left;
position:relative;
width:285px;
margin-left:3px;
height:100px;
overflow:hidden;
margin-top:-5px;
}

html* #frontarea {margin-left:0;}

#fronter {
position:absolute;
left:0;
height:100px;
top: 10px;
}

#fronter img {
cursor:pointer;
border:2px solid #<?php echo $color;?>;
}