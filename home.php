<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Travel Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="header">
            <div id="" 
                 style="padding-left:250px;
                        padding-top: 30px;">
                <form style=""
                              method="post" name="searchform" action="index1.php?p=result"/> 
                              <input type="text" name="find"
                                     style="width:616px;
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
		<div id="meta" style="">
                    
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
   font-family:Arial;
   font-size:15px;
   
   text-decoration: none;
   float:left;
   padding:10px;
   background-color:#D2D2D2;
   color:darkslategrey;
   border-bottom:0px;
   border-top: 0px;
   border-top-color:#000000;
   border-top-style:solid;
   border-bottom-color:#000000;
   border-bottom-style:solid;
}
#nav li a:hover 
{
   background-color:blanchedalmond;
   padding-bottom:12px;
   border-bottom-style:solid;
   margin:-1px;
}
            </style>
            
            
<ul id="nav">
     <li><a style="padding-left: 30px;padding-right:30px;padding-bottom: 16px;padding-top: 16px;" href="index.php?">Home</a></li>
     <li><a style="padding-left:30px;padding-right:30px; padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=history">Overview of Bangladesh</a></li>
     <li><a style="padding-left:30px;padding-right:30px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=place">Place</a></li>
    <li><a style="padding-left:30px;padding-right:30px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=hotels">Hotels</a></li>
    <li><a style="padding-left:30px;padding-right:30px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=gallary">Gallary</a></li>
    <li><a style="padding-left:30px;padding-right:30px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=news">News</a></li>
    <li><a style="padding-left:30px;padding-right:30px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=contactus">Contact Us</a></li>
    <li><a style="padding-left: 30px;padding-right:30px;padding-bottom: 16px;padding-top: 16px;" href="admin/admin.php">Admin</a></li>
</ul>

   
	</div>
	<div id="wrapper">
		<div id="left">
			<div id="left_navigation">
				<img src="images/gtop.gif" alt="" width="191" height="8" />
				<div class="title1" >Popular Tours</div>
				<ul class="contries">
                                        <?php 
                                         mysql_connect('localhost', 'root','');
                                         mysql_select_db('bdtrip');
                                         $sql = ("SELECT name FROM place limit 7"); 
                                         $result=mysql_query($sql) or die ("Error Found2".  mysql_error()); 
                                         echo '<br>';
                                         $numrows=mysql_num_rows($result) or die ("Error Occured". mysql_error());
                                         while($row = mysql_fetch_array($result)){
                                                echo "<a style=color:green; href=index2.php?p=$row[name]>$row[name]</a>";
                                                echo "<br />";
                                         }
                                         ?>
					
				</ul>
				<a href="index1.php?p=place" class="more">more tours</a>
				<img src="images/gbot.gif" alt="" width="191" height="8" />
			</div>
                    
			<a href="#" class="banner"><img src="images/banar1.jpg" alt="" width="191" height="346" /></a></div>	
		</div>  
		<div id="central">
 
			<div class="welcome">
                            <h3>Travel Information</h3>

	<p>
	Famously poor and heavily prone to flooding, Bangladesh makes an unlikely tourist destination, and a trip here is certainly off the beaten track.
Bangladesh has more than 8,000km of navigable waterways and boarding a boat along a river is a quintessential Bangladesh experience.
Predominantly agricultural, Bangladesh is rural bliss for many travellers and wherever you go you�ll enjoy vistas that are beautifully lush and wonderfully green. Nowhere is this more the case than in the gentle hills of the northeast.
If you�re happy to leave behind your home comforts and willing to get out and explore, this beautifully green and wonderfully welcoming country could be one of the most fascinating places you ever visit.
Tempted? Here�s a guide to the star attractions of one of the least visited countries in south Asia.
It just goes to show how much the world has to learn about the trendsetting, breathtaking and hard-working country that is Bangladesh.
	</p>
        </div><div>
				<?php   
                                $pages_dir='pages';
                                if(isset($_GET['p'])){
                                    if(!empty($_GET['p'])){             
                                         $pages=scandir($pages_dir);
                                         unset ($pages[0],$pages[1]);          
                                         $p=$_GET['p'];
                                         if(in_array($p.'.inc.php', $pages)){
                                         include($pages_dir.'/'.$p.'.inc.php');
                                         }
                                         else{
                                            echo 'Sorry. Page does not found';
                                         }
                                    }
                                    else{
                                        include ($pages_dir.'/home.inc.php');
                                    }
                                }
                                ?>
                        </div>
			
                      <div class="block">
				
                          
				<div> 
                                <?php
                                    mysql_connect ("localhost", "root","")  or die ("Connection failed");
                                    mysql_select_db ("bdtrip") or die("Can not selected");
                                    if(isset($_POST['searching'])){
                                        $searching=$_POST['searching'];

                                    if($_POST['searching']=='yes'){


                                    if(isset($_POST['find'])){
                                         $find=$_POST['find'];
                                     if ($find == "") 
                                     { 
                                     echo "<p>You forgot to enter a search term"; 
                                     exit; 
                                     } 

                                     // Otherwise we connect to our Database 


                                     // We preform a bit of filtering 
                                     $find = strtoupper($find); 
                                     $find = strip_tags($find); 
                                     $find = trim ($find); 

                                     //Now we search for our search term, in the field the user specified 
                                     $sql = ("SELECT *FROM place WHERE name LIKE'%$find%'") or die ("Error found1").  mysql_error(); 

                                     //And we display the results 
                                    $result=mysql_query($sql) or die ("Error Found2".  mysql_error()); 
                                    echo '<br>';
                                    //-count results
                                    $numrows=mysql_num_rows($result) or die ("Error Occured". mysql_error());

                                    if(isset($_POST['name'])){
                                        $name=$_POST['name'];
                                    }
                                    if(isset($_POST['location'])){
                                        $location=$_POST['location'];
                                    }
                                    if(isset($_POST['description'])){
                                        $location=$_POST['description'];
                                    }
                                    //-create while loop and loop through result set
                                    while($row=mysql_fetch_array($result)){

                                    $name =$row['name'];
                                            $location=$row['location'];
                                            $description=$row['description'];

                                    //-display the result of the array

                                    echo "<ul>\n"; 
                                    echo "<h4><a href=index1.php?p="   .$name.  ">$find</a></h4>\n";
                                    echo "Location:$location";
                                    echo "<h4><a href=index1.php?p="   .$name.  ">click here for details</a></h4>\n";
                                    echo "</ul>";
                                    }
                                    }}
                                    }
                                     ?> 
