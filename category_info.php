<?php
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());
$result = mysql_query("SELECT DISTINCT category_name from category_data") or die(mysql_error());

while($row = mysql_fetch_array( $result )) {
$name=json_encode($row[0]);
$str = preg_replace('/\"/', '', $name);

echo ''.$str.''.' ';
}
mysql_close();
?>