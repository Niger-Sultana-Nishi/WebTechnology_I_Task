<?php
if($_SERVER['REQUEST_METHOD']!="POST"){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
	
	<table align="center">
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="userName"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="Login" ></td>
		</tr>
	</table>
	
</form>
<h3 align="center"><?php $loginErr ?></h3>
</body>
</html>
<?php
}
?>
<?php
$loginErr="";
if($_SERVER['REQUEST_METHOD']=="POST"){
	
	session_start();
	if (isset($_POST['login'])) {
		
		$userName=$_POST["userName"];
		$pass=$_POST["pass"];

		$data = file_get_contents("users.json");
		$data = json_decode($data);
		foreach ($data as $person) {
		
			if($person->userName == $userName && $person->pass== $pass){
				
				
				$_SESSION['userName']=$person->userName;
				header("location: welcome.php");
				break;
			}
		/*	else{
			
				$loginErr="Login Failed :'(";
				break;
			}*/
		}
	}
	
}
?>