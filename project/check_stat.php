<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());

// Select the database
mysql_select_db("smart") or die(mysql_error());

$val=$_POST['complaintno'];

$result = mysql_query("SELECT * FROM complaint_images_updated where complaint_no='$val'") or die(mysql_error());

while($row = mysql_fetch_array( $result )) 
{
$str=$row[6];
echo '<script>alert('.$str.')</script>';
}
mysql_close();
?>
