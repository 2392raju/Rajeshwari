<?php
// Make a MySQL Connection
mysql_connect("mysql2.000webhost.com", "a5898927_scrgb", "03apr@1993") or die(mysql_error());

// Select the database
mysql_select_db("a5898927_scrgb") or die(mysql_error());
$aa="INSERT into complaint_images_updated (user_name,timestamp,location,comment,imagesrc,status,cid) values('$_POST[name]','$_POST[time]','$_POST[location]','$_POST[comment]','$_POST[imagesource]','$_POST[status]','$_POST[cid]')";
mysql_query($aa) or die(mysql_error());
mysql_close();
// Make a MySQL Connection
mysql_connect("mysql2.000webhost.com", "a5898927_scrgb", "03apr@1993") or die(mysql_error());
$val=$_POST['imagesource'];
// Select the database
mysql_select_db("a5898927_scrgb") or die(mysql_error());
$result = mysql_query("SELECT * FROM complaint_images_updated where imagesrc='$val'") or die(mysql_error());

while($row = mysql_fetch_array( $result )) {
$name=json_encode($row[0]);
$str = preg_replace('/\"/', '', $name);

echo $str;
}
mysql_close();
?>