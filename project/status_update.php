<?php
// Make a MySQL Connection
echo 'Hi';
mysql_connect("mysql1.000webhost.com", "a4953749_user", "user123") or die(mysql_error());

// Select the database
mysql_select_db("a4953749_SCR") or die(mysql_error());

$dom = new DOMDocument();
$dom->validateOnParse = true; 
$dom->loadHTML("http://sunnyvernekar.net63.net/admin_success.php");        

$dom->preserveWhiteSpace = false;
$i=0;

echo $belement->nodeValue;

// Get data from the table
$result = mysql_query("SELECT * FROM complaint_images") or die(mysql_error());


while($row = mysql_fetch_array($result))
{
$belement = $dom->getElementById("'.$i.'");

$statusval=$belement->nodeValue;
echo $statusval;
if(strcmp($statusval,"")!=0)
{
mysql_query("UPDATE complaint_images SET status='.$statusval.' WHERE imagesrc='$row[imagesrc]'");
}
$i++;
}

mysql_close();

?>