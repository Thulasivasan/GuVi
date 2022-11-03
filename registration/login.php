<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Login</title>
</head>
<body class="bg-dark">
	<br>
	<br>
	<br>	
	<br>
<div class="container">
	<div class="">
		<div class="border border-success border-4" >
			<div class="pt-2"></div>
			<div class="mx-auto" style="width: 230px;">
				<form action="welcome.php" method="post">
					<div class="row">
						<div class="col-sm-12">
						<center>	
							<h1 id="signup">Login</h1>
							<p id="p" >Fill the form to Login</p>
						</center>
						<hr class="mb-3 border border-success border-2">
						<div class="pt-2"></div>
						<b><label id="label" for="email">E-mail</label></b>
						<div class="pt-2"></div>
						<input class="form-control" id="email" type="email" placeholder="Email" name="email" required>

						<b><label id="label" for="Password">Password</label></b>
						<div class="pt-2"></div>
						<input class="form-control" id="password" type="Password"  placeholder="password"name="password" required>
						<div class="mb-3"></div>
						<input class="btn btn-success"  type="submit" name="welcome" value="Login">
						<div class="mb-3"></div>
						<div class="row">
							
						</div>
						<div class="mb-3"></div>
						</div>
						<div class="row">
							<h6 id="h6" class="col-sm-12 pt-2 mb-2">New user!</h6><br>
							<a class="btn btn-primary col-sm-12" href="registration.php" role="button">SignUp</a>
						</div>

						<hr class="mt-3 border border-success border-2">
					</div>				
				</form>	
			</div>
		</div>		
	</div>
</div>

</body>
