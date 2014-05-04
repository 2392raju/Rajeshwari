<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Administrator</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" type="text/css" href="style_2.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>
                            <img src="images/tlogo14.jpg" width="1%" height="90"/><a href="index.php">Complaint Registration For Government Bodies using Android App</a>
			</h1>
		</div>
            <p></p>
		<div id="menu">
			<ul>
				<li class="">
					<a href="index.php">Home</a>
                                </li>
                                 
				<li>
					<a href="">View Complaints</a>
				</li>
				
                                <li>
					<a href="admin.php">Admin Login</a>
				</li>
			</ul><br class="clearfix" />
		</div>
	</div>
	<div id="page">
<h2 align="center"> </h2>
<br>
<div class="box" align="center">

<form action='#' method='post'>
                    Username: <input type='text' name='username'/> 
                    <br>
                    <br>
                    Password: <input type='password' name='password'/> &nbsp;
                    <br>
                    <br>
                    <input type='submit' name='submit' value='Log In'/> 
                <input type='reset' name='reset' value='reset' />
</div>
    <br>
        <br>
            <hr/>
            <br>
                <p> </p>
            <div id="content">
              <?php  session_start(); ?>    
           <?php
if(isset($_SESSION['use']))   
 {
     echo '<script>window.location="admin_success.php"</script>'; 
 }
if(isset($_POST['login']))   
{
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());

//Get Name
$name=name; //Whatever is sent

// Get data from the table
$uname=$_POST['username'];
$passwd=$_POST['password'];
$_SESSION['use']=$uname;
$result = mysql_query("SELECT * FROM admin_info") or die(mysql_error());
$flag=0;
while($row = mysql_fetch_array( $result )) 
{
if(strcmp($row['admin_uname'],$uname)==0 && strcmp($row['admin_pwd'],$passwd)==0)
{

$flag=1;

}
else
{
$flag=2;
}

}

if($flag==1)
{
echo '<script>alert("Welcome");</script>';
echo '<script>document.location.replace("admin_success.php");</script>';
}
else
{
echo '<script>alert("Sorry check password and user name once again");</script>';
}
mysql_close();
}
?>

        </div>
                 
   <br>
   <div id="footer">
<p style="color: white;">Copyright&copy; 2013-2014</p>
</div>
</body>
</html>