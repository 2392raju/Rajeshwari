<?php

// Make a MySQL Connection
mysql_connect("mysql2.000webhost.com", "a5898927_scrgb", "03apr@1993") or die(mysql_error());

// Select the database
mysql_select_db("a5898927_scrgb") or die(mysql_error());

//Get Name
$name=name; //Whatever is sent

// Get data from the table
$result = mysql_query("SELECT * FROM user_info") or die(mysql_error());
$flag=0;
while($row = mysql_fetch_array( $result )) 
{
if($row['user_name']==$_POST['username'] && $row['password']==$_POST['password'])
{
$flag=1;
}
}
if($flag==1)
{
echo '<script>alert("Welcome!! You are a valid user!");</script>';
}
else
{
echo '<script>alert("Invalid Username or Password");</script>';
echo '<script>window.location="index.php"</script>';
}
?>