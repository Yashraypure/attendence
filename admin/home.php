<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Attendance Monitoring System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
				<img src = "images\logo.jpg" width = "300px" height = "100px"/>
					<p class = "navbar-text pull-right">Attendance Monitoring System</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:130px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "student.php"><span class = "glyphicon glyphicon-user"></span> Student</a></li>
					</ul>
				</li>
				<li><a href = "record.php"><span class = "glyphicon glyphicon-book"></span> Record</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Home</div>
			<div class = "well col-lg-12">

			<video width="320" height="240" autoplay muted>
                 <source src="images\85293-attendance.mp4" type="video/mp4">
                 <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
            </video>
			   
      

            
			<video width="320" height="240" autoplay muted>
                 <source src="images\87585-attendance.mp4" type="video/mp4">
                 <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
            </video>


			
			<video width="320" height="240" autoplay muted>
                 <source src="images\87967-task-completed.mp4" type="video/mp4">
                 <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
            </video>



        
			
			<video width="320" height="240" autoplay muted>
                 <source src="images\93913-task-completed.mp4" type="video/mp4">
                 <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
            </video>


			<br />
			<br />	
			<br />	
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">&copy; Attendance Monitoring System 2023 </label>
				<label class = "pull-right">Developer:<a href="https://www.linkedin.com/in/yash-raypure-662b4b23b/">YASH RAYPURE</a></label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>