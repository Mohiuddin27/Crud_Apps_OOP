<?php

use App\Supports\Validate;
use App\Controllers\StaffController;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;
require_once "vendor/autoload.php";
$stu=new StudentController;
$teacher=new TeacherController;
$staff=new StaffController;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php
   
    if(isset($_POST['add'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$cell=$_POST['cell'];
		$uname=$_POST['uname'];

	
        
		if(empty($name) || empty($email) || empty($cell) || empty($uname)){
         $msg=Validate::msg('All fields are required!');
		}else if(Validate::email($email)==false){
			$msg=Validate::msg('Email is incorrect!');
		}else{
			
			$stu->studentCreate($name, $email, $cell, $uname);
			$msg=Validate::msg('Registration successfull','success');
		}
	}




 ?>
	
    <a href="table.php" style=" margin-top:40px; margin-left:380px;"class="btn btn-primary">View Students</a>
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up Students</h2>
				<?php 
				   if(isset($msg)){
					   echo $msg;
					
				   }
				 ?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
					<input type="file" class="form-control" name="photo">
					</div>
					
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="add" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
   
    if(isset($_POST['teacher'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$cell=$_POST['cell'];
		$uname=$_POST['uname'];

	
        
		if(empty($name) || empty($email) || empty($cell) || empty($uname)){
         $msg=Validate::msg('All fields are required!');
		}else if(Validate::email($email)==false){
			$msg=Validate::msg('Email is incorrect!');
		}else{
			
			$teacher->teacherCreate($name, $email, $cell, $uname);
			$msg=Validate::msg('Registration successfull','success');
		}
	}




 ?>

	<a href="teacher_table.php" style=" margin-top:40px; margin-left:380px;"class="btn btn-primary">View Teacher's</a>
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up for Teacher</h2>
				<?php 
				   if(isset($msg)){
					   echo $msg;
					
				   }
				 ?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
					<input type="file" class="form-control" name="photo">
					</div>
					
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="teacher" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php
   
   if(isset($_POST['staff'])){
	   $name=$_POST['name'];
	   $email=$_POST['email'];
	   $cell=$_POST['cell'];
	   $uname=$_POST['uname'];

   
	   
	   if(empty($name) || empty($email) || empty($cell) || empty($uname)){
		$msg=Validate::msg('All fields are required!');
	   }else if(Validate::email($email)==false){
		   $msg=Validate::msg('Email is incorrect!');
	   }else{
		   
		   $staff->staffCreate($name, $email, $cell, $uname);
		   $msg=Validate::msg('Registration successfull','success');
	   }
   }




?>
	<a href="staff_table.php" style=" margin-top:40px; margin-left:380px;"class="btn btn-primary">View Staff's</a>
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up for Staff</h2>
				<?php 
				   if(isset($msg)){
					   echo $msg;
					
				   }
				 ?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
					<input type="file" class="form-control" name="photo">
					</div>
					
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="staff" value="Sign Up">
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