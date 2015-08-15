<form action="up.php" method="post" align="center">
        How many news feed shown in the latest news bar?<br/>
        Number of News:<input type="text" name="number"/>
        <input type="submit" value="submit" align="left"/>
    </form>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("bdtrip");
if(isset($_POST['number']))$number=$_POST['number'];
 $sql = ("SELECT *FROM news order by Date asc limit $number") or die ("Error found1").  mysql_error(); 
                                            $result=mysql_query($sql) or die ("Error Found2".  mysql_error());
if(mysql_query($sql)){
    echo ' successfully';
   echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}

?>