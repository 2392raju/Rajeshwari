<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Complaints Registered</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" type="text/css" href="style_2.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h3>
                            <img src="images/tlogo.jpg" width="15%" height="90"/> &nbsp;&nbsp;<a href="index.php">Smart Complaint Registration For Government Bodies</a>
			</h3>
		</div>
            <p></p>
		<div id="menu">
			<ul>
				<li class="">
					<a href="index.php">Home</a>
                                </li>
                               
				<li>
					<a href="view_complaint.php">View Complaints</a>
				</li>
				
                                
			</ul><br class="clearfix" />
		</div>
	</div>
	<div id="page">
<h2 align="center">Recent Complaints</h2>
<form action="#" method="POST">
<b>Complaint no</b> <input type="text" name="complaintno">
<input type="submit" name="comp" value="Check">
</form>
<br>
<div class="box" align="center">

    <br>
        <br>
            <hr/>
            <br>

            <div id="content">
                
            <?php

if(isset($_POST['comp']))
{
// Make a MySQL Connection
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());
$val=$_POST['complaintno'];

$result = mysql_query("SELECT * FROM complaint_images_updated where complaint_no='$val'") or die(mysql_error());

while($row = mysql_fetch_array( $result )) 
{
$str=$row[6];
echo '<font face="Arial" size="5px"> Your complaint is '.$str.'</font>';
}
mysql_close();
}

mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());



// Get data from the table
$result = mysql_query("SELECT * FROM complaint_images_updated") or die(mysql_error());

echo '<table border="1">';
echo '<tr><th>Complaint No</th><th>Complaint Image</th><th>Location</th><th>Comment</th><th>Status</th><td><hr/></td></tr>';
while($row = mysql_fetch_array($result))
{

$val=$row['imagesrc'];
echo '<tr><td>'.$row['complaint_no'].'</td><td><img src="'.$row[imagesrc].'"/></td><td> '.$row[location].' </td> <td>'.$row['comment'].'</td><td> '.$row[status].'</td></tr>';

}
echo '</table>';

?>
        </div>
        <br>
<p style="color: white;">Copyright&copy; 2013-2014</p>
</body>

</html>