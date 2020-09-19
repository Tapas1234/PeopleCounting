<!DOCTYPE html>
<html>
<head>
	<link href="sit.css" rel="stylesheet">
	<title>Software</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
	<body style="background:url('images/lock.jpg') no-repeat; background-size:cover;">
		<h1><marquee direction="RIGHT" style="color:white; background-color:black; font-size:50px; opacity:0.8";>People Counting</marquee></h1>
		<ul>
	<li><a href="home.php">HOME</a></li>
  <li><a href="software.php" style="background-color:red;">SOFTWARES</a></li>
  <li><a href="download.php">DOWNLOADS</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="logout.php">LOG OUT</a></li>
</ul>
	<div class="container" style="width:400px;margin-top:175px;">
		<div class="card">
			<img src="images/count.jpg" class="card-img-top">
		<div class="card-body">
			<form class="form-group" action="PeopleCounter.py" method="post" >
			<center>
		<h1>People Counting</h1>
		<input type="submit" value="Click Here to Start"name="login_submit" class="btn btn-primary">
		<a href="log.txt" input type="submit" class="btn btn-primary">See previous record</a></center>
		</form>
	</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>