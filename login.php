<!DOCTYPE html>

<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Login</title>
</head>
<body>
 <p>
<form method="post" action="process.php">
	<div class="imgcontainer">
    <img src="images/community_service.jpg" alt="community service" class="avatar">
  </div>
  <div>
 <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" />

 <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" />

<input type="submit" value="Submit">
<input type="checkbox" checked="checked"> Remember me
 </div>

 <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
 
 
 
</body>
</html>



