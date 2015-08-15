<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="accomodation.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Insert Data Into Accommodation table </strong></td>
</tr>
<tr>
<td width="71">Name</td>
<td width="6">:</td>
<td width="301"><input name="name" type="text" id="name"></td>
</tr>
<tr>
<td>Description</td>
<td>:</td>
<td><input name="description" type="text" id="description"></td>
</tr>
<tr>

<tr>
<td>Imagepath</td>
<td>:</td>
<td><input name="imagepath" type="text" id="imagepath"></td>
</tr>
<tr>
<td>Facility</td>
<td>:</td>
<td><input name="facility" type="text" id="facility"></td>
</tr>
<tr>
<td>Cost</td>
<td>:</td>
<td><input name="cost" type="text" id="cost"></td>
</tr>
<tr>
<td>Rate</td>
<td>:</td>
<td><input name="rate" type="text" id="rate"></td>
</tr>
<tr>
<td>Place Name</td>
<td>:</td>
<td><input name="p_name" type="text" id="p_name"></td>
</tr>
<tr>
<td>Address</td>
<td>:</td>
<td><input name="contact_info" type="text" id="contact_info"></td>
</tr>

<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>


<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="bdtrip"; // Database name
$tbl_name="place"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


if(isset($_POST['name']) && $_POST['description'] &&   $_POST['imagepath'] &&
        $_POST['facility']&& $_POST['cost'] && $_POST['rate'] && $_POST['p_name']){
    $name=$_POST['name'];
    $description=$_POST['description'];
$imagepath=$_POST['imagepath'];

$facility=$_POST['facility'];
$cost=$_POST['cost'];
$rate=$_POST['rate'];
$p_name=$_POST['p_name'];
$contact_info=$_POST['contact_info'];



// Insert data into mysql
$sql="INSERT INTO `acommodation`(`name`, `description`, `imagepath`, `facility`, `cost`, `rate`, `p_name`, `contact_info`) 
VALUES ( '$name', '$description', '$imagepath', '$facility', '$cost', '$rate', '$p_name', '$contact_info')";
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