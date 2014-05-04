<?php

// Make a MySQL Connection
mysql_connect("mysql2.000webhost.com", "a5898927_scrgb", "03apr@1993") or die(mysql_error());

// Select the database
mysql_select_db("a5898927_scrgb") or die(mysql_error());
//Get Name
$name=name; //Whatever is sent

// Get data from the table


$result = mysql_query("SELECT * FROM user_info_1") or die(mysql_error());

while($row = mysql_fetch_array( $result )) {
$name=json_encode($row[0]);
$pass=json_encode($row[1]).'';
$str = preg_replace('/\"/', '', $name);
$str1 = preg_replace('/\"/', '', $pass);
echo ''.$str.''.' '.''.$str1.'-';
}
mysql_close();
?>