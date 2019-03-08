<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cinema Booking System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="./css/style.css" rel="stylesheet">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Movies</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Snacks</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Events</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Connect</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="document.getElementById('modal-wrapper').style.display='block'">Sign-In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="document.getElementById('modal-wrapper1').style.display='block'">Register</a>
            </li>
        </ul>
	</div>
</div>
</nav>

<!-- Modal Sign In -->
<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="img/logo.png" alt="logo" class="logo">
      <h1 style="text-align:center">Sign In</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="uname">
      <input type="password" placeholder="Enter Password" name="psw">        
      <button class="modal-btn" type="submit">Sign In</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

<!-- Modal Register -->
<div id="modal-wrapper1" class="modal">
  
  <form class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="img/logo.png" alt="logo" class="logo">
      <h1 style="text-align:center">Register</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="First Name" name="first-name">
      <input type="text" placeholder="Last Name" name="last-name">  
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Contact Number" name="contact-no">
      <input type="email" placeholder="E-mail Address" name="email">  
      <input type="password" placeholder="Password" name="password">   
      <input type="password" placeholder="Confirm Password" name="confirm-password">     
      <button class="modal-btn" type="submit" name="submit" value="signup">Register</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Already have an account?</a>
    </div>
    
  </form>
  
</div>
