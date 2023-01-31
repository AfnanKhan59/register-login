<?php require "header.php";
?>

<main>
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Signup</h1>
			<form class="form-signup" action="includes/signup.inc.php" method="post">
				<style type="text/css">
					.form-signup{

height: 300px;

background: rgb(255,255,255);

border: rgb(238,232,170);
text-align: center;
border-width: 0%; 

}
				</style>
				<input type="text" name="uid" placeholder="Username">
				<br>
				<br>
				<input type="text" name="mail" placeholder="E-mail">
				<br>
				<br>
				<input type="password" name="pwd" placeholder="Password">
				<br>
				<br>
				<input type="password" name="pwd-repeat" placeholder="Confirm Password">
				<br>
				<br>
				<button type="sumbit" name="signup-submit">Signup</button>
			</form>
	</section>
</div>
</main>
<?php 
require"footer.php";
 ?>