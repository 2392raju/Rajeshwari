<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Registration Form</title>

<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h3>
                            <img src="images/tlogo.jpg" width="15%" height="90"/><a href="index.php">Smart Complaint Registration For Government Bodies</a>
			</h3>
		</div>
            <p></p>
		<div id="menu">
			<ul>
				<li class="">
					<a href="index.php">Home</a>
                                </li>
                                 <li>       
                                        <a href="register.php"> REGISTER </a>
				</li>
				<li>
					<a href="view_complaint.php">View Complaints</a>
				</li>
				
                                <li>
					<a href="admin.php">Admin Login</a>
				</li>
			</ul><br class="clearfix" />
		</div>
	</div>
	<div id="page" align="center">
            <h1 align="center">Register here</h1>
            <br>
                <br>
		
			<div class="box">

 


<form id="loginForm" name="loginForm" method="post" action="register_success.php">

    <table align="center" width="300"  height="10" border="0"  cellpadding="10" cellspacing="8">
      <tr>
      <th>Email-Id<font color="#FF0000">*</font> </th>
      <td><input name="email-id" type="text" class="textfield" id="email-id" placeholder="Email-Id"/></td>
    </tr>
  <th>Password<font color="#FF0000">*</font></th>
      <td><input type="password" id="password" name="password"  class="textfield" placeholder="password"/></td>
    </tr>
    <tr>
      <th>Confirm Password<font color="#FF0000">*</font></th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" placeholder="confirm password"/></td>
    </tr>
    <tr>

      <th colspan="2"><input type="submit" name="Submit" value="Register"/>&nbsp;&nbsp;&nbsp;
      <input type="reset" name="reset" value="Clear" /></th>
    </tr>
  </table>
    <p align ="center"> <a href="index.php">CLICK HERE TO LOGIN</a> 
</p>
</form>
</div>
<div id="footer">
<p style="color: white;">Copyright&copy; 2013-2014</p>	
</div>
</body>
</html>