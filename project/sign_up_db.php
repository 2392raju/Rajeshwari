<?php

// Make a MySQL Connection
mysql_connect("mysql2.000webhost.com", "a5898927_scrgb", "03apr@1993") or die(mysql_error());

// Select the database
mysql_select_db("a5898927_scrgb") or die(mysql_error());
$aa="INSERT into user_info_1 (user_name,password) values('$_POST[name]','$_POST[password]')";
mysql_query($aa) or die(mysql_error());
echo "SUCCESSFULLY UPLOADED";
mysql_close();
?>