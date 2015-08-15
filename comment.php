                        
 <?php

  mysql_connect("localhost", "root", "");
  mysql_select_db("bdtrip");
          if(isset($_POST['name']))$name=$_POST['name'];
          if(isset($_POST['email']))$email=$_POST['email'];
          if(isset($_POST['comment']))$comment=$_POST['comment'];
          $q="insert into comments (date,name,email,comment) value (NOW(),'$name','$email','$comment')".  mysql_error();
          mysql_query($q).  mysql_error();
          
          if($q){
          require 'index2.php';
          }
          else {
              echo 'Error';
          }
  ?>