<?php
if(isset($_POST['signup']))
{
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$utype =$_POST["utype"];
		
		
		if(empty($uname)==true || empty($email)==true || empty($pass) == true ||empty($cpass) == true ||empty($utype) == true){
			echo "Fill all!";
		}
		elseif ($pass!=$cpass) {
		echo "password doesn't match";	
		}
		

		else{

			$user = fopen('data.txt', 'a+');
			$data=fwrite($user, "$uname"."|"."$email"."|"."$pass"."|"."$cpass"."|"."$utype"."\n");
			
	fclose($user);
		header('location: Login.php');
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
	<form method="POST" action="Registration.php">
		
			<center><legend><b>REGISTRATION<hr width="150"></b></legend></center>
			<table border="0">
			<tr>
				<td>
				Username:<br><input type="text" name="uname" value="">
				</td>
			</tr>
			
			<tr>
				<td>
				Email:<br><input type="email" name="email" value="">
				</td>
			</tr>
			
			<tr>
				<td>
				Password: <br><input type="password" name="pass" value="">
				</td>
			</tr>
			
			<tr>
				<td>
				Confirm Password: <br><input type="password" name="cpass" value="">
			</td>
			</tr>
			
			<tr>
				<td> <br> </td>
			</tr>

			<tr>
			<td style="border-top:1px solid #888;">
			<font size="+1"> User Type: </font><br><br>
			<input type="radio" name="utype" value="User"/>User
			<input type="radio" name="utype" value="Admin"/>Admin
			
			</td>
			
			</tr>
			
			<tr>
				<td> <br> </td>
			</tr>
			
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="signup" value="Sign Up"/><br>
			</td>
			</tr>
			
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
			<td>
			Already a menmber? <a href="Login.php">Sign In</a>
			</td>
			</tr>
			
			</table>

		


	</form>
	</center>


</body>
</html>