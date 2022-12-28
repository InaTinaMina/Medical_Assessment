  <?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = md5($_POST['password']);
   $user_type =$_POST['user_type'];

   if($user_type == 'iap'){
   $select = " SELECT * FROM iap_user_details WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);


         $_SESSION['user_id'] = $row['iap_id'];
         header('location:questions.php');


   }else{
      $error[] = 'incorrect email or password!';
   }
 }
 
   else {
   	// code...   if($user_type == 'iap'){
  	   $select = " SELECT * FROM self_user_details WHERE email = '$email' && password = '$pass' ";

  	   $result = mysqli_query($con, $select);

  	   if(mysqli_num_rows($result) > 0){

  	      $row = mysqli_fetch_array($result);


  	         $_SESSION['admin_name'] = $row['name'];
  	         header('location:questions.php');


  	   }else{
  	      $error[] = 'incorrect email or password!';
  	   }
  	 }


};
?>
<!DOCTYPE html>
<html>
<head>
	<title>LoginPage</title>
</head>
<style>

body{

width: 30%;
margin: auto;

}

</style>

<body>
  <div class="heading">
    <h2>Login</h2>
  </div>


  <form action="" method="post">

    <div class="container">
			<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <label for="uname"><b>Username</b></label>
      <input type="email" placeholder="Enter email" name="email" required>
    </div>
      <div class="container">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
		</div>
		<div class="container">
			<select name="user_type">
         <option value="iap">IAP Member</option>
				 <option value="other">Other</option>
      </select>
</div>
<div class="container">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <span class="psw"><a href="register.php">Click here to register</a></span>
    </div>
  </form>


</body>
</html>
