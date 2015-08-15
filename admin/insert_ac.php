
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="bdtrip"; // Database name
$tbl_name="place"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


if(isset($_POST['name']) && $_POST['location'] && $_POST['description'] && $_POST['speciality']&& $_POST['map'] && $_POST['title'] && $_POST['imagepath']){
    $name=$_POST['name'];
$location=$_POST['location'];
$description=$_POST['description'];
$speciality=$_POST['speciality'];
$map=$_POST['map'];
$title=$_POST['title'];
$imagepath=$_POST['imagepath'];



// Insert data into mysql
$sql="INSERT INTO place (name, location, description,  speciality, map, title, imagepath)
VALUES ( '$name', '$location', '$description',  '$speciality', '$map', '$title', '$imagepath')";
$result=mysql_query($sql).  mysql_error();

// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
}
?>