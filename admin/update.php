<?php 
$id = $_POST['news'];
$value = $_POST['heading'];
if(ctype_digit($id) && ctype_digit($value)){
    //mysql_connect();
    $Q = "UPDATE `news` SET `heading` = {$value} WHERE `news` = {$id}";
    if(mysql_query($Q)){
        if($value == '1'){
            echo "status-toggle_enabled.png";
        }else{
            echo "status-toggle_disabled.png";
        }
    }else{
        echo 'N';
    }
}else{
    echo 'N';
}
?>
<script type='text/javascript'>
function getXMLHTTPRequest() {
   var req =  false;
   try {
      /* for Firefox */
      req = new XMLHttpRequest(); 
   } catch (err) {
      try {
         /* for some versions of IE */
         req = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (err) {
         try {
            /* for some other versions of IE */
            req = new ActiveXObject("Microsoft.XMLHTTP");
         } catch (err) {
            req = false;
         }
     }
   }
   return req;
}
function updateToggle(obj,id){
    obj.style.backgroundColor = '#cc0000';
    var updReq = getXMLHTTPRequest();
    var url = 'updateToggle.php';
    var vars = 'id='+id+'&value='+obj.value;
    updReq.open('POST', url, true);
    updReq.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    updReq.onreadystatechange = function() {//Call a function when the state changes.
        if(updReq.readyState == 4 && updReq.status == 200) {
            if(updReq.responseText == 'N'){
                obj.style.backgroundColor = '#cc8800';
            }else{
                if(obj.value == '1'){
                    obj.value = '0';
                }else{
                    obj.value = '1';
                }
                obj.src = updReq.responseText;
                obj.style.backgroundColor = '#0000cc';
            }
        }
    }
    updReq.send(vars);
}
</script>
<table>
    <tr>
        <td>Heading</td>
        <td>News</td>
        <td>Date</td>
        
    </tr>
<?
// Loop through the table and display all records in tabular format
mysql_connect ("localhost", "root","")  or die ("Connection failed");
             mysql_select_db ("bdtrip") or die("Can not selected");
$query = "SELECT * FROM news";
$result = mysql_query ($query);
$count = mysql_num_rows($result); // Count table rows
while ($row = mysql_fetch_array($result))
{
    $id = $row["Date"];
    $firstname = $row["heading"];
    $lastname = $row["news"];
    
?>
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $firstname; ?></td>
    <td><?php echo $lastname; ?></td>
   
    <td>
    <?php 
        if($enabled == '1'){
            ?>
            <input type="image" onclick="updateToggle(this,'<?php echo $id;?>');" src="status-toggle_enabled.png" border="0" name="enabled" value="1"/>
            <?php 
        }else{
            ?>
            <input type="image" onclick="updateToggle(this,'<?php echo $id;?>');" src="status-toggle_disabled.png" border="0" name="enabled" value="0"/>
            <?php
        }
    ?>
    </td>
</tr>
<?php // Close our while loop
}
?>
</table>