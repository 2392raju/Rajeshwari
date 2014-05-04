<?php

mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());




$result = "DELETE from category_data where category_name='$_POST[delete_cat]'";
 mysql_query($result) or die(mysql_error());

mysql_close();
 echo '<script>document.location.replace("admin_success.php");</script>';
?>