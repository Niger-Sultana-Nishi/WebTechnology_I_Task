<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
</head>

<body>
    <?php    
    $firstnameErr = $lastnameErr  = $genderErr = $dateofbirthErr = $religionErr = $presentErr = $permanentErr  = $phoneErr = $mailErr = $websiteErr = $userNameErr  = $passErr = $confirmPassErr ="";
    $firstname = $lastname   = $gender = $dateofbirth = $religion = $present = $permanent   = $phone = $mail = $website = $userName = $pass = $confirmPass = "";
    $isValid = true;

    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
        $isValid= false;
    }
      else {
        $firstname = test_input($_POST["firstname"]);
        
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
         $isValid= false;
    } 
    else {
        $lastname = test_input($_POST["lastname"]);
        
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
         $isValid= false;
    } else {
        $gender = test_input($_POST["gender"]);
        
    }
    if (empty($_POST["dateofbirth"])) {
        $dateofbirthErr = "DOB is required";
         $isValid= false;
    }else {
        $dateofbirth = test_input($_POST["dateofbirth"]);
        
    }
    
    if (empty($_POST["religion"])) {
        $religionErr = "Relegion is required";
         $isValid= false;
    }
    else {
        $religion = test_input($_POST["religion"]);
        
    }

    if (empty($_POST["present"])) {
        $presentErr = "Present Address is required";
         $isValid= false;
    } else {
        $present = test_input($_POST["present"]);
        
    }

    if (empty($_POST["permanent"])) {
        $permanentErr = "Permanent Address is required";
         $isValid= false;
    } else {
        $permanent = test_input($_POST["permanent"]);
        
    }
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
         $isValid= false;
    } 
    else {
        $phone = test_input($_POST["phone"]);
        
    }
    if (empty($_POST["mail"])) {
        $mailErr = "E-mail is required";
         $isValid= false;
    }else {
        $mail = test_input($_POST["mail"]);
        
    }
    
    if (empty($_POST["website"])) {
        $websiteErr = "Website is required";
         $isValid= false;
    }
    else {
        $website = test_input($_POST["website"]);
        
    }

    if (empty($_POST["userName"])) {
        $userNameErr = "UserName is required";
         $isValid= false;
    } else {
        $userName =test_input($_POST["userName"]);
        if (strlen($_POST['userName']) <5) {
            $userNameErr = "User name must be 5 char :( ";
             $isValid= false;
        }
    } 

    if (empty($_POST["pass"])) {
        $passErr = "PassWord is required";
         $isValid= false;
    } else {
        $pass = test_input($_POST["pass"]);
        
    }

    if (empty($_POST["confirmPass"])) {
        $confirmPassErr = "Confirm PassWord is required";
         $isValid= false;
    } else {
        $confirmPass =($_POST["confirmPass"]);
        if ($pass !== $confirmPass) {
            $confirmPassErr = "Password dose not match :( ";
             $isValid= false;
        }
    }



    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($isValid)
    {
        $firstname = $_POST['firstname'];
        echo "First Name : " . $firstname;
        echo "<br><br>";
        $lastname = $_POST['lastname'];
        echo " Last Name : " . $lastname;
        echo "<br><br>";
        $gender = $_POST['gender'];
          echo " Gender : " . $gender;
          echo "<br><br>";
        $dateofbirth = $_POST['dateofbirth'];
          echo " Date of Birth : " . $dateofbirth;
          echo "<br><br>";
        $religion= $_POST['religion'];
          echo " Religion : " . $religion;
          echo "<br><br>";
        $present = $_POST['present'];
          echo " Present Address : " . $present;
          echo "<br><br>";
        $permanent = $_POST['permanent'];
         echo " Permanent Address : " . $permanent;
         echo "<br><br>";
        $phone = $_POST['phone'];
         echo " Phone : " . $phone;
         echo "<br><br>";
        $mail = $_POST['mail'];
         echo " Email : " . $mail;
         echo "<br><br>";
        $website= $_POST['website'];
         echo " Website : " . $website;
         echo "<br><br>";
        $userName = $_POST['userName'];
         echo " User Name : " . $userName;
         echo "<br><br>";
        $pass = $_POST['pass'];
         echo " Password : " . $pass;
        
    }

    else {
        include('registration.php');
    }

    ?>
</body>

</html>