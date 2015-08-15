<?php
 mysql_connect ("localhost", "root","")  or die ("Connection failed");
mysql_select_db ("bdtrip") or die("Can not selected");
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
echo "<li><a href="   .$name.  ">$find</a></li>\n";
echo "$location";
echo "$description";
echo "</ul>";
}
}
}
 ?> 