</div>
                    </div>
               
			
		</div>
		<div id="right">
		  
                    <div>
				<p class="title2">Latest News</p>
				<div class="item">
				<marquee 
                                    direction="up" scrollamount="4" scrolldelay="80" width="190"  
                                    height="150"  onMouseOver="this.stop()" onMouseOut="this.start()">
			
					<p><br>
                                            <?php
                                            mysql_connect ("localhost", "root","")  or die ("Connection failed");
                                            mysql_select_db ("bdtrip") or die("Can not selected");
                                            
                                            $sql = ("SELECT *FROM news order by Date asc limit 2") or die ("Error found1").  mysql_error(); 
                                            $result=mysql_query($sql) or die ("Error Found2".  mysql_error());
                                            
                                            while($row=mysql_fetch_array($result)){
                                            echo '<h5 style=color:green">'.$row['Date'].'</h5>';    
                                            echo '<h4 style=color:red;">'.$row['heading'].'</h4><br/>';
                                            echo $row['news'].'<br/>';
                                            }
                                            
                                            ?></marquee></p>	
                                       
                                </div>
			  <img src="images/right_bot.gif" alt="" width="261" height="21" /><br />
			</div>
		  <div class="right_block">
				<p class="title3">Beautiful Bangladesh</p>
                                <script type="text/javascript" src="simple-jquery-slideshow/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
function slideSwitch() {
    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    // use this to pull the divs in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow DIV:first');

    // uncomment below to pull the divs randomly
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<style type="text/css">

/*** set the width and height to match your images **/

#slideshow {
    position:relative;
    height:200px;
}

#slideshow DIV {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
    height: 148px;
    background-color: #FFF;
}

#slideshow DIV.active {
    z-index:10;
    opacity:1.0;
}

#slideshow DIV.last-active {
    z-index:9;
}

#slideshow DIV IMG {
    height: 148px;
    display: block;
    border: 0;
    margin-bottom: 0px;
}

</style>
<div class="item">
				<div id="slideshow">
                    <div class="active">
                        <a href="index1.php?p=Mahastangarth">Mahastangarth<img src="simple-jquery-slideshow/banner01.jpg" alt="Mahastangarth" /></a>

                    </div>

                    <div>
                        <a href="index1.php?p=Saint Martin's">Saint Martin's<img src="simple-jquery-slideshow/banner02.jpg" alt="Slideshow Image 2" /></a>

                    </div>

                    <div>
                        <a href="index1.php?p=Rangamati">Rangamati<img src="simple-jquery-slideshow/banner03.jpg" alt="Slideshow Image 3" /></a>

                    </div>

    
</div>
</div>
				
			  <img src="images/right_bot.gif" alt="" width="261" height="21" /><br />
			</div>
               <iframe src="//www.facebook.com/plugins/likebox.php?
                       href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FTravel-Information%2F285115098255057%3Fref%3Dhl&amp;
                       width=292&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false" 
                       scrolling="no" frameborder="0" 
                       style="border:none; overflow:hidden; width:292px; height:258px;" 
                       allowTransparency="true">
                   
               </iframe>
                </div>
	</div>
	<div id="footer">
		<div>
			<a href="index.php">Home</a>   |   <a href="index1.php?p=place">Place</a>   |   <a href="index1.php?p=hotels">Hotels</a>   |   <a href="index1.php?p=news">News</a>   |   <a href="index1.php?p=contactus">Contacts</a>  																																																																															
		</div>
		<p id="copy">Copyright &copy;. All rights reserved. Design by <a href="http://bdtravelinfo.com" target="_blank" title="Best Free Templates">MMR</a>     </p>
	</div>
</body>
</html>
