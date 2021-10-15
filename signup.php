<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>navi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  nav{
  width:100%;
  background-color:white;
  padding-top:8px;
  padding-bottom:8px;
  text-align:right;
  font-size:20px;
  min-height:30px;
  }
  .imgcontainer{
  width:40%;
  }
  body {font-family: sans-serif;}

input[type=text], input[type=password] {
    width: 30%;
    padding: 15px;
    margin: 10px 0 10px 0;
    display: inline-block;
    background: white;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
button {
    background-color:#1e88e5;
    color: white;
    padding: 14px 20px;
	margin:8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #1e88e5;
}

.cancelbtn, .signupbtn {
  float: center-right;
  width: 10%;
  
}
.container-fluid{
	text-align:center;
}
.navbar {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;

    
}

  </style>
</head>
<body>
<nav class="navbar navbar-fixed">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="home.html"><img src="seventh.png" alt="error" class="imgcontainer"></a>
</div>
<div class="container">
  <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:#1E88E5"><b >Login</b></span></a></li>
      <li class="active" ><a href="signup.php" style="color:white;background-color:#1E88E5"><span class="glyphicon glyphicon-user" ><b>SignUp</b></span></a></li>
    </ul>
	</div>
  </div>
</nav>
<body>
<div class="container-fluid"
    <h2 style="text-align:center"></b>Create an account</b></h2>
    <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
    <br>

	<label for="username"></label>
	<input type="text" placeholder="Enter Username" name="username" required value="<?php echo $username; ?>">
	<br>
    
		<label for="phone"></label>
	<input type="text" placeholder="Enter phone number" name="phone" required value="<?php echo $phone; ?>">
	<br>
    <label for="email"></label>
    <input type="text" placeholder="Enter Email" name="email" required value="<?php echo $email; ?>">
    <br>
	
    <label for="password1"></label>
    <input type="password" placeholder="Enter Password" name="password1" required value="<?php echo $password1; ?>">
    <br>
    <label for="password2"></label>
    <input type="password" placeholder="Confirm Password" name="password2" required value="<?php echo $password2; ?>">
    <br>
	<label for="answer"> 
    Please select a secret question and enter an answer. (required) 
</label> 

<br /> 

<select> 
    <option value="0">first school name?</option> 
    <option value="1">your vehicle number?</option> 
    <option value="2">what was your childhood nick name?</option> 
</select> 
<br>

<input style="background-color:white" 
       name="answer"
       type="text"  
       value="<?php echo $answer; ?>" 
       size="60" 
       maxlength="60" /> 

    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>