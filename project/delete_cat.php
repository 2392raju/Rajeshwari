<?php
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());


$i=0;






// Get data from the table
$result = mysql_query("SELECT * FROM category_data") or die(mysql_error());


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

if($_POST[$i]=="Delete")
{
mysql_query("DELETE from category_data where category_email='$row[category_email]'");

}

}

$i++;
}

mysql_close();
echo'<script> window.location="admin_success.php"; </script> ';
?>