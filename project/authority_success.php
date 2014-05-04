<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<title>Authority Login</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" type="text/css" href="style_2.css" />

<script type="text/javascript" >


</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>
                            <img src="images/tlogo.jpg" width="15%" height="90"/> &nbsp;&nbsp;<a href="index.php">Smart Complaint Registration</a>
			</h1>
		</div>
            <p></p>
		<div id="menu">
			<ul>
				<li class="">
					<a href="index.php">Home</a>
                                </li>
                                <li class="">
					<a href="complaint_history.php">Complaint History</a>
                                </li>
                                <li class="">
					<a href="onhold_complaint.php">OnHold Complaint</a>
                                </li>
<li class="">
					<a href="authority_logout.php">LOGOUT</a>
                                </li>
                               
			</ul><br class="clearfix" />
		</div>
	</div>
	<div id="page">
<h2 align="center">New Complaints </h2>
<br>
<div class="box" align="center">

    <br>
        <br>
            <hr/>
            <br>

            <div id="content">
                <form method="POST" action="update_complaint_status.php">
            <?php

// Make a MySQL Connection
mysql_connect("mysql14.000webhost.com", "a6428231_comp", "123abc") or die(mysql_error());

// Select the database
mysql_select_db("a6428231_comp") or die(mysql_error());



// Get data from the table
$result = mysql_query("SELECT * FROM complaint_images_updated where status_code='0'") or die(mysql_error());
$i=0;

echo '<table border="1">';
echo '<tr><th>Complaint No</th><th>Complaint Image</th><th>Location</th><th>Comment</th><th>Status</th><th>Updated Status</th></tr>';
while($row = mysql_fetch_array($result))
{

$val=$row['imagesrc'];
echo '<tr><td>'.$row[complaint_no].'</td><td><img src="'.$row[imagesrc].'"/></td><td> '.$row[location].' </td> <td>'.$row[comment].'</td><td> '.$row[status].'</td><td><select name="'.$i.'"><option name="4">New Complaint</option><option name="1">Resolved</option><option name="2">On Hold</option><option name="3">Invalid</option></select></td></tr>';
$i++;
}
echo '</table>';
mysql_close();





?>
<input type="submit" value="Update">
</form>

        <br>

</body>
</html>