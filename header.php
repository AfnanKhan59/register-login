<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="style.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<header>
<nav>
		<img src="assets\imgs/logo.png" alt="logo" id="img" >
	</a>
	<ul>
		<li>
		<a href="index.php">Home</a>
		</li>
		<li>
		<a href="#">Portfolio</a>
		</li>
		<li>
		<a href="#">About Me</a>
		</li>
		<li>
		<a href="#">Contact</a>
		</li>
	</ul>
	<div>
		<form action="incldes/loign.inc.php" method="post">
			<input type="text" name="mailuid" placeholder="Username/Email..." >
			<input type="password" name="pwd" placeholder="Password..." >
			<button type="submit" name="login-submit" class="btn btn-primary">Login</button>
		</form>
		<a href="signup.php" class="btn btn-primary">Signup</a>
		<form action="incldes/logout.inc.php" method="post">
			<button type="submit" name="logout-submit" class="btn btn-primary">Logout</button>
		</form>
	</div>
</nav>

<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </header>
</body>
</html>