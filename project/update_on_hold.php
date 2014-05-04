<?php
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());


$i=0;






// Get data from the table
$result = mysql_query("SELECT * FROM complaint_images_updated where status_code='2'") or die(mysql_error());


while($row = mysql_fetch_array($result))
{
$statusval='Not yet serviced';
if($_POST[$i]=='')
{
$statusval='Not yet serviced';
}
else
{
$statusval=$_POST[$i];

if($_POST[$i]=="Resolved")
{
mysql_query("UPDATE complaint_images_updated SET status_code='1' WHERE imagesrc='$row[imagesrc]'");
mysql_query("UPDATE complaint_images_updated SET status='Resolved' WHERE imagesrc='$row[imagesrc]'");
}

}

$i++;
}

mysql_close();
echo'<script> window.location="authority_success.php"; </script> ';
?>