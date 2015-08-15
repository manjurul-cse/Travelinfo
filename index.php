<?php
include_once 'connect.php';


?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Travel Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5"></meta>
<meta name="google-translate-customization" content="c58078a5912f5e6b-47b018661a8bf154-g7578914ca19d67ca-19"></meta>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta name="google-site-verification" content="HEv0yejXFoJPurm8PuRzuW1_24W7M-TmECz53iZ8KJc" />
<link rel="stylesheet" href="calendarjquerycss3/css/calendar.css" media="screen">

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
     <li><a style="padding-left:37px;padding-right:37px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=place">Places</a></li>
    <li><a style="padding-left:37px;padding-right:37px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=hotels">Hotels</a></li>
    <li><a style="padding-left:38px;padding-right:38px;padding-bottom: 16px;padding-top: 16px;" href="gallery.php">Gallery</a></li>
    <li><a style="padding-left:38px;padding-right:38px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=news">News</a></li>
    <li><a style="padding-left:38px;padding-right:38px;padding-bottom: 16px;padding-top: 16px;" href="index1.php?p=contactus">Contact Us</a></li>
</ul>
<div style="height:5px"></div>


   
	</div>
   
	
	<div id="wrapper">
		<div id="left">
			<div id="left_navigation">
				<ul class="contries"  style="padding:0 0 1px 10px;">
                                         <?php
                                                 
                                                 $sql=("select * from image LIMIT 5")or die ("Error found1").  mysql_error();
                                                 $result=mysql_query($sql) or die ("error occured at check query").mysql_error();
                                                // mysql_num_rows($sql);
                                                 while($x=mysql_fetch_assoc($result)){
                                                        echo "<img src=".$x['thumbs'] . " width='191px' height='117'><br/>";
                                                        echo "<a style='text-decoration:none;' href=index2.php?id=".$x['id'].">".$x['name']."</a>";
                                                   
                                                 }
                                          ?>
			</div>
                </div>	
         
            
                <div id="central" style="width:507px;">
                        <?php include "index3.php"?>
			 <div class="block">
			    <div> 
                                        <?php
                                        include('search.php');
										search();
                                     ?> 
                                </div>
                            </div><?php include 'pages/home.inc.php';?>
                    
               </div>
            <div id="right" style="padding-top:380px;">
                <div id="calendar" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="calendarjquerycss3/js/jquery-ui-datepicker.min.js"></script>
<script>
	$('#calendar').datepicker({
		inline: true,
		firstDay: 1,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
	});
</script>

</div>
            </div>

	<div id="footer" style="width:990px;padding-left:3px;">
           
           <div>
		<a href="index.php">Home</a>   |   <a href="index1.php?p=place">Place</a>   |   <a href="index1.php?p=hotels">Hotels</a>   |   <a href="index1.php?p=news">News</a>   |   <a href="index1.php?p=contactus">Contacts</a>  																																																																															
	   </div>
		<p id="copy">Copyright &copy;. All rights reserved. Design by <a href="http://bdtravelinfo.com" target="_blank" title="Best Free Templates">MMR</a>     </p>
	</div>
</body>
</html>
