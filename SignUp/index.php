<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>SignUp</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>


			<?php
			if (isset($_POST['add'])) {
			 $name=$_POST['name'];
			 $email = $_POST['email'];
			 $cell = $_POST['cell'];
			 $uname= $_POST['uname'];
			}

			$mgs='';

			if (empty($name) || empty($email) || empty($cell) || empty($uname)) {
				$mgs= "<p class=\"alert alert-danger\">Fill up the form first <button class=\"close\" data-dismiss=\"alert\">&times</button></p>";
			} else {
				$mgs= "<p class=\"alert alert-success\">Successfully SignUp <button class=\"close\" data-dismiss=\"alert\">&times</button></p>";
			}
			
			
			
			


			?>

			<!--form area-->

			<div class="wrap shadow">
				<div class="card">
					<div class="card-body">
						<h2>SignUp</h2>
						<?php

						if (isset($mgs)) {
							echo $mgs;
						}


						
						?>

						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Name</label>
								<input name="name" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">Email</label>
								<input name="email" class="form-control" type="email">
							</div>

							<div class="form-group">
								<label for="">Cell</label>
								<input name="cell" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">User Name</label>
								<input name="uname" class="form-control" type="text">
							</div>

							<div class="form-group">
								
								<input name="add" class="btn btn-primary" type="submit" value="SignUp">

							</div>

						</form>
					</div>
				</div>
			</div>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>