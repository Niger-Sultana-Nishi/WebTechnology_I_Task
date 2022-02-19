<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Registration</title>
</head>
<body>
   <div>

   <form class="form-border"method="POST" action="RegistrationAction.php">
 <fieldset >
   <fieldset style="width: 500px; margin: 5px auto">
        <legend><h4>Basic Information</h4></legend>
        <table>
            <tr>
                <td>First Name :</td>
                <td><input  value ="<?php if(isset($firstname)){
                    echo $firstname; }?>" type="text" name="firstname">
                    <span class="error">*
                        <?php if(isset($firstnameErr)){ ?>
                        <p class="error"><?php echo $firstnameErr ?></p>
                        <?php } ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Last Name :</td>
                <td><input  value ="<?php  if(isset($lastname)){
                    echo $lastname; } ?>"  type="text" name="lastname">
                    <span class="error">*
                        <?php if(isset($lastnameErr)){ ?>
                        <p class="error"><?php echo $lastnameErr ?></p>
                        <?php } ?>
                    </span>      
                </td>
            </tr>                         
            <tr>
                <td>Gender :</td>
                <td>  
                <input type="radio"  name="gender" value="Male">
             <label >Male</label>
              <input type="radio"  name="gender" value="Female">
             <label >Female</label>
               <input type="radio"  name="gender" value="Other">
                <label >Other</label>
                   <span class="error">*
                    <?php if(isset($genderErr)){ ?>
                    <p class="error"><?php echo $genderErr ?></p>
                    <?php } ?>
                </span>
                </td>
            </tr>
            <tr>
                <td>Date of Birth :</td>
                <td><input  type="date" name="dateofbirth">
                    <span class="error">*
                        <?php if(isset($dateofbirthErr)){ ?>
                        <p class="error"><?php echo $dateofbirthErr ?></p>
                        <?php } ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Religion :</td>
                <td>
                    <select  name="religion">
                        <option>Select</option>
                        <option>Muslim</option>
                        <option>Hindu</option>
                        <option>Christian</option>
                    </select>
                    <span class="error">*
                        <?php if(isset($religionErr)){ ?>
                        <p class="error"><?php echo $religionErr ?></p>
                        <?php } ?>
                    </span>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset style="width: 500px; margin: 5px auto">
        <legend><h4>Contact Information</h4></legend>
            <table>
                <tr>
                    <td>Present Address :</td>
                    <td>
                        <textarea cols="20" rows="2" name="present"></textarea>
                        <span class="error">*
                            <?php if(isset($presentErr)){ ?>
                            <p class="error"><?php echo $presentErr ?></p>
                            <?php } ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Permanent Address :</td>
                    <td>
                        <textarea cols="20" rows="2" name="permanent"></textarea>
                       
                            <?php if(isset($permanentErr)){ ?>
                            <p class="error"><?php echo $permanentErr ?></p>
                            <?php } ?>
                       
                        
                    </td>
                </tr>
                <tr>
                    <td>Phone :</td>
                    <td><input value ="<?php echo $phone; ?>" type="tel"  name="phone">
                        
                            <?php if(isset($phoneErr)){ ?>
                            <p class="error"><?php echo $phoneErr ?></p>
                            <?php } ?>
                       
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td><input value ="<?php echo $mail; ?>"type="email"  name="mail"> 
                        <span class="error">*
                            <?php if(isset($mailErr)){ ?>
                            <p class="error"><?php echo $mailErr ?></p>
                            <?php } ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Website :
                    </td>
                    <td><input value ="<?php echo $website; ?>" type="url" name="website"> 
                       
                            <?php if(isset($websiteErr)){ ?>
                            <p class="error"><?php echo $websiteErr ?></p>
                            <?php } ?>
                        
                    </td>
                </tr>
            </table>
    </fieldset>
    <fieldset style="width: 500px; margin: 5px auto">
        <legend><h4>Credential</h4></legend>
        <table>
            <tr>
                <td>Username :</td>
                <td><input value ="<?php echo $userName; ?>"type="text"  name="userName">
                    <span class="error">*
                        <?php if(isset($userNameErr)){ ?>
                        <p class="error"><?php echo $userNameErr ?></p>
                        <?php } ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password"  name="pass">
                    <span class="error">*
                        <?php if(isset($passErr)){ ?>
                        <p class="error"><?php echo $passErr ?></p>
                        <?php } ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Confirm Password :</td>
                <td><input  type="password" name="confirmPass">
                    <span class="error">*
                        <?php if(isset($confirmPassErr)){ ?>
                        <p class="error"><?php echo $confirmPassErr ?></p>
                        <?php } ?>
                    </span>
                </td>
            </tr>
            
        </table> <br><br>
        
    </fieldset>
                       <tr>
                        <td>
                            <input class="btn btn-sm btn-success px-4" type="submit" name="submit" value="Submit">
                            
                        </td>
                    </tr>
          </fieldset> 
          </form>
   </div>
</body>
</html>