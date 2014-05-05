<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Authority</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" type="text/css" href="style_2.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>
                            <img src="" width="15%" height="90"/><a href="index.php">Smart Complaint Registration</a>
			</h1>
		</div>
            <p></p>
		<div id="menu">
			<ul>
				<li class="">
					<a href="index.php">Home</a>
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
                
           <?php

mysql_connect("localhost", "root", "root") or die(mysql_error());

// Select the database
mysql_select_db("smart") or die(mysql_error());


//Get Name
$name=name; //Whatever is sent

// Get data from the table
$uname=$_POST['username'];
$passwd=$_POST['password'];

$result = mysql_query("SELECT * FROM category_data") or die(mysql_error());
$flag=0;
while($row = mysql_fetch_array( $result )) 
{
if(strcmp($row['category_name'],$uname)==0 && strcmp($row['category_passwd'],$passwd)==0)
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
echo '<script>document.location.replace("authority_success.php");</script>';
}
else
{
echo '<script>alert("Sorry check password and user name once again");</script>';
}
mysql_close();
?>

        </div>
                 
   <br>
   <div id="footer">
<p style="color: white;">Copyright&copy; 2013-2014</p>
</div>
</body>
</html>
