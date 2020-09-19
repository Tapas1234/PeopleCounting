<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
	<body style="background:url('images/lock.jpg') no-repeat; background-size:cover;">
		<center><h1 style="color:white; background-color:black; font-size:50px; opacity:0.8";>People Counting</h1></center>
	<div class="container" style="width:400px;margin-top:100px;">
		<div class="card">
			<img src="images/cctv.jpg" class="card-img-top">
		<div class="card-body">
		<form class="form-group" action="func.php" method="post" >
			<label>Username :</label><br>
		<input type="text" name="username" class="form-control" placeholder="Enter username" required><br>
		<label>Password :</label><br>
		<input type="Password" name="password" class="form-control" placeholder="Enter password" required><br>
		<input type="submit" name="login_submit" class="btn btn-primary">
		<input type="reset" class="btn btn-primary"value="Clear"/>
		</form>
	</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>