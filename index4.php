<?php
include_once('connect.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Bdtravelinfo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
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
		<div id="left">
			<div id="left_navigation">
				<img src="images/gtop.gif" alt="" width="191" height="8" />
				<div class="title1">Popular Tours</div>
				<ul class="contries">
					<?php 
                                        
                                         $sql = ("SELECT * FROM place "); 
                                         $result=mysql_query($sql) or die ("Error Found2".  mysql_error()); 
                                         echo '<br>';
                                         $numrows=mysql_num_rows($result) or die ("Error Occured". mysql_error());
                                         while($row = mysql_fetch_array($result)){
                                                echo "<a style=color:green; href=index2.php?id=$row[id]>$row[name]</a>";
                                                echo "<br />";
                                         }
                                         ?>
				</ul>
				<a href="#" class="more">more tours</a>
				<img src="images/gbot.gif" alt="" width="191" height="8" />
			</div>
			<a href="#" class="banner"><img src="images/banar1.jpg" alt="" width="191" height="346" /></a>	
		</div>  
            <td><tr>
                    <div class="right_block">
                      
                      </div>
            </td></tr>
		<div id="big">
                    
			<div class="text">
				<?php         
                                       if(isset($_GET['id'])){
                                        if(!empty($_GET['id'])){             
                                                $id=$_GET['id'];
                                        }
                                }
                               $sql=("select *from acommodation where id='$id'");
                                $result=mysql_query($sql) or die('error found');
                                 while($row=mysql_fetch_array($result)){
                                    $area=$row['map'];				
                                     echo '<div style="color:#4F4F41;font-size:16px;">
                                          <p style="background-color:#999999;clor:#CCFFCC;font-size:20px;padding-left:150px;">'.$row['name'].'<br/>';
                                     echo '<p style="color:#008066;font-size:15px;">Description:</p><p>'. $row['description'].'</p><br/>
                                       	<p style="color:#008066;font-size:15px;">Facility:</p><p>'.$row['facility'].'</p><br/>
				        <p style="color:#008066;font-size:15px;">Cost:</p><p>'.$row['cost'].'</p><br/>
					<p style="color:#008066;font-size:15px;">Rate:</p><p style="font-size:14px; color:red">'.$row['rate'].'</p><br/>
				</div>';
				     echo'<div id="down" style="color:#008066;font-size:15px">Map</div>';
				     echo'<div id="map" style="display:none"><iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.bd/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q='.$row['map'].'&amp;aq=0&amp;oq=chittagong,+chittagong+division,+bangladesh&amp;ie=UTF8&amp;hq='.$row['map'].'&amp;t=m&amp;spn=0.848576,0.84867&amp;output=embed"></iframe><br /></div><br>';
			             }
                                      $sql1="select *from image where id='$id'";
                                 $query=mysql_query($sql1);
                                 $noOfImage=mysql_num_rows($query);?>
                                 <div id="video" style="color:#008066;font-size:15px">Image</div><br><br>
                                     <div id="play" style="display:none"><hr>
                                 <?php
                                 $i=0;
                                 if($noOfImage==0){
                                     echo 'There is no image of this hotel';
                                 }  else {
                                      while ($row1=  mysql_fetch_array($query)){
                                          $i++;
                                     $image=$row1['name'];
                                     
                                     echo '<img style="width: 230px; height: 230px" src="'.$image.'"/>';?>&nbsp;&nbsp;&nbsp;
                                         <?php
                                     if($i%2==0)                                         echo '<hr><br><br><br><hr>';
                                 }
                                 }
                                
                                 ?>
                                
                        </div>
                                <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="js.js"></script>
                                <br/> <h2 style="padding-left:100px;padding-bottom: 20px;padding-top: 20px;width:300px">Leave your comment</h2>
                                <form method="post" action="comment.php">
                                    Name:<br/> <input type="text" name="name"/><br/>
                                    Email:<br/><input type="text"name="email"/><br/>
                                    Comments:<br/><textarea name="comment" rows=10 cols=30></textarea><br/>
                                <input type="submit" name="submit" value="Submit" style="width:260px;height:40px;background-color:violet;color:whitesmoke">
                                </form>

                                 <?php
          
                                  $q="select *from comments order by Date asc limit 7";
                                  $result=mysql_query($q)or die ('Error found...........');
                                  while($row = mysql_fetch_array($result)){
                                     echo '<p style="color:black;font-size:15px;background-color:aqua;">'.$row['name'].'' .$row['Date'].'</p>
                                        <p style="font-size:15px;border:5px;border:solid 1px blue;height:70px">'.$row['comment']."</p><br/>";
                                }
 
                                ?>
                        </div>
                        <div class="big_photo">
				<img src="images/big_photo.jpg" alt="" width="290" height="217" /><br />
				<a href="#" class="other">other photos</a>
                               
			</div>
                     </div>
                <div id="footer">
		  <div>
			<a href="index.php">Home</a>   |   <a href="index1.php?p=place">Place</a>   |   <a href="index1.php?p=hotels">Hotels</a>   |   <a href="index1.php?p=news">News</a>   |   <a href="index1.php?p=contactus">Contacts</a>  																																																																															
		</div>
		<p id="copy">Copyright &copy;. All rights reserved. Design by <a href="http://www.bestfreetemplates.info" target="_blank" title="Best Free Templates">BFT</a>     </p>
	</div></div>
</body>
</html>
