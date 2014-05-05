<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
	Complaint Registration For Government Bodies using Android App
</title>
<link  rel="stylesheet" type="text/css" />
<link  rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript">
            function displayImage(image){
                document.getElementById("img").src=image;
                
            }
            
            function displayNextImage(){
                x=(x==images.length-1) ? 0:x+1;
                displayImage(images[x]);
            }
             function displayPreviousImage(){
                x=(x<=0)? images.length-1:x-1;
                displayImage(images[x]);
            }
            
            function startTimer(){
                setInterval(displayNextImage,2000);
            }
       
            
            var images=[],x=-1; 
            images[0]="images/1.jpg";
            images[1]="images/2.jpg";
            images[2]="images/3.jpg";
            images[3]="images/5.jpg";
            images[4]="images/3.jpg";
            
            
            
        </script>

</head>
<body  onload="startTimer()">
   
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h3>
                            <img src="images/tlogo14.jpg" width="15%" height="90"/><a href="#">Complaint Registration For Government Bodies using Android App</a>
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
		<div id="content">
                    
                    <h3>
                                    Welcome&nbsp;&nbsp;to&nbsp;&nbsp;Complaint&nbsp;&nbsp;Registration Site
                                    <br>
				</h3>
				
                            
			</div>

			<div class="box" id="box-left">
				<img id="img" src="images/1.jpg" width="650px" height="250px" />
		</div>
<div id="sidebar">
			<div class="box">
				<h3>
					ADMIN LOGIN
				</h3>
                            <hr></hr>
                            <br>
				    <form action='#' method='post'>
                                        User Name:&nbsp;&nbsp; <input type='text' name='username'/>
                    <br>
                    <br>
                    Password:&nbsp;&nbsp;&nbsp;&nbsp; <input type='password' name='password'/> &nbsp;
                    <br>
                    <br>
                    <input type='submit' name='submit' value='Log In'/> 
                <input type='reset' name='reset' value='Reset' />
</form>
                          <?php
if(isset($_POST['submit']))
{
mysql_connect("localhost", "root", "root") or die(mysql_error());

// Select the database
mysql_select_db("smart") or die(mysql_error());

//Get Name
$name=name; //Whatever is sent


// Get data from the table
$uname=$_POST['username'];
$passwd=$_POST['password'];

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
echo '<br>Sorry check password and user name once again for Administrator';
}
mysql_close();
}
else if(isset($_POST['asubmit']))
{
mysql_connect("localhost", "root", "root") or die(mysql_error());

// Select the database
mysql_select_db("smart") or die(mysql_error());

//Get Name
$name=name; //Whatever is sent


// Get data from the table
$uname=$_POST['ausername'];
$passwd=$_POST['apassword'];

$result = mysql_query("SELECT * FROM category_data") or die(mysql_error());
$flag=0;
while($row = mysql_fetch_array( $result )) 
{
if(strcmp($row['category_name'],$uname)==0 && strcmp($row['category_passwd'],$passwd)==0)
{

$flag=1;
break;
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
echo '<br>Sorry check password and user name once again for Authority';
}
mysql_close();
}
?>
			</div>
<div class="box">
				<h3>
					AUTHORITY LOGIN
				</h3>
                            <hr></hr>
                            <br>
				    <form action='#' method='post'>
                                        User Name:&nbsp;&nbsp; <input type='text' name='ausername'/>
                    <br>
                    <br>
                    Password:&nbsp;&nbsp;&nbsp;&nbsp; <input type='password' name='apassword'/> &nbsp;
                    <br>
                    <br>
                    <input type='submit' name='asubmit' value='Log In'/> 
                <input type='reset' name='areset' value='Reset' />
                         </form> 
			</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
            
            
            <h4><p><b>The OCMF is a web based solution that allows citizens to keep track of thier registered complaints.

                    It escalates the complaints to higher authorities and provides a faster and systematic redressal of complaints.</b>
                               
             </p></h4>
		<div id="page-bottom-content">
                    <br>
                     <div id="footer">
<p style="color: white;">Copyright&copy; 2013-2014</p>
</div>

	</div>
</div>
		<div id="sidebar">
			<div class="box">
				<h3>

				</h3>




</div>

</body>
</html>
