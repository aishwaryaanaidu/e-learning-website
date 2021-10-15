<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <style>
 .imgcontainer{
  width:50%;
  }
  body {font-family:sans-serif;
  background-color:blue;}
form {border: 3px solid #4d4dff;}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 4px 4px;
    display: inline-block;
    box-sizing: boder-box;
}
button {
    background-color: #1E88E5;
    padding: 14px 20px;
    margin: 4px 4px;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}
.container {
    padding: 50px;
	text-align:center;
	width:100%;
}
span.psw {
    padding-top: 8px;
}

.nav {
  padding:1%;
  background-color:white;
  min-height:5px;
  
}
.navbar{
 background-color:white;
 }
 .navbar-default {
    background-color: white;
    border-color:white;
	}
	.navbar {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;
}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.html"><img class="imgcontainer" src="seventh.png"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="login.php" style="color:white; background-color:#1E88E5;" ><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Login</a></li>
      <li><a href="signup.php" style="color:#1E88E5;"><span class="glyphicon glyphicon-user" style="color:#1E88E5;"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
  <br>
  <br>
  <br>
  <br>
  <div style="padding:50px; text-align:center; width:100%;">
  <h2 style="text-align:center;" >Login</h2>
      <form method="post" action="login.php" bordercolor="#fff">
  	<?php include('errors.php'); ?>
  <br>
  <br>
    <label for="username"></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	<br>
	<br>

    <label for="password"></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	<br>
	<span class="psw" style="text-align:left"><a href="pwd.html">Forgot password?</a></span>
	<br>
	<br>
    <button type="submit" style="color:white" name="login_user">Login</button>
	<br>
  </div>
</form>

</body>
</html>
