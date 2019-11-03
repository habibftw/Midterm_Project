<?php
	session_start();
	if(isset($_SESSION['uname']) && isset($_COOKIE['utype'])){
?>



<html>
	<head>
			<title> Project </title>
	</head>
	<body>
	
	<center>
		<table border="0" >
			<tbody>	
					<tr height="100">
						<td width="400px">
							<h1>Profile <h1>
						</td>
						
						<td width="300">
							<input type="text" name="search">
							<input type="button" name="sc" value="Search">
						</td>
						
						<td width="50">
							<a href="Home.php">Home</a>
						</td>
						
					
						
						<td width="70"> 
							<a href="Messages.php">Messages</a>
						</td>
						
						<td width="85"> 
							<a href="Notification.php">Notification</a>
						</td>
						
						<td width="40"> 
							<a href="Jobs.php">Jobs</a>
						</td>
						
							<td width="60"> 
							<a href="Logout.php">Log out</a>
						</td>
						
						<td>
						<br>
							<center>
							<a href="Profile.php"><img src="64572.png" width="40px" height="40px"></a><br>
							<p><b> <?= $_SESSION['uname']?></b></p>
							</center>
						</td>
						
					</tr>
					
					<tr>
						<td colspan="8" style="border-top:2px solid #888;"></td>	
					</tr>
					
					<tr rowspan="1" >
						<td colspan="1"> 
							<center>
								<img src="64572.png" width="250px" height="250px"> <br>
								<h3> User Name: <?= $_SESSION['uname']?> </h3><br>
							<p><b>Email: <?= $_SESSION['uemail']?></b></p>
							<br>
							<p><b>User Type: <?= $_SESSION['utype']?></b></p>
								
							</center>
						</td>
						
						
						<td colspan="7" align="center">
							<h1><u> Upload Work </u></h1> <br>
							<p> <b>Upload your works here</b> </p>
						</td>
						
					</tr>
					
					
					<tr>
						<td colspan="1" style="border-top:2px solid #888;"></td>
						<td colspan="6">  <br> </td>
					</tr>
					
					<tr>
						<td><b>Social Accounts:</b> <br> <a href=""><img src="f.png" width="30px" height="30px">  <img src="t.png" width="30px" height="30px">   <img src="l.png" width="30px" height="30px"> <img src="g.png" width="30px" height="30px">   </a></td>
					</tr>
					
					
					<tr>
						<td colspan="1" style="border-top:2px solid #888;"></td>
						<td colspan="6">  <br> </td>
					</tr>
					
					<tr rowspan="1">
						<td colspan="6"> </td>
						<td>
							<b><font size="+2">Reviews</font></b><br>
							<p>Your reviews here</p>
						</td>
					</tr>
					
			</tbody>
		</table>
	</center>
	</body>
	
</html>


<?php		
	}else{
		header('location: Login.php');
	}

?>