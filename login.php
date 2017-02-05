<!DOCTYPE html>

<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Login</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
 <p>
<form method="post" action="process.php">

	<div align="center" class="imgcontainer">
    <img src="images/community_service.jpg" alt="community service" class="avatar"height="300" width= "500">
  </div>
  <div align="center">
 <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" />
    </div>
    <div align="center">
 <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" /></div>
<div align="center">
<input type="submit" value="Submit">
<button type="button" class="cancelbtn">Cancel</button>

 </div>

 <div align="center" class="container" style="background-color:#f1f1f1">
    <input type="checkbox" checked="checked"> Remember me
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>
<div align="center">
 <p style="color:red; font-size:50px"><marquee direction="alternate">Every feedback will get a feedback.</marquee> </p>
 
 
 </div>
</body>
</html>



