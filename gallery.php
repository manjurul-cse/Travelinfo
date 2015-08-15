<?php
include_once('connect.php');
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Travel Store</title>
        <link rel="stylesheet" href="css/basic.css" type="text/css" />
		<link rel="stylesheet" href="css/galleriffic-2.css" type="text/css" />
		<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
		<!-- We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>
    	<div style="height:30px"></div>
	<div id="header" style="width:978px;">
            

		
            <div id="" 
                 style="padding-left:500px;
                        padding-top: 30px;
                        align:right;">
                <form style=""
                              method="post" name="searchform" action="index1.php?p=result"/> 
                              <input type="text" name="find"
                                     style="width:300px;
                                             height:28px;
                                             background-color: #c6e7fc;
                                             border:14px;" >
                             <input type="hidden" name="searching" value="yes" />
                             <input type="submit" name="search" 
                                     style=" width: 95px;
                                             height: 32px; 
                                             background-color:darkgreen ;
                                             color:white;"
                                     value="Search"/> 
                            </form>
                	
            </div>
            
                          <style type="text/css">
                #nav
{
    padding:0;
    width:1300px;
}
#nav li 
{
    display:inline;
}
#nav li a 
{   
   font-family:tahoma;
   font-size:17px;
   font-variant: small-caps;
   background-color:#a5cd4e;
   text-decoration: none;
   float:left;
   padding:10px;
   color:blue;
   border-bottom:0px;
   border-top: 0px;
   border-top-color:#000000;
   border-top-style:solid;
   border-bottom-color:#000000;
   border-bottom-style:solid;
}
#nav li a:hover 
{
   background-color:darkgrey;
   padding-bottom:12px;
   border-bottom-style:solid;
   
}     </style> <div style="height:30px"></div>       
<ul id="nav" style="background-image:url(menubar.jpg);">
     <li><a style="padding-left: 37px;padding-right:37px;padding-bottom: 16px;padding-top: 16px;" href="index.php?">Home</a></li>
     <li><a style="padding-left:37px;padding-right:37px; padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=history">About Bangladesh</a></li>
     <li><a style="padding-left:37px;padding-right:37px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=place">Place</a></li>
    <li><a style="padding-left:37px;padding-right:37px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=hotels">Hotels</a></li>
    <li><a style="padding-left:38px;padding-right:38px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=gallary">Gallery</a></li>
    <li><a style="padding-left:38px;padding-right:38px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=news">News</a></li>
    <li><a style="padding-left:38px;padding-right:38px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=contactus">Contact Us</a></li>
</ul>
<div style="height:5px"></div>
	</div>
        <div id="wrapper">
          <div id="central">
              

              <div id="page">
			<div id="container">
			  <div id="gallery" class="content">
      <div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container"></div>
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
						

							<?php
							
							$sql="select * from image";
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result)){
								
						echo'<li>
							<a class="thumb" name="drop" href="'.$row['slide'].'" title="Title #1">
								<img src="'.$row['new'].'" alt="Title #1" />
							</a>
							<div class="caption">
								<a style="color:red;text-decoration:none;" href=index2.php?id='.$row['place_image_id'].'>'.$row['name'].'</a>
                 </td>
							</div>
						</li>';
							}
							?>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>


                    <script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '300px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>
                    
                


            </div>
           
            


            <div id="footer" style="padding:0px;">


                <div>
                    <a href="index.php">Home</a>   |   <a href="index1.php?p=place">Place</a>   |   <a href="index1.php?p=hotels">Hotels</a>   |   <a href="index1.php?p=news">News</a>   |   <a href="index1.php?p=contactus">Contacts</a>  																																																																															
                </div>
                <p id="copy">Copyright &copy;. All rights reserved. Design by <a href="http://bdtravelinfo.com" target="_blank" title="Best Free Templates">MMR</a>     </p>
            </div></div>
    </body>
</html>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
