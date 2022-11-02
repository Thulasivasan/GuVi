<?php 
require_once('config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registration</title>
</head>
<body class="bg-dark">

	<br>
	<br>
	<br>
	<br>
	<br><br>

<div class="container">
	<div class="">
		<div class="border border-success border-4" >
			<div class="pt-2"></div>
			<div class="mx-auto" style="width: 230px;">
				<form action="registration.php" method="post">
					<div class="row">
						<div class="col-sm-12">
						<center>	
							<h1 id="signup">SignUp</h1>
							<p id="p" >Fill the form to register</p>
						</center>
						<hr class="mb-3 border border-success border-2">
						<div class="pt-2"></div>
						<b><label id="label" for="firstName">First Name</label></b>
						<div class="pt-2"></div>
						<input  class="form-control" id="firstName" type="text"placeholder="firstname" name="firstName" required>

						<b><label id="label" for="lastName">Last Name</label></b>
						<div class="pt-2"></div>
						<input class="form-control" id="lastName" type="text" placeholder="lastname" name="lastName" required>

						<b><label id="label" for="email">E-mail</label></b>
						<div class="pt-2"></div>
						<input class="form-control" id="email" type="email" placeholder="Email" name="email" required>

						<b><label id="label" for="Password">Password</label></b>
						<div class="pt-2"></div>
						<input class="form-control" id="password" type="Password"  placeholder="password"name="password" required>
						<div class="mb-3"></div>
						<input class="btn btn-success" id="register" type="submit" name="create" value="Sign Up">
						<div class="mb-3"></div>
						<div class="row">
							<h6 id="h6" class="col-sm-8 pt-2">Already a user ?</h6>
							<a class="btn btn-primary col-sm-12" href="login.php" role="button">LogIn</a>
						</div>	

						<hr class="mb-3 border border-success border-2">
					</div>				
				</form>	
			</div>
		</div>		
	</div>
</div>



	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- sweat_Alert_CDN -->
<script type="text/javascript">
	$(function(){

			$('#register').click(function(e){

				var valid = this.form.checkValidity();

				if(valid){
					var firstName = $('#firstName').val();
					var lastName = $('#lastName').val();
					var email = $('#email').val();
					var password = $('#password').val();

					e.preventDefault();

					$.ajax({
						type : 'POST',
						url  : 'process.php',
						data : {firstName : firstName, lastName : lastName, email : email, password : password},
						success : function(data){
								swal({
								  title: "Successfull",
								  text: data,
								  icon: "success",
								  button: "ok"
								})
						},
						error : function(data){
							swal({
								  title: "Error Occured",
								  text: "Something Wrong!",
								  icon: "error",
								  button: "ok"
								})
						}
					});
				}
			})
		});
</script>
	
	
</body>
</html>

