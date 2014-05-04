<?php
// Make a MySQL Connection
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());
$aa="INSERT into complaint_images_updated (user_name,timestamp,location,comment,imagesrc,status,cid,status_code) values('$_POST[name]','$_POST[time]','$_POST[location]','$_POST[comment]','$_POST[imagesource]','$_POST[status]','$_POST[cid]','$_POST[status_code]')";
mysql_query($aa) or die(mysql_error());
mysql_close();
// Make a MySQL Connection
// Make a MySQL Connection
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());
$val=$_POST['imagesource'];

$result = mysql_query("SELECT * FROM complaint_images_updated where imagesrc='$val'") or die(mysql_error());

while($row = mysql_fetch_array( $result )) {
$name=json_encode($row[0]);
$str = preg_replace('/\"/', '', $name);

echo $str;
}
mysql_close();
?>