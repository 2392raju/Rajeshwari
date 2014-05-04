<?php
// Make a MySQL Connection
mysql_connect("mysql2.000webhost.com", "a5898927_scrgb", "03apr@1993") or die(mysql_error());

// Select the database
mysql_select_db("a5898927_scrgb") or die(mysql_error());
$aa="INSERT into complaint_images (user_name,location,comment,imagesrc,status) values('$_POST[name]','$_POST[location]','$_POST[comment]','$_POST[imagesource]','$_POST[status]')";
mysql_query($aa) or die(mysql_error());
echo "SUCCESSFULLY UPLOADED";
mysql_close();
?>