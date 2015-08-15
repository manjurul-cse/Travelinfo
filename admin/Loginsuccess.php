<?php
  session_start();
  if(isset($_post['username']) && isset($_POST['password'])){
      header("location:admin.php");
  }
  /*if(!session_unregister('username')){
  header("location:AdminLogin.php");
  }*/
?>

<html>
<body>
    <a href= 'Showtable.php'>Showing all the table of the database</a><br>
    <a href= 'insert.php'>Insert in Place table</a><br>
    <a href= 'accomodation.php'>Insert in Acommodation</a><br>
    <a href='newsform.php'>News</a><br>
    <a href='update1.php'>Updating</a><br>
    <a href='file_insert.php'>Image Upload</a><br>
    <a href='comment.php'>Leave a comment</a><br>
    <a href='search_byletter.php'>Searching</a><br>
    <a href='s_form.php'>Search</a><br>

</body>

</html>
    
</body>
</html>

