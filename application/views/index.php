<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Twitter - Login or Sign-up</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/style.css">
	<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
</head>
<body style="background-image: url('./public/img/nature.jpg');">

<nav id="index_nav" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <div>
      <ul id="index_menu" class="nav navbar-nav" >
        <li><a href="#" id="home"><img src="<?php echo base_url();?>public/img/logo.png" width="20" height="18"> Home</a></li>
        <li><a href="#" id="about">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> Language : English </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" id="index_con">
	<div class="row">
		<div class="col-md-7" id="welcome_m">
			<h1>WELCOME TO TWITTER.</h1>

			<p id="welcome">Connect with your friends - and other fascinating 
			people. Get in-the-moment updates on the things
			that interest you. And watch events unfold, in real
			time, from every angle.
			</p>

		</div>
		<div class="col-md-4" id="log_m">

			<div class="jumbotron" id="log_in">
			<input type="text" class="form-control" placeholder="Email">
			</p>
			<div class="row">
				<div class="col-md-8">
					<input type="password" class="form-control" placeholder="password">
				</div>
				<div class="col-md-4">
					<button class="btn btn-info btn-sm" id="login">Log In</button>
				</div>
			</div>
			</div>

			</p>

			<div class="jumbotron" id="sign_up">
				<span>New to Twitter? Sign up</span>	
				<hr id="line">

				<input type="text" class="form-control" placeholder="Full name">
				</p>
				<input type="email" class="form-control" placeholder="Email">
				</p>
				<input type="password" class="form-control" placeholder="Password">
				</p>
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-8">
						<button class="btn btn-warning btn-sm" id="login">Sign up for Twitter</button>
					</div>
				</div>

			</div>

		</div>
		<div class="col-md-1">
			
		</div>
	</div>
</div>

</body>
</html>