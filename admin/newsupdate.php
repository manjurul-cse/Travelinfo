<?php
mysql_connect("localhost", "root", "");
mysql_select_db("bdtrip");
if(isset($_POST['Date']))$date=$_POST['Date'];
if(isset($_POST['heading']))$heading=$_POST['heading'];
if(isset($_POST['news']))$news=$_POST['news'];
$sql="insert into news (Date,heading,news)
    value
    ('$date','$heading','$news')";
if(mysql_query($sql)){
    echo 'data inserted successfully';
}

?>