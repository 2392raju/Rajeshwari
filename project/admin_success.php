<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<title>Administrator Log In</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" type="text/css" href="style_2.css" />

<script type="text/javascript" >


</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h3>
                            <img src="images/tlogo14.jpg" width="15%" height="90"/> &nbsp;&nbsp;<a href="index.php">Complaint Registration For Government Bodies using Android App</a>
			</h3>
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
					<a href="admin_logout.php">Logout</a>
				</li>
			</ul><br class="clearfix" />
		</div>
	</div>
	<div id="page">
<h2 align="center">Categories</h2>
<br>
<div class="box" align="center">

    <br>
        <br>
            <hr/>
            <br>

            <div id="content">
                
   <table cellspacing="20">   
<tr><th><font size="4px">Current Categories </font></th><th><font size="4px">Add a new Category </font></th><th><font size="4px">Category Details</font></th></tr>     
<tr>
<td> 

<form method="POST" action="delete_cat.php">
<?php

mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());



// Get data from the table
$result = mysql_query("SELECT * FROM category_data") or die(mysql_error());
$i=0;
echo '<table border="1">';
echo '<tr><th>Category name</th><th>Category Description</th><th>Option</th></tr>';
while($row = mysql_fetch_array($result))
{

$val=$row['imagesrc'];
echo '<tr><td>'.$row[category_name].'</td><td>'.$row[category_desc].'</td><td><select name="'.$i.'"><option name="2">Standby</option><option name="1">Delete</option></select></td></tr>';
$i++;
}
echo '</table>';
mysql_close();
?>
<input type="submit" value="Delete">
</form>
</td>
<td>
<form method="POST" action="insert_in_db.php">
<br>Category Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="add_cat"><br>Category Description&nbsp;<input type="text" name="add_desc"><br>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="add_user">
<br>Category Password&nbsp;&nbsp;<input type="text" name="add_password"><br>Category Email-Id&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="add_email"><br>Category Contact no&nbsp;&nbsp;<input type="text" name="add_no"><br><input type="submit" value="ADD">
</form>

</td>
<td>
<?php

mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());



// Get data from the table
$result = mysql_query("SELECT * FROM category_data") or die(mysql_error());
$i=0;
echo '<table border="1">';
echo '<tr><th>Name</th><th>Description</th><th>Email</th><th>Contact</th></tr>';
while($row = mysql_fetch_array($result))
{

$val=$row['imagesrc'];
echo '<tr><td>'.$row[category_name].'</td><td>'.$row[category_desc].'</td><td>'.$row[category_email].'</td><td>'.$row[category_contact].'</td></tr>';
$i++;
}
echo '</table>';
mysql_close();
?>
</td>
</table>
        <br>

</body>
</html>