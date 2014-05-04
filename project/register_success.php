<html>
    <title></title>
    <body>
         <script type='text/javascript'>
function validate()
{
window.location.replace("index.php");
}
    </script>
 <?php
// Make a MySQL Connection
mysql_connect("mysql2.000webhost.com", "a5898927_scrgb", "03apr@1993") or die(mysql_error());

// Select the database
mysql_select_db("a5898927_scrgb") or die(mysql_error());

$email=$_POST['email-id'];

$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if( $email==NULL && $password==NULL && $cpassword==NULL)
{
   echo "<script > alert('Values cannot be empty.')</script>";
}

else if($email==NULL)
    {
    echo "<script > alert('Email cannot be empty.')</script>";
}
else if($password==NULL)
    {
    echo "<script > alert('Password cannot be empty.')</script>";
}
else if($cpassword==NULL)
    {
    echo "<script > alert('Cpassword cannot be empty.')</script>";
}
else if ($password==$cpassword)
{
 $query = "INSERT into user_info (user_name,password) values('$email','$_POST[password]')";
 

}
else
    {
    echo "<script > alert('Passwords Do Not Match')</script>";
}
if(mysql_query($query))
{
echo "<script > alert('Registered Successfully')</script>";
}
else 
{
echo "<script > alert('User Name Already Exists!!')</script>";
}
?>
</body>
</html>