<?php

mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());


$phno=$_POST['add_no'];
$len=strlen($phno);
if($_POST['add_cat']=="" || $_POST['add_desc']=="" || $_POST['add_user']=="" || $_POST['add_password']=="" || $_POST['add_email']=="" || $_POST['add_no']=="")
{
echo '<script>alert("Sorry some values are missing!! Please fill all the values."); document.location.replace("admin_success.php");</script>';
}
else if($len <= 10)
{
echo '<script>alert("Invalid Phno!!"); document.location.replace("admin_success.php");</script>';
}
else
{
$result = "INSERT into category_data(category_name,category_desc,category_user,category_passwd,category_email,category_contact) values('$_POST[add_cat]','$_POST[add_desc]','$_POST[add_user]','$_POST[add_password]','$_POST[add_email]','$_POST[add_no]')";
 mysql_query($result) or die(mysql_error());
echo "SUCCESSFULLY UPLOADED";
mysql_close();
echo '<script>document.location.replace("admin_success.php");</script>';
}
?>