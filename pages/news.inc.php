<style type="text/css">
 
</style>

<?php 
    mysql_connect ("localhost", "root","")  or die ("Connection failed");
    mysql_select_db ("bdtrip") or die("Can not selected");
?>
<div id="news">
    <div id="headline" style="padding:20px;">
        <?php
        $sql = ("SELECT *FROM news order by Date asc limit 2") or die ("Error found1").  mysql_error(); 
        $result=mysql_query($sql) or die ("Error Found2".  mysql_error());
        while($row=mysql_fetch_array($result)){
        echo '<div style="
                        color:	#4F4F41;
                        font-size:16px;">
                  <p style=
                  "background-color:#999999;
                  color:#CCFFCC;font-size:20px;
                  padding-left:150px;">'.$row['Date'].'</p><br/>
                  <p style="color:#008066;font-size:20px;">Headline:</p><p>'.$row['heading'].'</p><br/>
                  <p style="color:#008066;font-size:20px;">News:</p><p>'.$row['news'].'</p><br/>
                 </div>';
        
        }                                    
        ?>
    </div>
    <div id="details">
        
    </div>
</div>