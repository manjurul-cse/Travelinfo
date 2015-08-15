<style type="text/css">
    table.db-table     { border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th  { background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td  { padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
</style>
<?
/* connect to the db */
$connection = mysql_connect ("localhost", "root","")  or die ("Connection failed");
             mysql_select_db ("bdtrip") or die("Can not selected");
/* show tables */
$result = mysql_query('SHOW TABLES',$connection) or die('cannot show tables');
while($tableName = mysql_fetch_row($result)) {

	$table = $tableName[0];
	
	echo '<h3>',$table,'</h3>';
	$result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
	if(mysql_num_rows($result2)) {
		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
		while($row2 = mysql_fetch_row($result2)) {
			echo '<tr>';
			foreach($row2 as $key=>$value) {
				echo '<td>',$value,'</td>';
			}
			echo '</tr>';
		}
		echo '</table><br />';
	}
}
/*  OPTIMIZE ALL TABLES  */
function optimize_database($DATABASE_LINK) {
	$result = mysql_query('SHOW TABLES', $DATABASE_LINK) or die('Cannot get tables');
 	while($table = mysql_fetch_row($result)) {
		mysql_query('OPTIMIZE TABLE '.$table[0], $DATABASE_LINK) or die('Cannot optimize '.$table[0]);
	}
}
?>