<!DOCTYPE html>
<html>
<body>
<form  method="post">
	<div>
		<fieldset>
	<legend>Login Form</legend>
	Username : <br>
	<input type="text" name="username" value=""placeholder="Give valid Username">
	<br>
	Password:<br>
	<input type="Password" name="pass" value="" placeholder="password"> <hr>
	<br>
	<input type="checkbox" name="remember"> <span>Remember Me</span>
	<br><br>
	<input type="submit" name="Login" value="Login">  <a href="Password Change.php">Forgot Password ?</a>
	</fieldset>
	</div>
	<br><br>
	<div>
		<fieldset>
		<legend>Change Password</legend>
			Current password : <br>
			<input type="password" name="currentpass" placeholder="Current password">
			<br>
			New Password :<br>
			<input type="password" name="newpass" placeholder="New Password">
			<br>
			Retype New Password : <br>
			<input type="password" name="Retypepass" placeholder="Re type password">
			<br><hr>
			<br>
			<input type="Submit" name="Submit" value="Submit">
			<br>
	</fieldset>
	</div>
	<br><br>
	<div>
		<fieldset>
    <legend>Profile Picture</legend>
    <div class="icon"><img src="P_1.png" height="100px" width="80px"></div>
    <div class="upload">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><hr>
    <br>
    <input type="submit" value="Submit" name="submit">
    <br>
    </div>
</fieldset>
	</div>
	<br><br>
	<div>
	<div class="registration"><fieldset>
	<legend>REGISTRATION</legend>
	<label for=" Name">Name : </label><br>
	<input type="text" name="name" value=""placeholder="Give valid Username"><hr>
	<br>
	<label for=" Email ">Email : </label> <br>
	<input type="text" name="email" value=""placeholder="Give valid Username"><hr>
	<br>
	<label for="Username ">Username : </label><br>
	<input type="text" name="username" value=""placeholder="Give valid Username">
	<br> <hr>
	<label for="Password ">Password : </label><br>
	<input type="Password" name="pass" value="" placeholder="password">
	<br>
	<label for="Password "> Confirm Password : </label><br>
	<input type="password" name="conpass" placeholder="New Password">
	<br>
	<fieldset>
			<legend >Gender</legend>
			<input type="radio" id="gender" name="male">Male</input>
			<input type="radio" id="gender" name="male">Female</input>
			<input type="radio" id="gender" name="male">Other</input>
	</fieldset>
	<fieldset>
		<legend>Date Of Birth</legend>
		 <label for="dateofbirth"></label>
		 <input type="date" id="dateofbirth" name="dateofbirth">
	</fieldset>
	<br>
	<input type="submit" name="Login" value="Submit"> <input type="submit" name="Reset" value="Reset"> 
	</fieldset>	
	</div>
	<br><br>
	
</form>
</body>
</html>