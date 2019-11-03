<?php
	session_start();
	if(isset($_POST['login']))
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		
		
		if(empty($uname) == true || empty($pass) == true){
			echo "fill all!";
		}
		else
		{
            $name='data.txt';
			$read = fopen($name, 'r');
	
			$fetch = fread($read, filesize($name));
			fclose($read);
			$lines=explode("\n", $fetch);
			foreach ($lines as $line)
			{
			$user = explode("|", $line);
	
		if($user[0] == $uname && $user[2] == $pass){
				if($user[4]=='Admin')
				{
				$_SESSION['uname']=$user[0];
				header('location: Admin.php');
		}
		elseif($user[4]=='User')
			{
			setcookie("utype", $user[4], time()+3600, "/");
			$_SESSION['utype']=$user[4];
			$_SESSION['uname']=$user[0];
			$_SESSION['uemail']=$user[1];
			
			header('location: Home.php');
		}
		}
		

     	}	
	
	}
}
		


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="Login.php">
		
			<legend><font size="+1"><b>LOG IN <hr width="100"></b></font></legend>
			<table >
				<tr>
					<td> <br> </td>
				</tr>
				
				<tr>
					<td>
						Uname:<br><input type="text" name="uname" value="">
					</td>
				</tr>
				<tr>
					<td>
						Password: <br><input type="password" name="pass" value="">
					</td>
				</tr>
			
				<tr>
					<td> <br> </td>
				</tr>
			
			<tr>
			<td style="border-top:1px solid #888;"><br>
			<input type="submit" name="login" value="Login"/><br> <br>
			Haven't registered yet?<a href="Registration.php">Register</a>
			</td>
			</tr>
			
			</table>

		


	</form>
	</center>


</body>
</html>