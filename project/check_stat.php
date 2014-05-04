<?php
// Make a MySQL Connection
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());
$val=$_POST['complaintno'];

$result = mysql_query("SELECT * FROM complaint_images_updated where complaint_no='$val'") or die(mysql_error());

while($row = mysql_fetch_array( $result )) 
{
$str=$row[6];
echo '<script>alert('.$str.')</script>';
}
mysql_close();
?>