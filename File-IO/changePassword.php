<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome-<?php echo $_SESSION['userName']; ?></title>
</head>
<body>
	<h1>Change Password</h1>
	<?php
		$fname=$lname="";
		$data = file_get_contents("users.json");
		$data = json_decode($data);
		foreach ($data as $person) {
			if($person->userName===$_SESSION['userName'])
			{
				
				$uName= $person->userName;
				$confirmPs=$person->confirmPass;
				$ps= $person->pass;
				break;
			}
		}

	 ?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<label>User Name:</label>
		<input type="text" name="uName" value="<?php echo $uName ?>" >
		<br>
		<label>Password:</label>
		<input type="pass" name="ps" value="<?php echo $ps ?>" >

		<br>
		<label>Confirm Password:</label>
		<input type="confirmPass" name="confirmPs" value="<?php echo $confirmPs ?>" >
		<span class="error">*
                        <?php if(isset($confirmPassErr)){ ?>
                        <p class="error"><?php echo $confirmPassErr ?></p>
                        <?php } ?>
                    </span>

		<input type="submit" name="update" value="Password Changed">

		<table align="center">
	      <tr>
		     <td><a href="Login.php"> Login </a></td>
		      <td><a href="updateInfo.php"> Update Information </a></td>
          </tr>
       </table>

	</form>

</body>
</html>

<?php
		if($_SERVER['REQUEST_METHOD']==="POST"){
			$data = file_get_contents("users.json");
			$data = json_decode($data);
			foreach ($data as $person) {
					if($person->userName==$_SESSION['userName'])
					{
				        $person->userName=$_POST['uName'];
				        $person->pass=$_POST['ps'];
				        $person->confirmPass=$_POST['confirmPs'];
					}
			}
			$data = json_encode($data,JSON_PRETTY_PRINT);
			file_put_contents("users.json", $data);
			header("location:welcome.php");
		}
 ?>
