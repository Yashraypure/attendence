<!DOCTYPE html>
<html lang = "eng">
	<head>
		
		<meta charset = "utf-8" />
		<title> Attendance Monitoring System</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "logo.jpg" width = "300px" height = "100px"/>
					<p class = "navbar-text pull-right">Attendance Monitoring System</p>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6 well">

				<h2>Attendance Login</h2>
				<br />
				<div id = "result">
               
                   
			<video class="center" width="320" height="240" autoplay muted> 
                 <source src="102587-student.mp4"type="video/mp4">
                 <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
            </video>
                   
			<video class="center" width="320" height="240" autoplay muted> 
                 <source src="Untitled.mp4"type="video/mp4">
                 <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
            </video>
			
		
				</div>
				<br />
				<br />
				<form enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Student ID:</label>
						<input type = "text" id = "student" class = "form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<button type = "button" id = "login" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-login"></span>Login</button>
					</div>
				</form>
			</div>
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>