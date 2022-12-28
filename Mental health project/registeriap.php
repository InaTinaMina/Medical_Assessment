<!-- fix form types
    add otp
    add check box for read terms
    mmake sure its secure
    fix form in planner page using box sizing
    fix css page
-->

<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $fname = mysqli_real_escape_string($con, $_POST['fname']);
   $mname = mysqli_real_escape_string($con, $_POST['mname']);
   $lname = mysqli_real_escape_string($con, $_POST['lname']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
   $city = mysqli_real_escape_string($con, $_POST['city']);
   $state = mysqli_real_escape_string($con, $_POST['state']);
   $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
   $cmsno = mysqli_real_escape_string($con, $_POST['cmsno']);

   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM iap_user_details WHERE email = '$email' ";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         
         $insert = "INSERT INTO `MentalHealth`.`iap_user_details` (`F_Name`, `M_Name`, `L_Name`, `Email`, `Mobile_no`, `City`, `State`, `Pincode`, `CMS_no`, `Password`, `Date`) VALUES ('$fname', '$mname', '$lname', '$email', '$mobileno', '$city', '$state', '$pincode', '$cmsno', '$pass', current_timestamp());";
         mysqli_query($con, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>register : IAP Member</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="fname" required placeholder="enter your first name">
      <input type="text" name="mname"  placeholder="enter your middle name">
      <input type="text" name="lname" required placeholder="enter your last name">
      <input type="text" name="mobileno" required placeholder="91+">
      <input type="text" name="city" required placeholder="Enter Your City">
      <input type="text" name="state" required placeholder="Enter Your state">
      <input type="text" name="pincode" required placeholder="Enter Your Pincode">
      <input type="text" name="cmsno" required placeholder="CIAP Member Ship No">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">

      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="index.php">login now</a></p>
   </form>

</div>

</body>
</html>
