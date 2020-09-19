<!DOCTYPE html>
<html>
<head>
	<link href="sit.css" rel="stylesheet">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
	<body style="background:url('images/lock.jpg') no-repeat; background-size:cover;">
		<center><h1 style="color:white; background-color:black; font-size:50px; opacity:0.8";>People Counting</h1></center>
		<ul>
	<li><a href="home.php" style="background-color:red;">HOME</a></li>
  <li><a href="software.php">SOFTWARES</a></li>
  <li><a href="download.php">DOWNLOADS</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="logout.php">LOG OUT</a></li>
</ul>
<br><br><br><br><br><br><br>
<center>
	<h1 style="color:black;">Welcome </h1>
	<h3 style="color:black;">to our</h3>
	<h3 style="color:black;">People Counting System</h3>
	<div class="container" style="width:0px;margin-top:135px;">
			<form class="form-group" action="software.php" method="post" >
		<input type="submit" value="Let's Start -->>"name="login_submit" class="btn btn-primary" style="background-color: red">
		</form>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.7/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			Swal.fire({
						  title: 'Welcome to People Counting!',
						  text: ' Have a nice day! ',
						  imageUrl: 'images/cctv.jpg',
						  imageWidth: 400,
						  imageHeight: 250,
						  imageAlt: '',
						  animation: true,
					})
});
</script>
</html>