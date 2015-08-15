
<?php
    include 'connect.php';
        $sql = ("SELECT *FROM acommodation") or die ("Error found1").  mysql_error(); 
        $result=mysql_query($sql) or die ("Error Found2".  mysql_error());
        echo '<br/>';
		$html_table = '<table 
                 style="
                 padding:5px;
                 background-color:whitesmoke;
                 border:solid 5px #c3c3c3;
                 color:black;
                 font-family:tahoma;
                 font-size:13px;"
             >
             <tr style="background-color:#FFEBCD; width:70px;height:50px">
             <th style="color:green">Place Name</th>
             <th style="color:green;padding-left:5px;">Title</th>
             <th style="color:green;padding-left:5px;">Location</th>
             </tr>';
        while($row=mysql_fetch_array($result)){
			
			
            $html_table .= '<tr 
                    style="background-color:#D3D3D3;padding-left:5px; width:30px;height:70px;">
                    <td style="padding-left:10px;">
                    <a style="color:red;text-decoration:none;" href=index4.php?id='.$row['id'].'>'.$row['name'].'</a>
                 </td>
                     
<td style="padding-left:5px;">' .$row['rate'].
                 '</td><td style="padding-left:5px;">'.$row['p_name'].'</td><td>';
 
		
		}
		
		 $html_table .= '</table>';           // ends the HTML table

  echo $html_table;  
?>