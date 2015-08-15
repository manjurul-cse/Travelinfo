<?php
  $host="localhost";
  $username="root";
  $password="";
  $db_name="bdtrip";
  
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

  $username=$_POST['username'];
  $password=$_POST['password'];

  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  $flag="OK";  
  $msg="";  
  if(isset($_POST['usernme']) && isset($_POST['password'])){
  echo "correct";
  }
  if(strlen($username) < 1){
  $msg=$msg."Please enter the user name<br>";
  $flag="NOTOK"; 
  }

  if(strlen($password) < 6 ){
  $msg=$msg."Password length will be greater than 6<br>";
  $flag="NOTOK";  
  }

  if($flag <>"OK"){
  echo "<left>$msg <br> <input type='button' value='Retry' onClick='history.go(-1)'></left>";
  }else{
  $sql="SELECT * FROM admin WHERE username='$username' and password='$password'";
  $result=mysql_query($sql);

  $count=mysql_num_rows($result);
  
  if($count==1){
  session_register("username");
  session_register("password");
  header("location:loginsuccess.php");
  } else {

  echo "<center>
       Incorrect User Name OR Password Found
      <br>
      <input type='button' style='border:1px solid #9FB8FF;color:#FFFFFF;background-color:#9FB8FF;' value='Retry' onClick='history.go(-1)'></left>";
  }
  }
  
?>
