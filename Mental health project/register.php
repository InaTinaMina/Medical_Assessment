<!--REPLACE FORM WITH LINKS THAT LOOK LIKE BUTTONS USE BOOTSTRAP-->

<!DOCTYPE html>
<html>
<head>
	<title>RegisterPage</title>

</head>
<style>


body{
	margin:auto;
}

.child{

float: right;
width:55%;
padding-top: 20px;

}
.child1{

float: left;
width:45%;
text-align: right;
vertical-align: top;
}
.button{
	height: 39px;
	background: #FFFFFF;
	color: 	#000000;
	border: 2px solid #000000;
width: 300px;
	margin-bottom: 10px;
	margin-top:	 10px;
}
.button {
  transition-duration: 0.4s;
}

.button:hover {
  background-color: #e7e7e7; /* Green */
}


form{
padding-left:  10px;
  margin-bottom: 10px;
}
</style>

<body>


  <div class="heading" style="text-align:center" >
    <h2>Registration</h2>
  </div>

	<div class="parent"	>
		<div class="child1"style="display: inline-block; ">
    <h2>USER:</h2>
	</div>
	<form method="post">
<div class="child" style="display: inline-block;"	>
     <button formaction="registeriap.php" type="submit" class="button" style="margin-top:0px;"><b>
			 IAP Member</b>

		

		 <br>
		 <button formaction="registerself.php"type="submit" class="button"><b>Others (Self/Family)</b>
</button>
		  <br>
		 <p1>Use for self and/or family only
</p1>
<br>
</div>
</form>
</div>



</body>
</html>
