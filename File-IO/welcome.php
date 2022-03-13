<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome-<?php echo $_SESSION['userName']; ?></title>
</head>
<body>
	<h1>Welcome To Your Dashboard</h1>
	<?php
		$fname=$lname="";
		$data = file_get_contents("users.json");
		$data = json_decode($data);
		foreach ($data as $person) {
			if($person->userName===$_SESSION['userName'])
			{
				$fname= $person->firstname;
				$lname= $person->lastname;
				$gndr= $person->gender;
				$dob= $person->dateofbirth;
				$rlgn= $person->religion;
				$prsnt= $person->present;
				$prmnt= $person->permanent;
				$phn= $person->phone;
				$ml= $person->mail;
				$web= $person->website;
				$uName= $person->userName;
				$ps= $person->pass;

				break;
			}
		}

	 ?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php echo $fname ?>" >
		<br>
		<label>Last Name:</label>
		<input type="text" name="lname" value="<?php echo $lname ?>" >
		<br>
        <label>Gender:</label>
		<input type="text" name="gndr" value="<?php echo $gndr ?>" >
		<br>
		
		<label>Date of Birth:</label>

		<input type="date" name="dob" value="<?php echo $dob ?>" >
		<br>
       <label>Religion:</label>
      
            <select name="rlgn">
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Christianity">Christianity</option>
                <option value="Buddhism">Buddhism</option>
            </select>
		<br>
		<label>Present Address:</label>
		<input type="text" name="prsnt" value="<?php echo $prsnt ?>" >
		<br>
		<label>Permanent Address:</label>
		<input type="text" name="prmnt" value="<?php echo $prmnt ?>" >
		<br>
		<label>Phone:</label>
		<input type="tel" name="phn" value="<?php echo $phn ?>" >
		<br>
		<label>E-mail:</label>
		<input type="mail" name="ml" value="<?php echo $ml ?>" >
		<br>
		<label>Website:</label>
		<input type="text" name="web" value="<?php echo $web ?>" >
		<br>
		<label>User Name:</label>
		<input type="text" name="uName" value="<?php echo $uName ?>" >
		<br>
		<label>Password:</label>
		<input type="pass" name="ps" value="<?php echo $ps ?>" >
		
		<table align="center">
	      <tr>

		     <td><a href="changePassword.php"> Change Password </a></td>
		      <td><a href="updateInfo.php"> Update Information </a></td>
		       <td><a href="Login.php"> Login </a></td>
          </tr>
       </table>

	</form>

</body>
</html>

